<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required', 'string', 'max:255'],
            'phone' => ['string', 'max:255'],
            'address' => ['string', 'max:255'],
            'avatar' => ['string', 'max:255'],
            'postcode' => ['string'],
            'fee' => ['required', 'numeric'],
            'nationality' => ['string'],
        ]);

        if ($data['password'] !== $data['password_confirmation']) {
            return redirect()->back()->withErrors(['password' => 'Password and password confirmation do not match.']);
        }

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $request->avatar,
            'address' => $request->address,
            'fee' => $request->fee,
            'type' => 'member',
            'postcode' => $request->postcode,
            'nationality' => $request->nationality,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));

            $response = $stripe->checkout->sessions->create([
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'gbp',
                            'product_data' => ['name' => 'individual membership'],
                            'unit_amount' => $request->fee * 100,
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => route('success').'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('cancel'),
            ]);

            if (isset($response->id) && $response->id != '') {
                session()->put('product', 'individual membership');
                session()->put('quantity', 1);
                session()->put('price', $request->fee);
                session()->put('currency', 'gbp');
                session()->put('type', 'membership');
                return redirect($response->url);
            } else {
                return redirect()->route('cancel');
            }
        } else {
            sweetalert()->error('Oops! Something went wrong');
            return redirect('/');
        }
    }

}

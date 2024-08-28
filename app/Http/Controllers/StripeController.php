<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Rental;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function pay($id){
        
        $rental = Rental::where('id', $id)->first();

        return view('front.pay', compact('rental'));
    }

    public function stripe(Request $request)
    {
        // dd($request->all());

        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));

        $response = $stripe->checkout->sessions->create([
        'line_items' => [
            [
            'price_data' => [
                'currency' => $request->currency,
                'product_data' => ['name' => $request->product],
                'unit_amount' => $request->price*100,
            ],
            'quantity' => 1,
            ],
        ],
        'mode' => 'payment',
        'success_url' => route('success').'?session_id={CHECKOUT_SESSION_ID}', //'https://example.com/success',
        'cancel_url' => route('cancel'),//'https://example.com/cancel',
        ]);

        if(isset($response->id) && $response->id != '')
        {
            session()->put('product', $request->product);
            session()->put('quantity', 1);
            session()->put('price', $request->price);
            session()->put('currency', $request->currency);
            session()->put('type', $request->type);
            return redirect($response->url);
        }else {
            return redirect()->route('cancel');
        }
    }


    public function success(Request $request)
{
    if (isset($request->session_id)) {
        $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));
        $response = $stripe->checkout->sessions->retrieve($request->session_id);

        $payment = new Payment();
        $payment->payment_id = $response->id;
        $payment->product = session()->get('product');
        $payment->quantity = session()->get('quantity');
        $payment->price = session()->get('price');
        $payment->currency = session()->get('currency');
        $payment->type = session()->get('type');
        $payment->customer = $response->customer_details->name;
        $payment->email = $response->customer_details->email;
        $payment->status = $response->status;
        $payment->method = 'Stripe';

        // Determine type (either rental or membership)
        if ($payment->type === 'membership') {
            $payment->type = 'membership';
            sweetalert()->success('Membership registration completed successfully');
        } else if ($payment->type === 'business membership') {
            $payment->type = 'business membership';
            sweetalert()->success('Membership registration completed successfully');
        }
        else {
            $payment->type = 'rental';
            sweetalert()->success('Booking processing completed successfully');
        }

        $payment->save();

        session()->forget('product');
        session()->forget('quantity');
        session()->forget('price');
        session()->forget('type');

        return redirect()->route('invoice', ['payment_id' => $payment->id]);
    } else {
        sweetalert()->error('Oops! Something went wrong');
        return redirect()->route('cancel');
    }
}


    public function invoice(Request $request, $payment_id)
    {

        $payment = Payment::where('id', $payment_id)->first();

        return view('front.invoice', compact('payment'));
    }


    public function cancel()
    {

    }

}

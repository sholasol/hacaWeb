<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $name = Auth::user()->firstname;
        $type = Auth::user()->type;
        flash()->success('Hi '. $name.', you are logged in successfully.');

        if($type ==='admin')
        {
            return redirect()->intended(route('dashboard', absolute: false));
        }else{
            return redirect('/');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $name = Auth::user()->firstname;

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        

        //sweetalert()->error($name. ', you are logged out');
        flash()
            ->options([
                'timeout' => 3000, 
                'position' => 'bottom-left',
            ])
            ->warning($name. ' You are logged out.');

        return redirect('/');
    }
}

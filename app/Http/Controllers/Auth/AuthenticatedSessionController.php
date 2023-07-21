<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
//use Auth;

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

        //dd(Auth::user()->role);die();
        //dd(Auth::attempt([])); die();

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password ]) ) 
        {

            if(auth()->user()->role=='admin'){
               // return redirect()->route('home.admin');
                return redirect()->intended(RouteServiceProvider::HOMEADMIN);
            }
            if(auth()->user()->role=='user'){
                //return redirect()->route('home');
                return redirect()->intended(RouteServiceProvider::HOME);
            }
            if(auth()->user()->role=='superadmin'){ //nrmz
                //return redirect()->route('home');
                return redirect()->intended(RouteServiceProvider::HOMESUPERADMIN);
            }
        }


       // return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

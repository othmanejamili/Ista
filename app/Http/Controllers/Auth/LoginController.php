<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'password' => 'required|string',
        ]);

        // Attempt to log in the user
        $credentials = $request->only('password');
        if (\Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended($this->redirectTo);
        } else {
            // Authentication failed...
            return redirect()->back()->withInput($request->only('password'))->withErrors([
                'login' => 'These credentials do not match our records.',
            ]);
        }
    }
}

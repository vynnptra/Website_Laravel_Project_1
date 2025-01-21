<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function process(Request $request){
        $credential = $request->validate(
            [
                'email' =>'required|email',
                'password' => 'required'
            ], [
                'email.required' => 'email must be added',
                'email.email' => 'email must be valid',
                'password.required' => 'password must be added'
            ]
            );

            if (Auth::attempt($credential)) {
                $request->session()->regenerate();
                return redirect()->route('home');
            }
            return back()->withErrors([
                'email' => 'your email or password is incorrect',
            ])->onlyInput('email');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}

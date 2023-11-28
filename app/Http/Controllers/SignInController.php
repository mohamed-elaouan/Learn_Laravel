<?php

namespace App\Http\Controllers;

use Termwind\Components\Dd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SignInController extends Controller
{
    public function SignIn()
    {
        return view("Pages.Anth.SignIn");
    }
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required |email',
            'password' => 'required',
        ]);
        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            return redirect()->route("home");
        } else {
            return back()->withErrors(["email" => "email/Password incorrect"])->onlyInput('email');
        }
    }
    public function LogOut()
    {
        Session::flush();
        Auth::logout();
        return to_route('SignIn');
    }
}

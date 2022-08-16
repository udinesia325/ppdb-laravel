<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view("login");
    }
    public function process(Request $request)
    {
        $credentials = $request->validate([
            "email" => ["required", "email"],
            "password" => "required",
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended("/");
        }
      return redirect("login")->with("pesan","username atau password salah");
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}

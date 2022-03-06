<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);
        
        if(!Auth::attempt($request->except("_token")))
        {
            return redirect("/")->with("error", "Credentials do not match our record"); 
        }

        return redirect("/admin/dashboard");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
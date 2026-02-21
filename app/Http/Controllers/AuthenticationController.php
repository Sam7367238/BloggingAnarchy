<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{

    public function index()
    {
        return view("authentication.login");
    }

    public function authenticate(Request $request) {
        $fields = $request->validate(["username" => "required", "password" => "required"]);

        if (Auth::attempt($fields, true)) {
            $request->session()->regenerate();

            return to_route("posts.index")->with("status", "Logged In Successfully");
        }

        throw ValidationException::withMessages(["username" => "Credentials Do Not Match"]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect("/")->with("status", "Logged Out Successfully");
    }
}

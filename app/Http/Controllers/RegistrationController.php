<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('authentication.register');
    }

    public function store(RegistrationRequest $request)
    {
        $user = User::create($request->validated());

        Auth::login($user);

        return to_route('posts.index')->with('status', 'Signed Up Successfully');
    }
}

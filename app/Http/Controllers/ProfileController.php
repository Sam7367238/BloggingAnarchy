<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function resetPassword(ResetPasswordRequest $request)
    {
        $user = Auth::user();
        $passwords = $request->validated();

        if (! Hash::check($passwords['current_password'], $user->password)) {
            throw ValidationException::withMessages(['current_password' => 'The current password is incorrect.']);
        }

        $user->update([
            'password' => $passwords['new_password'],
        ]);

        return to_route('profile.index')->with('status', 'Password Reset Successfully');
    }
}

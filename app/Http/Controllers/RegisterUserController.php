<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $validated = request()->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'max:250'],
            'password' => ['required', Password::min(6)->letters(), 'confirmed'],
        ]);
        $user = User::create($validated);

        Auth::login($user);

        //redirect
        return redirect('/');
    }
}
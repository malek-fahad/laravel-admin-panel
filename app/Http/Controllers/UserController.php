<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;


class UserController extends Controller
{
    public function view(Request $request): View {

        $users = User::all();

        return view('users.all', compact(['users']));
    }

    public function add(Request $request): View {

        $roles = Role::all();

        return view('users.add', compact(['roles']));
    }

    public function store(Request $request): RedirectResponse {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role_id' => ['required', 'exists:roles,id'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Role assign (assuming you have a role_user pivot or use spatie/laravel-permission)
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('users.all')->with('success', 'User created successfully.');
    }
}

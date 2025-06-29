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

    public function show($id) {
        $user = User::with('role')->find($id);

        if ($user) {
            return response()->json([
                'success' => true,
                'data' => $user,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user not found.',
            ], 404);
        }
    }

    public function edit(Request $request, $id): View|RedirectResponse {
        if($id==1){
            if(Auth::user()->id!=1){
                return redirect()->route('users.all')->with('error', "You can't edit primary user.");
            }
        }
        if(Auth::user()->role_id!=1){
            return redirect()->route('users.all')->with('error', "You don't have permission to edit user.");
        }
        $user = User::with('role')->findOrFail($id);
        $roles = Role::all();

        return view('users.update', compact(['user','roles']));
    }

    public function update(Request $request, User $user): RedirectResponse {
        $request->validate([
            'name' => 'required|string|max:255',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user->name = $request->name;
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('users.all')->with('success', 'User updated successfully.');
    }

    public function destroy($id) {
        if($id == Auth::user()->id){
            return response()->json([
                'success' => false,
                'message' => "You can't delete your self from here.",
            ]);
        }

        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'user not found.',
            ]);
        }

        // Delete the image file if it exists
        if ($user->image && file_exists(public_path('storage/' . $user->image))) {
            @unlink(public_path('storage/' . $user->image));
        }

        // Delete the user
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'User deleted successfully.',
        ]);
    }
    

}

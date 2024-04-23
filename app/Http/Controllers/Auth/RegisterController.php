<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{

    public function index()
    {
        $user_types = User_type::all();
        return view('auth.register', compact('user_types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:125|min:6',
            'email' => 'required|string|email|max:125|unique:users',
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->max(16)
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ],
            'user_type' => 'required|exists:user_types,id'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');    
        if ($request->input('password') != $request->input('password_confirmation')) {
            return redirect()->route('home');
        }
        $user->password = Hash::make($request->input('password'));
        $user->user_type_id = $request->input('user_type');
        $user->save();
        return redirect()->route('home');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

}
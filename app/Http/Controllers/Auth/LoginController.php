<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();
        if (!$user) {
            return back()->withErrors(['email' => 'Verifique su correo']);
        }
        if (Auth::attempt($credentials) && Hash::check($credentials['password'], $user->password)) {
            session(['user_id' => $user->id]);
            session(['user_type' => $user->user_type_id]);
            $request->session()->regenerate();
            return redirect()->route('home');
            switch ($user->user_type_id) {
                case 1:
                    return redirect()->route('home');
                    break;
                 case 2:
                    return redirect()->route('home');
                    break;
             }
        }
        return back()->withErrors(['password' => 'Contraseña incorrecta']);
    }

    public function destroy()
    {
        session()->forget('user');
        session()->forget('user_type');
        Auth::logout();
        session()->regenerate();
        return redirect()->route('home');
    }
}


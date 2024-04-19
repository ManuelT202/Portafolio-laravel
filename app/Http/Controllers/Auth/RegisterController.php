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

    // public function create()
    // {
    //     return view('register.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
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


    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(User $user)
    // {
    //     return view('users.edit', ['user' => $user]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, User $user)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
    //         'password' => [
    //             'sometimes',
    //             'confirmed',
    //             Password::min(8)
    //                 ->letters()
    //                 ->numbers()
    //                 ->symbols()
    //                 ->uncompromised()
    //         ],
    //     ]);

    //     $user->name = $request->input('name');
    //     $user->email = $request->input('email');
    //     if ($request->has('password')) {
    //         $user->password = Hash::make($request->input('password'));
    //     }
    //     $user->save();
    //     return redirect()->route('users.index');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

    // public function showRegistrationForm()
    // {
    //     return view('auth.register');
    // }

    // /**
    //  * Handle a registration request for the application.
    //  */
    // public function register(Request $request)
    // {   

    //     $this->validator($request->all())->validate();

    //     $this->create($request->all());

    //     return redirect()->route('home');
    // }

    // /**
    //  * Get the guard to be used during registration.
    //  */
    // protected function guard()
    // {
    //     return Auth::guard();
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
    

    // /**
    //  * Get the validator for an incoming registration request.
    //  */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    // /**
    //  * The user has been registered.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  mixed  $user
    //  * @return mixed
    //  */
    // protected function registered(Request $request, $user)
    // {
    //     return redirect()->route('home');

    //     // return redirect($this->redirectPath());

    //     // return redirect($this->redirectPath())->with('status', 'Your account has been created!');
    // }

    // /**
    //  * Get the broker to be used during registration.
    //  */
    // protected function broker()
    // {
    //     return Password::broker();

    //     // return Password::broker('users');

    //     // return Password::broker('admin');
    // }

}
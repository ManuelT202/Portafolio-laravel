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
        Auth::logout();
        session()->regenerate();
        return redirect()->route('home');
    }


    // <?php

    // namespace App\Http\Controllers\Auth;
    
    // use App\Http\Controllers\Controller;
    // use Illuminate\Http\Request;
    // use Illuminate\Support\Facades\Auth;
    // use App\Models\User;
    // use Illuminate\Support\Facades\Hash;
    
    // class LoginController extends Controller
    // {
    //     public function showLoginForm()
    //     {
    //         return view('auth.login');
    //     }
    
    //     public function login(Request $request)
    //     {
    //         $credentials = $request->only('email', 'password');
    //         $user = User::where('email', $credentials['email'])->first();
    //         if (!$user) {
    //             return redirect()->route('login')->withErrors(['email' => 'Verifique su correo']);
    //         }
    //         if (Auth::attempt($credentials) && Hash::check($credentials['password'], $user->password)) {
    //             session(['user_id' => $user->id]);
    //             session(['user_type' => $user->user_type_id]);
    //             $request->session()->regenerate();
    //             switch ($user->user_type_id) {
    //                 case 1:
    //                     return redirect()->route('homes.home_admin');
    //                     break;
    //                 case 2:
    //                     return redirect()->route('homes.home_user');
    //                     break;
    //             }
    //         }
    //         return redirect()->route('login')->withErrors(['password' => 'Contraseña incorrecta']);
    //     }
    
    
    
    //     public function logout()
    //     {
    //         session()->forget('user');
    //         Auth::logout();
    //         session()->regenerate();
    //         return redirect()->route('home');
    //     }
    
    
    
    
     //
    // 
    // 
    // 

    // /**
    //  * Handle a login request to the application.
    //  */
    // public function login(Request $request)
    // {
    //     $this->validateLogin($request);

    //     // If the class is using the ThrottlesLogins trait, we can automatically throttle
    //     // the login attempts for this application. We'll key this by the username and
    //     // the IP address of the client making these requests into this application.
    //     if (method_exists($this, 'hasTooManyLoginAttempts') &&
    //         $this->hasTooManyLoginAttempts($request)) {
    //         $this->fireLockoutEvent($request);

    //         return $this->sendLockoutResponse($request);
    //     }

    //     if ($this->attemptLogin($request)) {
    //         return $this->sendLoginResponse($request);
    //     }

    //     // If the login attempt was unsuccessful we will increment the number of attempts
    //     // to login and redirect the user back to the login form. Of course, when this
    //     // user surpasses their maximum number of attempts they will get locked out.
    //     $this->incrementLoginAttempts($request);

    //     return $this->sendFailedLoginResponse($request);
    // }

    // /**
    //  * Validate the user login request.
    //  */
    // protected function validateLogin(Request $request)
    // {
    //     $request->validate([
    //         $this->username() => 'required|string',
    //         'password' => 'required|string',
    //     ]);
    // }   

    // /**
    //  * Get the login username to be used by the controller.
    //  */
    // public function username()
    // {
    //     return 'email';
    // }
    
    // /**
    //  * Log the user out of the application.
    //  */
    // public function logout(Request $request)
    // {
    //     $this->guard()->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     if ($response = $this->loggedOut($request)) {
    //         return $response;
    //     }

    //     return $request->wantsJson()
    //                 ? new Response('', 204)
    //                 : redirect('/');
    // }

    // /**
    //  * The user has logged out of the application.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return mixed
    //  */
    // protected function loggedOut(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Get the guard to be used during authentication.
    //  */
    // protected function guard()
    // {
    //     return Auth::guard();
    // }

    // /**
    //  * Get the needed authorization credentials from the request.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return array
    //  */
    // protected function credentials(Request $request)
    // {
    //     return $request->only($this->username(), 'password');
    // }

    // /**
    //  * Send the response after the user was authenticated.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // protected function sendLoginResponse(Request $request)
    // {
    //     $request->session()->regenerate();

    //     $this->clearLoginAttempts($request);

    //     if ($response = $this->authenticated($request, $this->guard()->user())) {
    //         return $response;
    //     }

    //     return $request->wantsJson()
    //                 ? new Response('', 204)
    //                 : redirect()->intended($this->redirectPath());
    // }
}


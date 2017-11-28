<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers
    {
        attemptLogin as attemptLoginAtAuthenticacionUsuer;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest',['except' => 'logout']);
    }

    protected function showLoginForm()
     { 
        return view('adminPgi.auth.login');
    }
   
   public function username()
   {
    return config('auth.providers.users.field','email');
   }


    protected function attemptLogin(Request $request)
    {
        if($this->username() === 'email') return $this->attemptLoginAtAuthenticacionUsuer($request);
        if(! $this->attemptLoginAtAuthenticacionUsuer($request));
        return false;
    }

    protected function attemptLoginUsinUsernameAsAnEmail(Request $request)
    {
        return $this->guard()->attempt(
            ['email' => $request->input('password')], $request->has('remember')); 
    }

    

}

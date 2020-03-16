<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

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
        $this->middleware('guest')->except('logout');
    }

    public function username(){
        return 'username';
    }

    public function showForm(){
        if(\Auth::user()){
            return redirect()->back();
        }

        return view('auth.login');
    }

    public function login(Request $request){
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
    }

        if ($this->attemptLogin($request)) {

            // return 'sud';
            return $this->sendLoginResponse($request);
        }
        $this->incrementLoginAttempts($request);

        // return 'wa'.$request['username'].' '.$request['password'];
        return $this->sendFailedLoginResponse($request);
    }

    public function logout()
    {
        \Auth::guard()->logout();
        return redirect('/');
    }
}

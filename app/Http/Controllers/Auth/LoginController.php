<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
    protected $redirectTo = '/dashboard';

     public function showLoginForm()
    {
        return view('Admin.auth.admin-login');
    }


     public function login(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());die;
        $this->validateLogin($request);

      
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
        else{
             $message = "Enter your correct email ID & Password";
            return redirect()->route('admin.login')->with('successMessage', $message);
        }

  

        //return $this->sendFailedLoginResponse($request);
    }


   public function logout(){
        $this->guard()->logout();
        return redirect()->route('admin.login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

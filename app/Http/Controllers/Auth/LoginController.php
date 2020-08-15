<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
 use Auth;
 use App\Poweradmin;
 use App\Http\Controllers\Auth\Session;
 use App\Client;
 use app\UserClient;
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
    protected $redirectTo = 'admin.home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        //Add these following lines
        $this->middleware('guest:poweradmin')->except('logout');
        $this->middleware('guest:client')->except('logout');
    }

   
    public function Login(Request $request)
    {

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:4'

        ]);
     
        if (Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            
            return redirect()->intended('/admin');
        }
        if (Auth::guard('client')->attempt(['customer_email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
     
            return redirect()->intended('/client/login');
        }
        if (Auth::guard('poweradmin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
          
            return redirect()->intended('/poweradmin');
        }

       
        return back()->withInput($request->only('email', 'remember'));
        
    }

    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'poweradmin']);
    }
     
   
     
     
    public function showClientLoginForm()
    {
        return view('auth.login', ['url' => 'client']);
    }
     
   
   
  
}

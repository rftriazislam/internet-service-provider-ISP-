<?php
  namespace App\Http\Controllers\Auth;
  use App\User;
  use App\Client;
  use App\Poweradmin;
  use App\Http\Controllers\Controller;
  use Illuminate\Support\Facades\Hash;
  use Illuminate\Support\Facades\Validator;
  use Illuminate\Foundation\Auth\RegistersUsers;
  use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    //   // add these following lines
    $this->middleware('guest:poweradmin');
    $this->middleware('guest:client');
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }
   
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }










//--------------------------Power Admin-------------------------------------------------------------



protected function validatorpower(array $data)
{
    return Validator::make($data, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:poweradmins'],
        'password' => ['required', 'string', 'min:6', 'confirmed'],
    ]);
}


    public function showAdminRegisterForm()
{
    return view('auth.register', ['url' => 'poweradmin']);
}
 
/**
 * @param Request $request
 *
 * @return RedirectResponse
 */


protected function createAdmin(Request $request)
{
    $this->validatorpower($request->all())->validate();
    Poweradmin::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
    return redirect()->intended('newpowerregister');
}
 
 /**
 * @return Factory|View
 */




 //--------------------------------------------end PowerAdmin----------------------------------
 //--------------------------------------------start Client------------------------------------
 protected function validatorclient(array $data)
 {
     return Validator::make($data, [
         'name' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
         'password' => ['required', 'string', 'min:6', 'confirmed'],
     ]);
 }
public function showClientRegisterForm()
{
    return view('auth.register', ['url' => 'client']);
}
 
/**
 * @param Request $request
 *
 * @return RedirectResponse
 */
protected function createClient(Request $request)
{
    $this->validatorclient($request->all())->validate();
    Client::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
    return redirect()->intended('login/client');
}
//------------------------------------------------end Client---------------------------
}

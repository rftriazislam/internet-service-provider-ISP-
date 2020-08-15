<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UserClient;
use App\Payment;
class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:client');
    }
 
    /*
     * After logging as client the dashboard for client
     * @return \Illuminate\Contracts\Support\Referable
     * */
    public function clientDashboard()
    {
        return view('clientuser.dashboard');
    }
    public function payment_issue()
    {
        $id=Auth::user()->id;
    //     $password=Auth::user()->password;
    //     $user_info=UserClient::all()->where('customer_name',$name)->where('password',$password);

    $payment=Payment::all()->where('user_name',$id);
        return view('clientuser.payment_issue',compact('payment'));
    }
    public function user_profile()
    {

        
        return view('clientuser.user_profile');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pakage;
use App\UserClient;
use App\Client;
use App\Payment;
use App\Contact;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class PoweradminController extends Controller
{
  
  
    public function __construct()
    {
        $this->middleware('auth:poweradmin');
    }
 
    /*
     * After logging as client the dashboard for client
     * @return \Illuminate\Contracts\Support\Referable
     * */
    public function adminDashboard()
    {


      $total_user=UserClient::all()->count();
      $total_connection=UserClient::all()->where('status',1)->count();
      $total_amount=Payment::all()->sum('price');
        return view('poweradmin.dash',compact('total_user','total_connection','total_amount'));
    }
  
  





//---------start newpakage-----
public function newpakage()
{


  return view('poweradmin.pages.newpakage');

}
 public function savepakage(Request $request)
{

$pakage=$request->validate([
'pakage_name' => 'required',
'pakage_type' => 'required',
'speed' => 'required',
'pakage_price' => 'required',
'connection_type'=>'required'
]);


Pakage::insert([
'pakage_name' => $request->pakage_name,
'pakage_type' => $request->pakage_type,
'speed' => $request->speed,
'pakage_price' => $request->pakage_price,
'connection_type' => $request->connection_type,
'created_at' => Carbon::now()
]);


return back()->with('message','Successfully save Pakage Data');
}



public function allpakage()
{

  $allpakage=Pakage::all();


  return view('poweradmin.pages.allpakage',compact('allpakage'));

}



public function pakageDelete($pakage_id)
{
 
 Pakage:: find($pakage_id)->delete();

 
 return back()->with('message','Successfully Delete Pakage');

}


public function pakageUnpublishpower($pakage_id)
{
$pakage=Pakage::find($pakage_id);
$pakage->status=1;
$pakage->save();
$name= Pakage:: find($pakage_id)->pakage_name;
 return back()->with('message','Successfully Publish Pakage  :'.$name);
}


public function pakagePublishpower($pakage_id)
{
$pakage=Pakage::find($pakage_id);
$pakage->status=0;
$pakage->save();
 $name= Pakage:: find($pakage_id)->pakage_name;
 return back()->with('message','Successfully unPublish Pakage  :'.$name);

}


public function pakageEdit($pakage_id)
{
     $pakage=  Pakage::findOrFail($pakage_id);
 
 return view('poweradmin.pages.edit.pakageEdit',compact('pakage'));

}

public function pakageUpdatepower(Request $request)
{

  Pakage::find($request->pakage_id)->update([
    'pakage_name' => $request->pakage_name,
'pakage_type' => $request->pakage_type,
'speed' => $request->speed,
'pakage_price' => $request->pakage_price,
'connection_type' => $request->connection_type,
'created_at' => Carbon::now()
     ]);



 
     return redirect('allpakagepower');
}



//--------end newpakage

//-------start user



public function alluser_info_power(){

  $alluser=Payment::all();
  return view('poweradmin.pages.alluser_info',compact('alluser'));

}

public function userinfoUnpublishpower($user_id)
{
$user=UserClient::find($user_id);
$user->status=1;
$user->save();
$name= UserClient:: find($user_id)->user_name;
 return back()->with('message','Successfully Connect UserClient  :'.$name);
}


public function userinfoPublishpower($user_id)
{
$user=UserClient::find($user_id);
$user->status=0;
$user->save();
 $name= UserClient:: find($user_id)->user_name;
 return back()->with('message','Successfully Disconnect UserClient  :'.$name);

}

public function newuser()
{
  $pakage=Pakage::all()->where('status',1);
  return view('poweradmin.pages.newuser',compact('pakage'));

}

public function saveUser(Request $request)
{
    
     
  $user_client=$request->validate([
    'customer_name' => 'required|unique:user_clients,customer_name',
    'customer_phone' => 'required|unique:user_clients,customer_phone',
    'user_name' => 'required|unique:user_clients,user_name',
    'customer_address' => 'required',
    // 'mitrotik_password' => 'required',
    
    'password' => ['required', 'string', 'min:6', 'confirmed'],
    'pakage_type'=>'required'
]);


UserClient::insert([
  'customer_name' => $request->customer_name,
  'pakage_type' => $request->pakage_type,
  'customer_phone' => $request->customer_phone,
  'customer_email' => $request->customer_email,
  'user_name' => $request->user_name,
  'customer_address' => $request->customer_address,
  // 'mitrotik_password' => $request->mitrotik_password,
  'pikopiko'=>$request->password,
  'password' => Hash::make($request->password),
  'created_at' => Carbon::now()
]);



return back()->with('message','Successfully save User Data');
}




public function alluser()
{
  $alluser=UserClient::all();
  return view('poweradmin.pages.alluser',compact('alluser'));

}
public function userUnpublishpower($user_id)
{
$user=UserClient::find($user_id);
$user->status=1;
$user->save();
$name= UserClient:: find($user_id)->user_name;
 return back()->with('message','Successfully Connect UserClient  :'.$name);
}


public function userPublishpower($user_id)
{
$user=UserClient::find($user_id);
$user->status=0;
$user->save();
 $name= UserClient:: find($user_id)->user_name;
 return back()->with('message','Successfully Disconnect UserClient  :'.$name);

}
public function userprofilepower($user_id)
{
  $user=UserClient::find($user_id);
  $payment=Payment::all()->where('user_name',$user_id);

 return  view('poweradmin.pages.userprofile',compact('user','payment'));
}
public function userDelete($user_id)
{
 
  UserClient:: find($user_id)->delete();

  // $name= UserClient:: find($user_id)->user_name;

  // return back()->with('message','Successfully Delete User :'.$name);
  return back()->with('message','Successfully Delete User ');
}
public function userEdit($user_id)
{
     $user=  UserClient::findOrFail($user_id);
     $pakage=Pakage::all()->where('status',1);
 return view('poweradmin.pages.edit.userEdit',compact('user','pakage'));

}
public function userUpdatepower(Request $request){
UserClient::find($request->user_id)->update([
'customer_name' => $request->customer_name,
'pakage_type' => $request->pakage_type,
'customer_phone' => $request->customer_phone,
'customer_email' => $request->customer_email,
// 'mitrotik_password' => $request->mitrotik_password,
'pikopiko'=>$request->password,

'user_name' => $request->user_name,
'customer_address' => $request->customer_address,
'created_at' => Carbon::now()
]);


return redirect('alluserpower');


}


//-------end user------------




//--------start payment--------------

public function newpayment()
{ 
  $user=UserClient::all()->where('status',1);
  return view('poweradmin.pages.newpayment',compact('user'));

}


public function savePayment(Request $request)
{
    
 $payment=$request->validate([
   
    'user_name' => 'required',
    'month_name' => 'required',
    'price' => 'required',
    'short_note' => 'required',
    'paid_date'=>'required',
    'payment_method'=>'required'
]);


Payment::insert([
  'user_name' => $request->user_name,
  'month_name' => $request->month_name,
  'price' => $request->price,
  'short_note' => $request->short_note,
  'paid_date' => $request->paid_date,
  'payment_method' => $request->payment_method,
  'created_at' => Carbon::now()
]);


return back()->with('message','Successfully save Payment Data');
}


public function allpayment()
{
  $allpayment=Payment::all();
  return view('poweradmin.pages.allpayment',compact('allpayment'));

}

public function paymentUnpublishpower($payment_id)
{
$payment=Payment::find($payment_id);
$payment->status=1;
$payment->save();
$name= Payment:: find($payment_id)->user_client->user_name;
 return back()->with('message','Successfully Active Payment  :'.$name);
}


public function paymentPublishpower($payment_id)
{
$payment=Payment::find($payment_id);
$payment->status=0;
$payment->save();
 $name= Payment:: find($payment_id)->user_client->user_name;
 return back()->with('message','Successfully Inactive Payment :'.$name);

}
public function paymentDelete($payment_id)
{
 
  Payment:: find($payment_id)->delete();


  return back()->with('message','Successfully Delete Payment ');
}

public function paymentEdit($payment_id)
{
     $payment=  Payment::findOrFail($payment_id);
     $user=UserClient::all()->where('status',1);
     
     return view('poweradmin.pages.edit.paymentEdit',compact('payment','user'));

}
public function paymentUpdate(Request $request){

Payment::find($request->payment_id)->update([
'user_name' => $request->user_name,
'month_name' => $request->month_name,
'price' => $request->price,
'short_note' => $request->short_note,
'paid_date' => $request->paid_date,
'payment_method' => $request->payment_method,
'created_at' => Carbon::now()
]);

return redirect('allpayment');


}


//-----end payment-------------


//------start customerloginifo
public function customerlogininfo()
{
return view('poweradmin.pages.customerlogininfo');

}
//-----end customerloginifo


//------start message
public function message()
{
$message=Contact::all();

return view('poweradmin.pages.message',compact('message'));

}
public function messageDelete($contact_id)
{
$message=Contact::find($contact_id)->delete();

return back()->with('message','Successfully delete');

}



public function users(){

}
//-----end message

//------start newadminregister
public function newadminregister()
{
return view('poweradmin.pages.newadminregister');

}
public function admininfo()
{
return view('poweradmin.pages.admininfo');

}
//-----end newadminregister


//------start newpowerregister
public function newpowerregister()
{
return view('poweradmin.pages.newpowerregister');

}
public function powerregisterinfo()
{
return view('poweradmin.pages.powerregisterinfo');

}





//-----end cnewpowerregister





//--------------------------------------------start Client------------------------------------

 public function userregister(){
return view('poweradmin.pages.clientregister');
}



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
   return redirect('client/register');
}







   
}

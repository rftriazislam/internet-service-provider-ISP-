<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pakage;
use App\UserClient;
use App\Payment;
use App\Contact;
use App\Poweradmin;
use App\User;
use App\Client;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
     
        $this->middleware('auth');
      
    }
   

    public function index()
    {
  
    $total_user=UserClient::all()->count();
    $all_user=UserClient::all();

    $total_connection=UserClient::all()->where('status',1)->count();
    $total_active_connection=UserClient::all()->where('status',1);

    $total_amount=Payment::all()->sum('price');
      return view('adminPanel.home',compact('total_user','total_connection','total_amount','all_user','total_active_connection'));

    }
public function datatable(){
  return view('adminPanel.pages.datatable');

}




  
//---------start newpakage-----
    public function newpakage()
    {

  
      return view('adminPanel.pages.newpakage');

    }
     public function savepakage(Request $request)
{
    
 $pakage=$request->validate([
    // 'pakage_name' => 'required|unique:pakages,pakage_name',
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


      return view('adminPanel.pages.allpakage',compact('allpakage'));

    }

    

    public function pakageDelete($pakage_id)
    {
     
     Pakage:: find($pakage_id)->delete();

     
     return back()->with('message','Successfully Delete Pakage');

    }
   


    public function pakageEdit($pakage_id)
    {
         $pakage=  Pakage::findOrFail($pakage_id);
     
     return view('adminPanel.pages.edit.pakageEdit',compact('pakage'));

    }

public function pakageUpdate(Request $request)
    {
    
      Pakage::find($request->pakage_id)->update([
        'pakage_name' => $request->pakage_name,
  'pakage_type' => $request->pakage_type,
  'speed' => $request->speed,
  'pakage_price' => $request->pakage_price,
  'connection_type' => $request->connection_type,
  'created_at' => Carbon::now()
         ]);



     
         return redirect('allpakage');
    }
    


    public function pakageUnpublish($pakage_id)
{
$pakage=Pakage::find($pakage_id);
$pakage->status=1;
$pakage->save();
$name= Pakage:: find($pakage_id)->pakage_name;
 return back()->with('message','Successfully Publish Pakage  :'.$name);
}


public function pakagePublish($pakage_id)
{
$pakage=Pakage::find($pakage_id);
$pakage->status=0;
$pakage->save();
 $name= Pakage:: find($pakage_id)->pakage_name;
 return back()->with('message','Successfully unPublish Pakage  :'.$name);

}
//--------end newpakage

//-------start user


public function alluser_info(){

  $alluser=Payment::all();
  return view('adminPanel.pages.alluser_info',compact('alluser'));
}
public function userinfoUnpublish($user_id)
{
$user=UserClient::find($user_id);
$user->status=1;
$user->save();
$name= UserClient:: find($user_id)->user_name;
 return back()->with('message','Successfully Connect UserClient  :'.$name);
}


public function userinfoPublish($user_id)
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
      return view('adminPanel.pages.newuser',compact('pakage'));

    }
    protected function validatorclient(array $data)
{
    return Validator::make($data, [
        'customer_name' => ['required', 'string', 'max:255'],
        'customer_email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
        'password' => ['required', 'string', 'min:6', 'confirmed'],
    ]);
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
      
      'password' => Hash::make($request->password),
      'pikopiko'=>$request->password,
      'created_at' => Carbon::now()
    ]);

//   $this->validatorclient($request->all())->validate();
//   Client::create([
//     'name' => $request->customer_name,
//     'email' => $request->customer_email,
//     'password' => Hash::make($request->password),
// ]);
    
    
    return back()->with('message','Successfully save User Data');
    }
    
    

    
    public function alluser()
    {
      $alluser=UserClient::all();
      

      return view('adminPanel.pages.alluser',compact('alluser'));

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
     return view('adminPanel.pages.edit.userEdit',compact('user','pakage'));

    }
public function userUpdate(Request $request){
  UserClient::find($request->user_id)->update([
    'customer_name' => $request->customer_name,
    'pakage_type' => $request->pakage_type,
    'customer_phone' => $request->customer_phone,
    'customer_email' => $request->customer_email,
    'user_name' => $request->user_name,
    // 'mitrotik_password' => $request->mitrotik_password,
    'password' => Hash::make($request->password),
    'pikopiko'=>$request->password,
    'customer_address' => $request->customer_address,
    'created_at' => Carbon::now()
  ]);
  
  
  return redirect('alluser');
  
  
}

public function userprofile($user_id)
{
  $user=UserClient::find($user_id);
  $payment=Payment::all()->where('user_name',$user_id);

 return  view('adminPanel.pages.userprofile',compact('user','payment'));
}

public function userUnpublish($user_id)
{
$user=UserClient::find($user_id);
$user->status=1;
$user->save();
$name= UserClient:: find($user_id)->user_name;
 return back()->with('message','Successfully Connect UserClient  :'.$name);
}


public function userPublish($user_id)
{
$user=UserClient::find($user_id);
$user->status=0;
$user->save();
 $name= UserClient:: find($user_id)->user_name;
 return back()->with('message','Successfully Disconnect UserClient  :'.$name);

}
public function activeuser(){
  $alluser=UserClient::all()->where('status',1);
  return view('adminPanel.pages.activeuser',compact('alluser'));

}
public function inactiveuser(){
  $alluser=UserClient::all()->where('status',0);
      return view('adminPanel.pages.inactiveuser',compact('alluser'));

}

//-------end user------------




//--------start payment--------------

    public function newpayment()
    { 
      $user=UserClient::all()->where('status',1);
      return view('adminPanel.pages.newpayment',compact('user'));

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
      return view('adminPanel.pages.allpayment',compact('allpayment'));

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
         
         return view('adminPanel.pages.edit.paymentEdit',compact('payment','user'));

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

public function paymentUnpublish($payment_id)
{
$payment=Payment::find($payment_id);
$payment->status=1;
$payment->save();
$name= Payment:: find($payment_id)->user_client->user_name;
 return back()->with('message','Successfully Active Payment  :'.$name);
}


public function paymentPublish($payment_id)
{
$payment=Payment::find($payment_id);
$payment->status=0;
$payment->save();
 $name= Payment:: find($payment_id)->user_client->user_name;
 return back()->with('message','Successfully Inactive Payment :'.$name);

}

public function billingreceipt(){
  return view('adminPanel.pages.billingreceipt');
}
public function userReceipt(Request $request){

  $user_name=UserClient::select('*')->
              where('user_name',$request->user_name)
             ->orwhere('id', $request->user_name)
             ->orwhere('customer_name', $request->user_name)
             ->orwhere('customer_phone',$request->user_name)->get();


if($user_name=='[]'){
return back()->with('message','Invalied User');
}else{
  foreach($user_name as $r){
    $user_id= $r->id;
  }
  
  $user_payment=Payment::all()->where('user_name',$user_id);
    $sum_price= Payment::all()->where('user_name',$user_id)->sum('price');


    // $receipt=Payment::find($request->userreceipt);
    return view('adminPanel.pages.showreceipt',compact('user_payment','sum_price'));
}

}

public function autocomplete(Request $request)

    {
        // $data = Payment::select("id")
        //         ->where("id","LIKE","%{$request->input('query')}%")
        //         ->get();
        // return response()->json($data);

       
          if($request->get('query'))
          {
           $query = $request->get('query');
           $data = UserClient::select('user_name')
             ->where('id',"$query")
             ->Orwhere('customer_name', 'LIKE', "%{$query}%")
             ->Orwhere('customer_phone','LIKE',"%{$query}%")
             ->Orwhere('user_name','LIKE',"%{$query}%")
             ->get();
             $output = '';
             
         if (count($data)>0) {
           $output = '<ul class="list-group" style="display: block; position: relative;margin-left: 40px; z-index:1;  overflow: scroll;height:400px" >';
          //  style="display:block;margin-left: 40px; position:relative;list-style-type:none;"
           foreach($data as $row)
           {
            $output .= '
            <li class="list-group-item" value="'.$row->id.'" >'.$row->user_name.'</li>
            ';
           }
           $output .= '</ul>';
        }
        else {
             
            $output .= '<li class="list-group-item">'.'No results'.'</li>';
         
          }
          return $output;
        }
    }


//-----end payment-------------


//------start customerloginifo
public function customerlogininfo()
{
  return view('adminPanel.pages.customerlogininfo');

}
//-----end customerloginifo


//------start message
public function message()
{
  $message=Contact::all();
  
  return view('adminPanel.pages.message',compact('message'));

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
  return view('adminPanel.pages.newadminregister');

}
protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }
    protected function create(Request $request)
    {
      $this->validator($request->all())->validate();

      User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
        return redirect('newadminregister')->with('messag','successfull save info');
    }




public function admininfo()
{
 $admin=User::all();


  return view('adminPanel.pages.admininfo',compact('admin'));

}


public function adminDelete($admin_id){

  User:: find($admin_id)->delete();


      return back()->with('message','Successfully Delete Admin Information ');

}

public function adminUpdated($admin_id){
 $user= User:: find($admin_id);
  // $user->status=0;
  // $user->save();

  return view('adminPanel.pages.singleadmin',compact('user'));
}

public function adminUpdatedinfo(Request $request){
  // $this->validator($request->all())->validate();
  // $user= User:: find($request->id);
  // $user->name=$request->name;
  // $user->name=$request->email;
  // $user->name=Hash::make($request->password);
  // $user->save();
  User::find($request->admin_id)->update([
    'name' => $request->name,
    'email' => $request->email,
    'password' => Hash::make($request->password),
]);
return redirect('admininfo');
}

//-----end newadminregister


//------start newpowerregister
public function newpowerregister()
{
  return view('adminPanel.pages.newpowerregister');

}
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
 
protected function createpower(Request $request)
{
    $this->validatorpower($request->all())->validate();
    Poweradmin::create([
        'name' => $request->name,
        'email' => $request->email,
        'password_show'=>$request->password,
        'password' => Hash::make($request->password),
    ]);
    return redirect('newpowerregister')->with('messag','successfull save info');
}
 

public function powerregisterinfo()
{


$power=Poweradmin::all();

  return view('adminPanel.pages.powerregisterinfo',compact('power'));

}



public function poweradminDelete($power_id){

  Poweradmin:: find($power_id)->delete();


      return back()->with('message','Successfully Delete Admin Information ');

}

public function poweradminUpdated($power_id){
 $user= Poweradmin:: find($power_id);
  // $user->status=0;
  // $user->save();

  return view('adminPanel.pages.singlepoweradmin',compact('user'));
}

public function poweradminUpdatedinfo(Request $request){
//   $request->validate([
       
//     'email' => ['string', 'email', 'max:255', 'unique:poweradmins'],
   
// ]);

 
  Poweradmin::find($request->power_id)->update([
    'name' => $request->name,
    'email' => $request->email,
    'password_show' => $request->password,
    'password' => Hash::make($request->password),
]);
return redirect('powerregisterinfo');
}


//-----end cnewpowerregister


//-----------------------PDF-------------------------



public function singlePdf($payment_id)
    {
       // This  $data array will be passed to our PDF blade
        $payment_info=Payment::find($payment_id);

      $p=$payment_info->user_client->customer_name .".pdf";

        
        $pdf = PDF::loadView('adminPanel.pages.pdf_view',compact('payment_info'));  
        return $pdf->download($p);
    }

//-----------------------PDF------------------------=

  

}
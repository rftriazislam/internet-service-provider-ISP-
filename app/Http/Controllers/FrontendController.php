<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Carbon\Carbon;
use App\Pakage;
use App\UserClient;

class FrontendController extends Controller
{

public function index(){

  $pakage=Pakage::all()->where('status',1);
  

    return view('frontPanel.home',compact('pakage'));
}



public function customerlogin(){

 return view('frontPanel.pages.customerlogin');
}

public function forgottenPassword(){

  // return view('frontPanel.pages.customerlogin');
 }

public function about(){
  return view('frontPanel.pages.about');
}
public function contact_us(){
  return view('frontPanel.pages.contact_us');
}


public function service(){
  return view('frontPanel.pages.our_service');
}

public function cctv(){
  return view('frontPanel.pages.cctv');
}
public function pbx(){
  return view('frontPanel.pages.pbx');
}

public function tatc(){
  return view('frontPanel.pages.tatc');
}

public function tonic(){
  return view('frontPanel.pages.tonic');
}

public function alarm(){
  return view('frontPanel.pages.alarm');
}
public function networking(){
  return view('frontPanel.pages.networking');
}


public function internet(){
  $pakage=Pakage::all()->where('status',1);
  return view('frontPanel.pages.internet',compact('pakage'));
}


public function applicationform(){
  return view('frontPanel.pages.applicationform');
}
public function payment(){
  return view('frontPanel.pages.payment');
}










public function customerregister(){

    return view('frontPanel.pages.customerregister');
}

public function save_contact(Request $request)
{
  Contact::insert([
    'user_name' => $request->user_name,
    'phone' => $request->phone,
    'email' => $request->email,
    'subject' => $request->subject,
    'message' => $request->message,
    'created_at' => Carbon::now()
  ])  ; 
return back();

}





}

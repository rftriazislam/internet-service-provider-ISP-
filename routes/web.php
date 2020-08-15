<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();



//LoginController
Route::get('/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin_login');

 
//RegisterController
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('admin_register');
Route::get('/forgotten-password', 'FrontendController@forgottenPassword')->name('forgottenPassword');
 
//---------------------------------start Client----------------------------------------------------------------
Route::get('/client/login', 'Auth\LoginController@showClientLoginForm')->name('client_login');
Route::post('/client/login', 'Auth\LoginController@clientLogin')->name('client_login');
Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm')->name('client_register');
Route::post('/register_client', 'Auth\RegisterController@createClient')->name('client_register');

Route::get('/client', 'ClientController@clientDashboard')->name('client_dashboard');
Route::get('/client/payment', 'ClientController@payment_issue')->name('payment_issue');
Route::get('/client/user/profile', 'ClientController@user_profile')->name('user_profile');

//---------------------------------end client-------------------------------------------------------------



//AdminController
Route::get('/poweradmin', 'PoweradminController@adminDashboard')->name('admin_dashboard');
 

//********************************POST********************************
//LoginController 
Route::post('/poweradmin', 'Auth\LoginController@adminLogin')->name('admin_login');
 
//RegisterController
Route::post('/admin_register', 'Auth\RegisterController@createAdmin')->name('admin_register');
//---start pakage---


//-----------------------start--poweradmin----------------------------------------------
Route::get('/poweradmin', 'PoweradminController@adminDashboard')->name('admin_dashboard');


//----------------------------start pakage----------------------------------------------------
Route::get('/allpakagepower', 'PoweradminController@allpakage')->name('allpakagepower');


Route::get('/newpakagepower', 'PoweradminController@newpakage')->name('newpakagepower');

Route::post('/savepakagepower', 'PoweradminController@savepakage')->name('savepakagepower');

Route::get('/pakageDeletepower/{id}', 'PoweradminController@pakageDelete')->name('pakageDeletepower');

Route::get('/pakagePublishpower/{id}', 'PoweradminController@pakagePublishpower')->name('pakagePublishpower');
Route::get('/pakageUnpublishpower/{id}', 'PoweradminController@pakageUnpublishpower')->name('pakageUnpublishpower');

Route::get('/pakageEditpower/{id}', 'PoweradminController@pakageEdit')->name('pakageEditpower');

Route::post('/pakageUpdatepower', 'PoweradminController@pakageUpdatepower')->name('pakageUpdatepower');

//----end pakage----

//----start user----


Route::get('/alluser-info-power', 'PoweradminController@alluser_info_power')->name('alluser_info_power');

Route::get('/userinfoPublishpower/{id}', 'PoweradminController@userinfoPublishpower')->name('userinfoPublishpower');
Route::get('/userinfoUnpublishpower/{id}', 'PoweradminController@userinfoUnpublishpower')->name('userinfoUnpublishpower');

Route::get('/newuserpower', 'PoweradminController@newuser')->name('newuserpower');

Route::post('/saveuserpower', 'PoweradminController@saveUser')->name('saveUserpower');


Route::get('/alluserpower', 'PoweradminController@alluser')->name('alluserpower');

Route::get('/userDeletepower/{id}', 'PoweradminController@userDelete')->name('userDeletepower');

Route::get('/userPublishpower/{id}', 'PoweradminController@userPublishpower')->name('userPublishpower');
Route::get('/userUnpublishpower/{id}', 'PoweradminController@userUnpublishpower')->name('userUnpublishpower');

Route::get('/userprofilepower/{id}', 'PoweradminController@userprofilepower')->name('userprofilepower');

Route::get('/userEditpower/{id}', 'PoweradminController@userEdit')->name('userEditpower');
Route::post('/userUpdatepower', 'PoweradminController@userUpdatepower')->name('userUpdatepower');
//----end user----

//----start payment----
Route::get('/newpaymentpower', 'PoweradminController@newpayment')->name('newpaymentpower');

Route::post('/savePaymentpower', 'PoweradminController@savePayment')->name('savePaymentpower');

Route::get('/allpaymentpower', 'PoweradminController@allpayment')->name('allpaymentpower');
Route::get('/paymentDeletepower/{id}', 'PoweradminController@paymentDelete')->name('paymentDeletepower');

Route::get('/paymentPublishpower/{id}', 'PoweradminController@paymentPublishpower')->name('paymentPublishpower');
Route::get('/paymentUnpublishpower/{id}', 'PoweradminController@paymentUnpublishpower')->name('paymentUnpublishpower');

Route::get('/paymentEditpower/{id}', 'PoweradminController@paymentEdit')->name('paymentEditpower');
Route::post('/paymentUpdatepower', 'PoweradminController@paymentUpdate')->name('paymentUpdatepower');

//----end payment----
//----start massage----

Route::get('/messagepower', 'PoweradminController@message')->name('messagepower');  
Route::get('/messageDeletepower/{id}', 'PoweradminController@messageDelete')->name('messageDeletepower');  

//----end massage----
Route::get('/client/register', 'PoweradminController@userregister')->name('userregister');

Route::post('/clientregister', 'PoweradminController@createClient')->name('client_reg');
//--------------------------------end-poweradmin------------------------------------------------------

















//----------------------start Frontend----------------------
Route::get('/', 'FrontendController@index')->name('home');
// Route::get('/home', 'FrontendController@index')->name('home');


// Route::get('/customerlogin', 'FrontendController@customerlogin')->name('customerlogin');

Route::post('/contact', 'FrontendController@save_contact')->name('contact');

Route::get('/service', 'FrontendController@service')->name('service');

Route::get('/cctv', 'FrontendController@cctv')->name('cctv');
Route::get('/pbx', 'FrontendController@pbx')->name('pbx');
Route::get('/tatc', 'FrontendController@tatc')->name('tatc');
Route::get('/tonic', 'FrontendController@tonic')->name('tonic');
Route::get('/alarm', 'FrontendController@alarm')->name('alarm');
Route::get('/networking', 'FrontendController@networking')->name('networking');
Route::get('/applicationform', 'FrontendController@applicationform')->name('applicationform');

Route::get('/internet', 'FrontendController@internet')->name('internet');

Route::get('/payment', 'FrontendController@payment')->name('payment');






Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/contact', 'FrontendController@contact_us')->name('contact_us');

Route::get('/customerregister', 'FrontendController@customerregister')->name('customerregister');


Route::get('/forgottpassword', 'FrontendController@login')->name('forgottpassword');


//-------------------end Frontend -----------------------------






//--------------------start Admin-------------------------------------------------------------------
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/datatable', 'AdminController@datatable')->name('datatable');

//---start pakage---
Route::get('/newpakage', 'AdminController@newpakage')->name('newpakage');

Route::post('/savepakage', 'AdminController@savepakage')->name('savepakage');




Route::get('/allpakage', 'AdminController@allpakage')->name('allpakage');
Route::get('/pakageDelete/{id}', 'AdminController@pakageDelete')->name('pakageDelete');


Route::get('/pakagePublish/{id}', 'AdminController@pakagePublish')->name('pakagePublish');
Route::get('/pakageUnpublish/{id}', 'AdminController@pakageUnpublish')->name('pakageUnpublish');

Route::get('/pakageEdit/{id}', 'AdminController@pakageEdit')->name('pakageEdit');
Route::post('/pakageUpdate', 'AdminController@pakageUpdate')->name('pakageUpdate');

//----end pakage----

//----start user----
Route::get('/alluser_info', 'AdminController@alluser_info')->name('alluser_info');
Route::get('/userinfoPublish/{id}', 'AdminController@userinfoPublish')->name('userinfoPublish');
Route::get('/userinfoUnpublish/{id}', 'AdminController@userinfoUnpublish')->name('userinfoUnpublish');

Route::get('/newuser', 'AdminController@newuser')->name('newuser');

Route::post('/saveuser', 'AdminController@saveUser')->name('saveUser');


Route::get('/alluser', 'AdminController@alluser')->name('alluser');

Route::get('/userDelete/{id}', 'AdminController@userDelete')->name('userDelete');



Route::get('/userPublish/{id}', 'AdminController@userPublish')->name('userPublish');
Route::get('/userUnpublish/{id}', 'AdminController@userUnpublish')->name('userUnpublish');


Route::get('/userEdit/{id}', 'AdminController@userEdit')->name('userEdit');
Route::post('/userUpdate', 'AdminController@userUpdate')->name('userUpdate');
Route::get('/userprofile/{id}', 'AdminController@userprofile')->name('userprofile');
Route::get('/active-user', 'AdminController@activeuser')->name('activeuser');
Route::get('/inactive-user', 'AdminController@inactiveuser')->name('inactiveuser');


//----end user----

//----start payment----
Route::get('/newpayment', 'AdminController@newpayment')->name('newpayment');

Route::post('/savePayment', 'AdminController@savePayment')->name('savePayment');

Route::get('/allpayment', 'AdminController@allpayment')->name('allpayment');
Route::get('/paymentDelete/{id}', 'AdminController@paymentDelete')->name('paymentDelete');
Route::get('/paymentEdit/{id}', 'AdminController@paymentEdit')->name('paymentEdit');
Route::post('/paymentUpdate', 'AdminController@paymentUpdate')->name('paymentUpdate');

Route::get('/paymentPublish/{id}', 'AdminController@paymentPublish')->name('paymentPublish');
Route::get('/paymentUnpublish/{id}', 'AdminController@paymentUnpublish')->name('paymentUnpublish');
Route::get('/billingreceipt', 'AdminController@billingreceipt')->name('billingreceipt');

Route::post('/billing-user-receipt', 'AdminController@userReceipt')->name('userReceipt');
Route::post('autocomplete', 'AdminController@autocomplete')->name('autocomplete');
Route::get('/userdate', 'AdminController@userdate')->name('userdate');

//----end payment----

//----start customerlogininfo----
Route::get('/customerlogininfo', 'AdminController@customerlogininfo')->name('customerlogininfo');
//----end customerlogininfo----

//----start massage----

Route::get('/message', 'AdminController@message')->name('message');  
Route::get('/messageDelete/{id}', 'AdminController@messageDelete')->name('messageDelete');  

//----end massage----

//----start newadminregister----
Route::get('/newadminregister', 'AdminController@newadminregister')->name('newadminregister');

Route::post('/admin/register', 'AdminController@create')->name('admin_reg');

Route::get('/admininfo', 'AdminController@admininfo')->name('admininfo');

Route::get('/adminUpdated/{id}', 'AdminController@adminUpdated')->name('adminUpdated');

Route::get('/adminDelete/{id}', 'AdminController@adminDelete')->name('adminDelete');

Route::post('/adminUpdatedinfo', 'AdminController@adminUpdatedinfo')->name('adminUpdatedinfo');


//----end newadminregister----

//----start newpowerregister----
Route::get('/newpowerregister', 'AdminController@newpowerregister')->name('newpowerregister');



Route::post('/power-register', 'AdminController@createpower')->name('power_register');

Route::get('/powerregisterinfo', 'AdminController@powerregisterinfo')->name('powerregisterinfo');

Route::get('/poweradminUpdated/{id}', 'AdminController@poweradminUpdated')->name('poweradminUpdated');
Route::get('/poweradminDelete/{id}', 'AdminController@poweradminDelete')->name('poweradminDelete');
Route::post('/poweradminUpdatedinfo', 'AdminController@poweradminUpdatedinfo')->name('poweradminUpdatedinfo');

//----end newpowerregister----

//------------------------------PDF------------------------------

Route::get('/singlepdf/{id}', 'AdminController@singlePdf')->name('singlepdf');



//------------------------------PDF--------------------------

// //--------------------end Admin--------------------------------------------------------------------









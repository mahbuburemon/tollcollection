<?php

use Illuminate\Support\Facades\Route;

//logout
Route::get('/logout','adminloginController@logout');
//user logout
Route::get('/user_logout','adminloginController@userlogout');

Route::get('/', function () {
    return view('stu_login');
});

Route::get('/adminlogin', function () {
    return view('admin.admin_deshboard');
});

//admin login
Route::post('/adminlogin','adminloginController@admin_deshboard');
//user login
Route::get('/user_deshboard','adminloginController@user_deshboard');
Route::post('/userlogin','adminloginController@user_login_deshboard');


Route::get('/admin_deshboard','adminloginController@admin_deshboard');
Route::get('/setting','adminloginController@setting');
Route::get('/user_setting','adminloginController@usersetting');
//user setting
Route::get('/user_profile','adduserController@userprofile');


//view admin page
Route::get('/view','adminloginController@view');

//adduser 
 Route::get('/adduser','adduserController@adduser');
 Route::post('/save_user','adduserController@saveuser');


 
 //delete
 Route::get('/user_delete/{user_id}','alluserController@userdelete');
 //view
 //Route::get('/userview','alluserController@viewuser');
 Route::get('/user_view/{user_id}','alluserController@userview');
 


 //view acctount section
 Route::get('/account_section','user_amountController@accountsection');
 //account form
 Route::get('/account','alluserController@account');
 Route::post('/save_amount','user_amountController@saveamount');
 Route::post('/get/current_amount','user_amountController@current_amount');
 

 //refill

 Route::get('/refill_account','alluserController@refillaccount');
 Route::post('/save_refill','adduserController@save_refill');
 





 //edit
 Route::get('/user_edit/{user_id}','alluserController@useredit');
 Route::post('/update_user/{user_id}','alluserController@userupdate');
 //user own update
 Route::post('/user_own_update','alluserController@userownupdate');
 //sign up
 Route::get('/sign_up','signupController@signup');
  Route::post('/sign_up','signupController@sign_up');


  //user amount
   Route::get('/user_details_amount','user_amountController@useramount');





 Route::get('/alluser','alluserController@alluser');
 Route::get('/type','typeController@type');
 Route::get('/bridgesp','bridgespController@bridgesp');
 Route::get('/bridge1','bridge1Controller@bridge1');
 Route::get('/bridge2','bridge2Controller@bridge2');
 Route::get('/bridge3','bridge3Controller@bridge3');
 Route::get('/reports','reportsController@reports');

 


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class adminloginController extends Controller
{
   public function admin_deshboard(){

      return view ('admin.login');
   }

   public function user_deshboard(){

      return view ('user.deshboard');
   }
   
   //view& setting

    public function view(){

      return view ('admin.view');
   }

   public function setting(){

      return view ('admin.setting');
   }



//logout 
   public function logout(){

       session::put('admin_email', null);
       session::put('admin_id', null);

       return Redirect::to('/adminlogin');



   }


   public function login (Request $request)
   {
   	 
   	 $email =$request->admin_email;
   	 $password =md5($request->admin_password);
   	 $result =DB::table('admin_tbl')
   	 ->where('admin_email',$email)
   	 ->where('admin_password',$password)
   	 ->first();

   	 //echo "</pre>";
   	 //print_r('$result');
   	 if ($result) {

         session::put('admin_email', $result->admin_email);
         session::put('admin_id', $result->admin_id);

   	 	return Redirect::to('/admin_deshboard');
   	 	//echo "string";
   	 }
   	 else{
         session::put('exception','Email or Password Invalid');
   	 	return Redirect::to('/adminlogin');
   	 }



   	//return view('admin.login');
   }

   //user login
   public function user_login_deshboard (Request $request)
   {
       
       $email =$request->user_email;
       $password =md5($request->user_password);
       $result =DB::table('user_tbl')
       ->where('user_email',$email)
       ->where('user_password',$password)
       ->first();

       //echo "</pre>";
       //print_r('$result');
       if ($result) {

         session::put('user_email', $result->user_email);
         session::put('user_id', $result->user_id);

         return Redirect::to('/user_deshboard');
         //echo "string";
       }
       else{
         session::put('exception','Email or Password Invalid');
         return Redirect::to('/');
       }



      //return view('admin.login');
   }
   public function userlogout(){

       session::put('user_email', null);
       session::put('user_id', null);

       return Redirect::to('/');



   }
   //user setting
   public function usersetting(){

        $user_id=Session::get('user_id');


        $user_description_view= DB::table('user_tbl')
                              ->select('*')
                              ->where('user_id',$user_id)
                              ->first();


       $manage_user_view=view('user.user_setting')
                    ->with('user_description_profile',$user_description_view);

        return view('user_layout')
                    ->with('user_setting',$manage_user_view);



      //return view ('user.user_setting');
   }
}

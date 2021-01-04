<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Session;
session_start();

class signupController extends Controller
{
     public function signup(){

      return view ('user.sign_up');
   }
   

     public function sign_up(Request $request){
     	$data=array();
    	
    	$data['vehicle_no']=$request->vehicle_no;
    	$data['user_name']=$request->user_name;
    	$data['user_nid']=$request->user_nid;
    	$data['user_email']=$request->user_email;
        $data['user_password']=md5($request->user_password);
    	$data['user_number']=$request->user_number;
    	$data['user_address']=$request->user_address;
    	$data['user_amount']=$request->user_amount;
        $data['Bridges']=$request->user_amount;
    	$image=$request->file('user_image');
    	
    	if ($image) {
    		$image_name=str::random(20);
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='image/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);
    		if ($success) {
    			$data['user_image']=$image_url;

    			DB::table('user_tbl')->insert($data);
    			session::put('exception','user added successfully');
    			return Redirect::to('/sign_up');
    		}
    	}
    	$data['image']=$image_url;

    	        DB::table('user_tbl')->insert($data);
    			session::put('exception','user added successfully');
    			return Redirect::to('/sign_up');


                DB::table('user_tbl')->insert($data);
    			session::put('exception','user added successfully');
    			return Redirect::to('/sign_up');

      //return Redirect::to('/stu_login');
   }
}

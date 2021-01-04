<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class alluserController extends Controller
{
    public function alluser()

    {
    	$alluser_info=DB::table('user_tbl')
    	             ->get();

    	$manage_user=view('admin.alluser')
    	            ->with('all_user_info',$alluser_info);

    	return view('layout')
    	            ->with('alluser',$manage_user);
    	
    	//return view('admin.alluser');
    }
    public function userdelete($user_id)

    {
        DB::table('user_tbl')
        ->where('user_id',$user_id)
        ->delete();

        return Redirect::to('/alluser');

        //return view('admin.alluser');
    }
    public function userview($user_id)
    {
        $user_description_view= DB::table('user_tbl')
                              ->select('*')
                              ->where('user_id',$user_id)
                              ->first();


       $manage_user_view=view('admin.userview')
                    ->with('user_description_profile',$user_description_view);

        return view('layout')
                    ->with('userview',$manage_user_view);
        
        //return view('admin.userview');
    }
    public function useredit($user_id)
    {
        $user_description_view= DB::table('user_tbl')
                              ->select('*')
                              ->where('user_id',$user_id)
                              ->first();


       $manage_user_view=view('admin.edit')
                    ->with('user_description_profile',$user_description_view);

        return view('layout')
                    ->with('edit',$manage_user_view);
        
        //return view('admin.userview');
    }
    //update
    public function userupdate(Request $request,$user_id)
    {
        $data=array();
        
        $data['vehicle_no']=$request->vehicle_no;
        $data['user_name']=$request->user_name;
        $data['user_nid']=$request->user_nid;
        $data['user_email']=$request->user_email;
        $data['user_number']=$request->user_number;
        $data['user_address']=$request->user_address;
        $data['user_amount']=$request->user_amount;
        $data['Bridges']=$request->user_amount;


        DB::table('user_tbl')
               ->where('user_id',$user_id)
               ->update($data);
                session::put('exception','user update successfully');
                return Redirect::to('/alluser');
        
        //return view('admin.userview');
    }
     public function userownupdate(Request $request)
    {
        $data=array();
        $user_id=Session::get('user_id');
        $data['vehicle_no']=$request->vehicle_no;
        $data['user_name']=$request->user_name;
       
        $data['user_email']=$request->user_email;
        $data['user_password']=$request->user_address;
        $data['user_number']=$request->user_number;
        $data['user_address']=$request->user_address;
       


        DB::table('user_tbl')
               ->where('user_id',$user_id)
               ->update($data);
                session::put('exception','user update successfully');
                return Redirect::to('/user_setting');
        
        //return view('admin.userview');
    }
    
    
    public function account()
    {
        
        
        return view('admin.account');
    }
    public function refillaccount()
    {
        
        
        return view('admin.refill_account');
    }

}

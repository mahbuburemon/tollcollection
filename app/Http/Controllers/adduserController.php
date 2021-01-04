<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use APP\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Session;
session_start();

class adduserController extends Controller
{
    public function adduser()
    {
    	return view('admin.adduser');
    }

    public function saveuser(Request $request){
    $data=array();
    	
    	$data['vehicle_no']=$request->vehicle_no;
    	$data['user_name']=$request->user_name;
    	$data['user_nid']=$request->user_nid;
    	$data['user_email']=$request->user_email;
        $data['user_password']=md5($request->user_password);
    	$data['user_number']=$request->user_number;
    	$data['user_address']=$request->user_address;
    	
        $data['Bridges']=$request->Bridges;
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
    			return Redirect::to('/adduser');
    		}
    	}
    	$data['image']=$image_url;

    	        DB::table('user_tbl')->insert($data);
    			session::put('exception','user added successfully');
    			return Redirect::to('/adduser');


                DB::table('user_tbl')->insert($data);
    			session::put('exception','user added successfully');
    			return Redirect::to('/adduser');
    }


    //user setting
    public function userprofile()
    {
        $user_id=Session::get('user_id');


        $user_profile= DB::table('user_tbl')
                              ->select('*')
                              ->where('user_id',$user_id)
                              ->first();


       $manage_user=view('user.user_profile')
                    ->with('user_profile',$user_profile);

        return view('user_layout')
                    ->with('user_profile',$manage_user);
    }

    public function save_refill(Request $request)
    {
        
        $data=array();

         $x = DB::table('refills')->where('user_id',$request->user_id)->get();
        $y = '';
        foreach ($x as $value) {
            $y .= $value->refill_amount;
        }

        
        if (DB::table('refills')->where('user_id',$request->user_id)->exists()) {

            DB::table('refills')->where('user_id',$request->user_id)->update([
                'refill_amount' =>$request->refill_amount + $y,
            ]);
                           
            session::put('exception','Refill  added successfully');
            return back();
        }
        else{
        
        $data['user_id']=$request->user_id;
        $data['date']=$request->date;
        $data['refill_amount']=$request->refill_amount;

        DB::table('refills')->insert($data);
                           
        session::put('exception','Refill  added successfully');
        return back();
        }
        

         


    }

    
    
}
    
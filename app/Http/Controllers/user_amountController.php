<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\AccountSection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Session;
session_start();

class user_amountController extends Controller
{     


     //data show user_details_amount
     public function useramount()
     {

     $user_id=Session::get('user_id');


        $amount_profile= DB::table('account_sec')
                              ->select('*')
                              ->where('user_id',$user_id)
                              ->first();


                              
        $amount_profile = AccountSection::where('user_id',$user_id)->get();

                   return view ('user.user_details_amount')->with('amount_profile');
        

       $manage_amount=view('user.user_details_amount')
                    ->with('amount_info',$amount_profile);

        return view('user_layout')
                    ->with('user_details_amount',$manage_amount);
      return view ('user.user_details_amount');
   }


   //post amount data
   public function saveamount(Request $request) 
   {
    $data=array();
    	
    	$data['user_id']=$request->user_id;
      $data['date']=$request->date;
    	$data['current_amount']=$request->current_amount;
    	$data['toll_amount']=$request->toll_amount;
    	$data['due_amount']=$request->due_amount;

      $data['total_amount']=$data['current_amount']-$data['toll_amount']-($data['due_amount']+
      $data['due_amount']*0.2);
    

    	        DB::table('account_sec')->insert($data);
    			session::put('exception','amount added successfully');
    			return Redirect::to('/account_section');





               
    }
    //show data for account section
    public function accountsection()

    {
        $accountsection_info = AccountSection::latest()->with('relationWithUser')->get();
      

      $manage_account=view('admin.account_section')
                  ->with('account_user_info',$accountsection_info);

      return view('layout')
                  ->with('account_section',$manage_account);

        // foreach ($accountsection_info as $value) {
        // return $value->relationWithUser->user_name;
        // }

        
        
    }
        //return view('admin.account_section');

    public function current_amount(Request $request)
    {
      $x = DB::table('refills')->where('user_id',$request->user_id)->get();
        $sendData = '';
        foreach ($x as $xs) {
            $sendData .= '<input type="text" value="' . $xs->refill_amount . '" class="form-control p-input" name="current_amount" placeholder="Current Amount" readonly>';
             //$sendData .= $xs->refill_amount;
            

        }
        return $sendData;

    }

}

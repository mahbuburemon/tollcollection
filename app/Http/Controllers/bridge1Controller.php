<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class bridge1Controller extends Controller
{
    public function bridge1()
    {
    	$bridge1user_info=DB::table('user_tbl')
    	             ->where(['Bridges'=>1])
    	             ->get();

    	$manage_user=view('admin.bridge1')
    	            ->with('bridge1_user_info',$bridge1user_info);

    	return view('layout')
    	            ->with('bridge1',$manage_user);

    	return view('admin.bridge1');
    }
}

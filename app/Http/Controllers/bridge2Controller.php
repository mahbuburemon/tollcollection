<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class bridge2Controller extends Controller
{
    public function bridge2()

    {
    	$bridge2user_info=DB::table('user_tbl')
    	             ->where(['Bridges'=>2])
    	             ->get();

    	$manage_user=view('admin.bridge2')
    	            ->with('bridge2_user_info',$bridge2user_info);

    	return view('layout')
    	            ->with('bridge2',$manage_user);



    	return view('admin.bridge2');
    }
}

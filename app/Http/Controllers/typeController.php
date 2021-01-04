<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class typeController extends Controller
{
    public function type()
    {
    	return view('admin.type');
    }
}

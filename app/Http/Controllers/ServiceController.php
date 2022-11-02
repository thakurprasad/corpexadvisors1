<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    public function service(){
    	$url = \Request::path();
    	$menu = str_replace("-", "_", $url);
    	return view('services', ['service'=> $menu ]);
    }

}

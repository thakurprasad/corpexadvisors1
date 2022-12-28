<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class TestContoller extends Controller
{
    
    public function msg(){
        //return "line no .". __LINE__;
        return redirect()->back()->withErrors(['msg'=> 'success']);
    }


}
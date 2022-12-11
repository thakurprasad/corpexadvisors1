<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandController extends Controller
{
    
    public function show($_token)
    {
        if($_token == 10021992){
            $command = 'schedule';
            $param = 'run';
            $artisan = \Artisan::call($command.":".$param);
            $output = \Artisan::output();
        }else{
            return "Invalid token";
        }
        
        return $output;
    }

}

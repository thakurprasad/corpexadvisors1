<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Helper;
use App\Models\Agent;
use App\Models\AgentDocument;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


 
class AdminController extends Controller
{
    
    function __construct()
    {
        //
    }

    public function dashboard(){
        return "...";
        return view('admin.dashbaord');
    }

}
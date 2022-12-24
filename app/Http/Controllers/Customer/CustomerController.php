<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Helper;
use App\Models\Agent;
use App\Models\AgentDocument;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


 
class CustomerController extends Controller
{
    
    function __construct()
    {
        //
    }

    public function dashboard(){
        return view('customer.dashbaord');
    }

}
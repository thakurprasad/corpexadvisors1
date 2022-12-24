<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Helper;
use App\Models\Agent;
use App\Models\AgentDocument;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


 
class AffiliateController extends Controller
{
    
    function __construct()
    {
        //
    }

    public function dashboard(){
        return view('affiliate.index');
    }

}
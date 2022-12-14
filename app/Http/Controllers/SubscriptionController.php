<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Subscription;

class SubscriptionController extends Controller
{
  

    public function store(Request $req){
        try{


            $validator = Validator::make(
                $req->all(),
                  [
                    'email'   => 'required|email',
                  ]
            );

            if ($validator->fails())
            {   
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }


            $row = Subscription::create($req->input());
            if($row){
                return redirect()->back()->with('success','Subscription Successfully');
            }

        }catch(Exception $ex){
            return redirect()->back()->withErrors(['error'=> $ex->getMessage()]);
        }
    }

} # end of class ContactController

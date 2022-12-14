<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Contact;


class ContactController extends Controller
{
    
    public function index(){
        return view('contact-us');
    }

    public function store(Request $req){
        try{


            $validator = Validator::make(
                $req->all(),
                  [
                    'name'   => 'required',
                    'mobile'   => 'required',
                    'email'   => 'required|email',
                  ]
            );

            if ($validator->fails())
            {   
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }


            $row = Contact::create($req->input());
            if($row){
                return redirect()->back()->with('success','Data Submited successfully');
            }

        }catch(Exception $ex){
            return redirect()->back()->withErrors(['error'=> $ex->getMessage()]);
        }
    }

} # end of class ContactController

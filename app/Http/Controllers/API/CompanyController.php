<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Company;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Models\ApiUrl;

use Validator;

class CompanyController extends BaseController
{


    public function getCompanies(Request $request)
    {
         $validator = Validator::make($request->input(), [
            'company_name'  => 'required|min:4'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        #\DB::enableQueryLog(); // Enable query log
        $companies = Company::select('*');

        if($request->has('company_name')){
           $companies =  $companies->where( 'company_name', 'LIKE', '%' . $request->company_name . '%' );
        }

         $companies =  $companies->orderBy('company_name', 'ASC')->take(20)->get();
    //  dd(\DB::getQueryLog()); 
       return $this->sendSuccess($companies, 'Companies data fetched successfully..');
        
    }

   
    public function show(Request $req)
    {

         $company = Company::select( 
                    'corporate_identification_number',
                    'company_name',
                    'company_status',
                    'company_class',
                    'company_category',
                    'company_sub_category',
                    'date_of_registration',
                    'registered_state',
                    'authorized_cap',
                    'paidup_capital',
                    'industrial_class',
                    'principal_business_activity_as_per_cin',
                    'registered_office_address',
                    'registrar_of_companies',
                    'email_addr',
                    'latest_year_ar',
                    'latest_year_bs'
                )->orWhere('corporate_identification_number', $req->s)->orWhere('company_name', $req->s)->first();

         //$companies = Company::select('company_name')->offset(0)->limit(500)->get();
         $companies = Company::select('company_name')->get();

        return view('companies/show',["data"=>$company, 'companies'=>$companies]);
    }

  
}

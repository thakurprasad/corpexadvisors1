<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::offset(0)->limit(5)->get();
        return view('companies/list',["data"=>$companies]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
         $headers = [
                    "Content-Type: application/json"
                ];
        
        $endpoint = 'https://api.data.gov.in/resource/bffbc5a2-0c7b-4c7a-be82-6da25438dd07';
        $params['api-key'] = '579b464db66ec23bdd000001ad01e5846f6b4a6942b0a88416f5438f';
        $params['format'] = 'json';
        $params['offset'] = 0;
        #$params['offset'] = 3031;
        $params['limit'] = 30;
        
      //  $params['filters']['corporate_identification_number'] = 'U72900DL2018PTC327857';
        for($i = 0 ; $i <= 300 ; $i++){
            $params['offset'] = (($i * 30) + 1) ;
        
            $client = new Client();
            $response = $client->request('GET', $endpoint, ['query' => $params ]);
            $statusCode = $response->getStatusCode();
           // return $content = $response->getBody(); // in json 


        $data = json_decode($response->getBody(), true); # ARRAY

        //return $field = $data->field;
         $companies_data_arr = $data['records'];
        Company::insert($companies_data_arr);
        sleep(1);
    }

        }catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

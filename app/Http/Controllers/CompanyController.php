<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Models\ApiUrl;


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
     * 
    0
    900
    1800
    2700
    3600
     */
# https://api.data.gov.in/resource/bffbc5a2-0c7b-4c7a-be82-6da25438dd07?api-key=579b464db66ec23bdd000001ad01e5846f6b4a6942b0a88416f5438f&format=json&offset=80&limit=30


    public function create($offset, $url)
    {
         "<h1>Offset: " .$offset . "</h1>";
        try{
         $headers = ["Content-Type: application/json"];
        
        $endpoint = 'https://api.data.gov.in/resource/'.$url;
        $params['api-key'] = '579b464db66ec23bdd000001ad01e5846f6b4a6942b0a88416f5438f';
        $params['format'] = 'json';
        $params['offset'] = $offset;
        $params['limit'] = 30;

        $client = new Client();
        $response = $client->request('GET', $endpoint, ['query' => $params ]);
        $statusCode = $response->getStatusCode();
        $data = json_decode($response->getBody(), true); # ARRAY

               
        if(!isset($data['records'])){            
           // nothing 
        }else{
            $companies_data_arr = $data['records'];
            Company::insert($companies_data_arr);  
            $count_inserted = Company::where('registered_state', $data['records'][0]['registered_state'])->count();
            echo " | count Insert: ". $count_inserted . "<br>";
        }
      
        }catch(Exception $ex){
            echo "Error".$ex->getMessage();
        }
        
    }

/**
 * 
 * 100*50 = 5000
 * 
 * */
    public function create_in_loop1($loop){  
        $rows =  ApiUrl::where('status', 'pending')->get();
        foreach($rows as $key => $row){

            for ($i=1; $i <= $loop; $i++) {

                 $offset = Company::where('registered_state', $row->state)->count();
                 if($offset ==0 ){
                    $offset = 0;
                 }else{
                    $offset = ($offset + 1);
                 }

                 $url =  $row->url; #'bffbc5a2-0c7b-4c7a-be82-6da25438dd07';

                 if(!empty($row->total)){
                     $offset = ( ( $row->total >= $offset) ? $offset : $row->total );
                }

                 echo  $this->create($offset, $url); // 50 record insert
                  echo "<br>";
             } // end of for loop

        } # end of foreach



    }

// http://localhost/corpexadvisors2/companies/total_record_update
    public function total_record_update(){

        try{
                $rows = ApiUrl::all();
                foreach ($rows as $key => $row) {
                    $headers = [
                                "Content-Type: application/json"
                            ];
                    $endpoint = 'https://api.data.gov.in/resource/'.$row->url;
                    $params['api-key'] = '579b464db66ec23bdd000001ad01e5846f6b4a6942b0a88416f5438f';
                    $params['format'] = 'json';
                    $params['offset'] = 0; //$offset;
                    $params['limit'] = 1;
                    $client = new Client();
                    $response = $client->request('GET', $endpoint, ['query' => $params ]);
                    $statusCode = $response->getStatusCode();
                    $data = json_decode($response->getBody(), true); # ARRAY
                    $urls =  ApiUrl::where('url', $row->url)->update(['total' => $data['total']]);
                }
            }catch(Exception $ex){
                echo $ex->getMessage();
            }

    }


    public function create_in_loop(){
return         $offset = Company::where('registered_state', 'Chhattisgarh')->count(); // 10
            $row =  ApiUrl::where('status', 'pending')->first();
            $url = $row->url;
            $total = $row->total;
            $state = $row->state;
            $loop = (int)($total/30); #409
            $limit = 30;
            for ($i=1; $i <= $loop ; $i++) {       
                $offset = Company::where('registered_state', $state)->count(); // 10
                $offset1 = ($offset + 1); //($offset > 0 ? ($offset + 1) : $offset );
               // echo ">>". $i .  "<br>";
                $this->create($offset1, $url);    
                //sleep(1);
            }

            $urls =  ApiUrl::where('url', $url)->update(['status' => 'completed']);
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

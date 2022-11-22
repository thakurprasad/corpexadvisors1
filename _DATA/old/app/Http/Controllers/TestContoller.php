<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class TestContoller extends Controller
{

// https://api.data.gov.in/resource/bffbc5a2-0c7b-4c7a-be82-6da25438dd07?api-key=579b464db66ec23bdd000001ad01e5846f6b4a6942b0a88416f5438f&format=json&filters[corporate_identification_number]=U72900DL2018PTC327857

    public function getCompanyData(Request $req){
https://api.data.gov.in/resource/bffbc5a2-0c7b-4c7a-be82-6da25438dd07?api-key=579b464db66ec23bdd000001ad01e5846f6b4a6942b0a88416f5438f&format=json&filters%5Bcorporate_identification_number%5D=U72900DL2018PTC327857


https://api.data.gov.in/resource/bffbc5a2-0c7b-4c7a-be82-6da25438dd07?api-key=579b464db66ec23bdd000001ad01e5846f6b4a6942b0a88416f5438f&format=json&offset=0&limit=20



        $headers = [
                    "Content-Type: application/json"
                ];
        $endpoint = 'https://api.data.gov.in/resource/bffbc5a2-0c7b-4c7a-be82-6da25438dd07';
        $params['api-key'] = '579b464db66ec23bdd000001ad01e5846f6b4a6942b0a88416f5438f';
        $params['format'] = 'json';
        $params['offset'] = 0;
        $params['limit'] = 20;
        
        $params['filters']['corporate_identification_number'] = 'U72900DL2018PTC327857';

            $client = new Client();
            $response = $client->request('GET', $endpoint, ['query' => $params ]);
            $statusCode = $response->getStatusCode();
           // return $content = $response->getBody(); // in json 


       return $responseBody = json_decode($response->getBody(), true); # ARRAY
       

    }
}

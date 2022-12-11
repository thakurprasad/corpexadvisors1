<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;


class BaseController extends Controller
{
  
    public function sendSuccess($result, $message)
    {
    	$response = [
            'success' => true,
            'error' => false,
            'code'    => 200, 
            'status' =>'success',
            'message' => $message,
            'data'    => $result,
            
        ];
        return response()->json($response, 200);
    }



    public function sendError($error, $errorMessages = [], $code = 404)
    {
    	$response = [
            'success' => false,
            'error' => true,
            'status' => $code,
            'status' =>'failed',
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}
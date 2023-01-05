<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;

use App\Models\ServiceCategory;
use Helper;

class CheckoutController extends Controller
{
    private $api_key    = '';
    private $api_secret = '';
    function __construct()
    {
        $this->api_key    = 'rzp_test_cr6LLIXomHMiZg';
        $this->api_secret = 'iBaj2itmkUVKJSzRsr9lTrYk';
    }

    public function index()
    {        
        return view('razorpayView');
    }

    public function store(Request $request)
    {
        $input = $request->all();
  
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));  
               
          } catch (Exception $e) {
                //return  $e->getMessage();                
                return redirect()->back()->with('error', $e->getMessage());
            }
        }          
        return redirect()->back()->with('success', 'Payment successful');

    }

    public function checkout($service_id){
        
        
        $id  = Helper::_decrypt($service_id);        
        $api = new Api($this->api_key, $this->api_secret);   
        
        $row = ServiceCategory::find($id);        
        $price = (int)$row->price;
        
/*
        $res = $api->order->create(
            array(
                'receipt' => rand(100000, 999999), 
                'amount' => $price,
                'currency' => 'INR', 
               #'method'=> 'netbanking',
                'notes'=> array(
                                'user_id' => \Auth::user()->id,
                                'service_name'=> $row->name,
                                'created_at' => date('Y-m-d H:0:s')
                            )
                )
            );
        
        dd($res);*/

        $orderId = 'order_L03alGWxlnYSEh'; 
        $orderId = 'order_L07V0ceZXPn8gp';
        $res = $api->order->fetch($orderId);
        $res = $api->order->fetch($orderId)->payments();
        dd($res);


    }


}

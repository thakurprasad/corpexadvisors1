<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Helper;
use App\Models\User;
use App\Models\Affiliate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
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


    public function add(){
        try{           
            return view('agents.add');
        }catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage() );
        }
    }

    public function store(Request $req){

        try{

            $validator = Validator::make(
                $req->input(),
                    [
                    'first_name'        => 'required',  
                    'last_name'         => 'required',  
                    'email'             => 'required|email',   
                    'mobile1'            => 'required'                  
                ]
            );

            if ($validator->fails())
            {   //return $validator->errors();
                //return redirect()->back()->withErrors($validator->errors())->withInput();
                return redirect()->back()->with('sss', $validator->errors())->withInput();
            }
           DB::beginTransaction();
            if($req->filled('first_name')){
                $agent['first_name'] = $req->input('first_name');    
            }
            if($req->filled('last_name')){
                $agent['last_name'] = $req->input('last_name');    
            }
            if($req->filled('email')){
                $agent['email'] = $req->input('email');    
            }
            if($req->filled('mobile')){
                $agent['mobile'] = $req->input('mobile');    
            }

            if($req->filled('gender')){
                $agent['gender'] = $req->input('gender');    
            }

            if($req->filled('marital_status')){
                $agent['marital_status'] = $req->input('marital_status');
            }
            
            $agent_obj = Agent::create($agent);
            if($agent){
                    $agent_id =  $agent_obj->id;
                    $agent_document['agent_id'] = $agent_id;       

                # save profile iamge data
                if($req->file('agent_profile_image')){
                    $agent_profile_image = base64_encode(file_get_contents($req->file('agent_profile_image')->path()));
                    $agent_document['agent_profile_image'] = "data:image/" . $req->file('agent_profile_image')->extension() . ";base64," . $agent_profile_image;
                }

                # save pan data
                if($req->file('pan_image')){
                    $pan_image = base64_encode(file_get_contents($req->file('pan_image')->path()));
                    $agent_document['pan_image'] = "data:image/" . $req->file('pan_image')->extension() . ";base64," . $pan_image;
                }
                if($req->filled('pan_card_no')){
                    $agent_document['pan_card_no'] = $req->input('pan_card_no');
                }
                if($req->filled('pan_dob')){
                    $pan_dob = Carbon::createFromFormat('d/m/Y', $req->pan_dob)->format('Y-m-d');
                    $agent_document['pan_dob'] = $pan_dob;
                }


                # save aadhar data
                if($req->file('aadhar_front_image')){
                    $aadhar_front_image = base64_encode(file_get_contents($req->file('aadhar_front_image')->path()));
                    $agent_document['aadhar_front_image'] = "data:image/" . $req->file('aadhar_front_image')->extension() . ";base64," . $aadhar_front_image;
                }
                if($req->file('aadhar_back_image')){
                    $aadhar_back_image = base64_encode(file_get_contents($req->file('aadhar_back_image')->path()));
                    $agent_document['aadhar_back_image'] = "data:image/" . $req->file('aadhar_back_image')->extension() . ";base64," . $aadhar_back_image;
                }
                if($req->filled('aadhar_card_no')){
                    $agent_document['aadhar_card_no'] = $req->input('aadhar_card_no');
                }
                if($req->filled('aadhar_address')){
                    $agent_document['aadhar_address'] = $req->input('aadhar_address');
                }
                if($req->filled('aadhar_pin')){
                    $agent_document['aadhar_pin'] = $req->input('aadhar_pin');
                }
                if($req->filled('aadhar_city')){
                    $agent_document['aadhar_city'] = $req->input('aadhar_city');
                }
                if($req->filled('aadhar_state')){
                    $agent_document['aadhar_state'] = $req->input('aadhar_state');
                }

                #save cheque data
                if($req->file('cancelled_cheque_image')){
                    $cancelled_cheque_image = base64_encode(file_get_contents($req->file('cancelled_cheque_image')->path()));
                    $agent_document['cancelled_cheque_image'] = "data:image/" . $req->file('cancelled_cheque_image')->extension() . ";base64," . $cancelled_cheque_image;
                }
                if($req->filled('bank_account_holder_name')){
                    $agent_document['bank_account_holder_name'] = $req->input('bank_account_holder_name');
                }
                if($req->filled('bank_name')){
                    $agent_document['bank_name'] = $req->input('bank_name');
                }
                if($req->filled('bank_account_no')){
                    $agent_document['bank_account_no'] = $req->input('bank_account_no');
                }
                if($req->filled('bank_account_no')){
                    $agent_document['bank_account_no'] = $req->input('bank_account_no');
                }
                if($req->filled('bank_ifsc_code')){
                    $agent_document['bank_ifsc_code'] = $req->input('bank_ifsc_code');
                }

                AgentDocument::create($agent_document);
                
                DB::commit();
               
                return redirect()->back()->with('success', 'Agent & Agent Document Added Successfully.' );

            }else{
                DB::rollBack();
               
                return redirect()->back()->with('error', 'Something went wrong.');
            }
        }catch(\Exception $ex){
            DB::rollBack(); 
            return redirect()->back()->with('error', $ex->getMessage() );
        }
    }

 

    public function index(Request $req)
    {
        
       
       // return DB::select("SELECT * FROM ginteja_agent.tbl_agents");

          try{
               $data = Agent::select(
                        'agents.id',
                        'agents.first_name', 
                        'agents.last_name',
                        'agents.mobile', 
                        'agents.created_at', 
                        'agent_documents.id as agent_documents_id',
                        'agent_documents.agent_photo_status',
                        'agent_documents.pan_status',
                        'agent_documents.aadhar_status',
                        'agent_documents.bank_status',
                        'agent_documents.kyc_status',
                        'agent_documents.arn_status',
                        'agent_documents.euin_status'
                    )
            ->join('agent_documents', 'agent_documents.agent_id', '=', 'agents.id');


            if($req->filled('name')){
                $name_arr =explode(' ',  $req->name);
                if(count($name_arr) >1){
                     $data = $data->where('first_name', 'LIKE' , '%' . $name_arr[0] . '%')
                            ->where('last_name', 'LIKE', '%'.$name_arr[1].'%');
                }else{                 
                    $data = $data->where('first_name', 'LIKE' , '%' .$req->name . '%');   
                }
            }

            if($req->filled('mobile')){
                $data = $data->where('mobile', 'LIKE' , '%' .$req->mobile . '%');
            }
            if($req->filled('kyc_status')){
                $data = $data->where('kyc_status', $req->kyc_status);
            }
            

            if($req->filled('arn_status')){
                $data = $data->where('arn_status', $req->arn_status);
            }
            
            if($req->filled('euin_status')){
                $data = $data->where('euin_status', $req->euin_status);
            } 

            if($req->filled('fixed_deposit_module')){
                $data = $data->where('fixed_deposit_module', $req->fixed_deposit_module);
            }
            if($req->filled('mutual_fund_module')){
                $data = $data->where('mutual_fund_module', $req->mutual_fund_module);
            }
            if($req->filled('loan_module')){
                $data = $data->where('loan_module', $req->loan_module);
            }
            if($req->filled('insurance_module')){
                $data = $data->where('insurance_module', $req->insurance_module);
            } 

            if($req->filled('wealth_buddy_code')){
                $data = $data->where('wealth_buddy_code', $req->wealth_buddy_code);
            } 
             if($req->filled('agent_code')){
                $data = $data->where(function ($query) use($req) {
                        $query->orWhere('mf_agent_code', 'LIKE', '%'.$req->agent_code.'%')
                        ->orWhere('fd_agent_code', 'LIKE', '%'.$req->agent_code.'%')
                        ->orWhere('loan_agent_code', 'LIKE', '%'.$req->agent_code.'%')
                        ->orWhere('insurance_agent_code', 'LIKE', '%'.$req->agent_code.'%');
                    });
            } 
 
            if(!empty($req->input('created_at') ) ){
                $daterange = $req->input('created_at');
                $date_arr = explode("-", $req->input('created_at'));
                //print_r($date_arr); edit();
                $from_date = (new Carbon($date_arr[0]))->format('Y-m-d');
                $to_date = (new Carbon($date_arr[1]))->format('Y-m-d');
               // $data = $data->whereBetween('created_at', [$from_date, $to_date]);    
                $data = $data->whereDate('agents.created_at' , '>=', $from_date );    
                $data = $data->whereDate('agents.created_at' , '<=' , $to_date );    
            }else{
                $daterange = '';
            }

 
            $data = $data->orderBy('created_at', 'DESC')->paginate(10)->appends(request()->query()); 
            
            return view('agents.list', ['agents' => $data, 'get'=> $req->input(), 'daterange'=>$daterange ]);
          }catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage() );
            }
    }


      public function edit_profile($user_id){
        try{
            
            $user_id = Helper::_decrypt($user_id);
            
             $user = User::select(
                        'affiliates.*',
                        'users.name',
                        'users.mobile',
                        'users.email',                        
                        'users.user_type',                        
                            )
                    ->join('affiliates', 'affiliates.user_id', '=', 'users.id')
                    ->where('users.id', $user_id)->first();           
            $user->pan_dob =  (new Carbon($user->pan_dob))->format('d/m/Y');                 
            return view('affiliate.users.edit', ['user'=>$user]);
        }catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage() );
        }
    }

    public function update_profile($user_id, Request $req){
        try{
            $user_id = Helper::_decrypt($user_id);
            $validator = Validator::make(
                $req->all(),
                    [
                    'first_name'        => 'required',  
                    'last_name'         => 'required',   
                    'mobile'            => 'required',  
                    'profile_image'     => 'max:100|min:30' # kilobytes 
                ]
            );


            if ($validator->fails())
            {   
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
            if($req->file('profile_image')){
                $path = Storage::disk('local')->put( config('uploads.profile-path'), $req->profile_image, 'public');
                $affiliate['profile_image'] = Storage::disk('local')->url($path);
                 $affiliate['photo_status'] = 'uploaded';
            }
            if($req->file('aadhar_front_image')){
                $path = Storage::disk('local')->put( config('uploads.aadhar-front-path'), $req->aadhar_front_image, 'public');
                $affiliate['aadhar_front_image'] = Storage::disk('local')->url($path);    
                 $affiliate['aadhar_status'] = 'uploaded';
            }
            if($req->file('aadhar_back_image')){
                $path = Storage::disk('local')->put( config('uploads.aadhar-back-path'), $req->aadhar_back_image, 'public');
                $affiliate['aadhar_back_image'] = Storage::disk('local')->url($path);    
              $affiliate['aadhar_status'] = 'uploaded';   
            }
            if($req->file('pan_image')){
                $path = Storage::disk('local')->put( config('uploads.pan-path'), $req->pan_image, 'public');
                $affiliate['pan_image'] = Storage::disk('local')->url($path);    
                 $affiliate['pan_status'] = 'uploaded';
            }
            if($req->file('cancelled_cheque_image')){
                $path = Storage::disk('local')->put( config('uploads.cancelled-cheque-path'), $req->cancelled_cheque_image, 'public');
                $affiliate['cancelled_cheque_image'] = Storage::disk('local')->url($path);    
                 $affiliate['bank_status'] = 'uploaded';
            }


            if($req->filled('first_name')){
                $affiliate['first_name'] = $req->input('first_name');    
            }
            if($req->filled('last_name')){
                $affiliate['last_name'] = $req->input('last_name');    
            }
            
            $user['name'] = $req->first_name . ' '. $req->last_name;
            $user['mobile'] = $req->mobile;

            if($req->filled('mobile')){
            //    $affiliate['mobile'] = $req->input('mobile');    
            }
            if($req->filled('gender')){
                $affiliate['gender'] = $req->input('gender');    
            }
            if($req->filled('marital_status')){
                $affiliate['marital_status'] = $req->input('marital_status');
            }

            if($req->filled('pan_card_no')){                
                $affiliate['pan_card_no'] = $req->input('pan_card_no');
            }

            if($req->filled('pan_dob')){
                $pan_dob = Carbon::createFromFormat('d/m/Y', $req->pan_dob)->format('Y-m-d');
                $affiliate['pan_dob'] = $pan_dob;
            }


            if($req->filled('aadhar_card_no')){
                $affiliate['aadhar_card_no'] = $req->input('aadhar_card_no');
            }
            if($req->filled('aadhar_address')){
                $affiliate['aadhar_address'] = $req->input('aadhar_address');
            }
            if($req->filled('aadhar_pin')){
                $affiliate['aadhar_pin'] = $req->input('aadhar_pin');
            }
            if($req->filled('aadhar_city')){
                $affiliate['aadhar_city'] = $req->input('aadhar_city');
            }
            if($req->filled('aadhar_state')){
                $affiliate['aadhar_state'] = $req->input('aadhar_state');
            }

            if($req->filled('bank_account_holder_name')){
                $affiliate['bank_account_holder_name'] = $req->input('bank_account_holder_name');
            }

            if($req->filled('bank_name')){
                $affiliate['bank_name'] = $req->input('bank_name');
            }
            if($req->filled('bank_account_no')){
                $affiliate['bank_account_no'] = $req->input('bank_account_no');
            }
            if($req->filled('bank_account_no')){
                $affiliate['bank_account_no'] = $req->input('bank_account_no');
            }
            if($req->filled('bank_ifsc_code')){
                $affiliate['bank_ifsc_code'] = $req->input('bank_ifsc_code');
            }

            

            $res = Affiliate::where('user_id', $user_id)->update($affiliate);
            if($res){
                User::where('id', $user_id)->update($user);
                return redirect()->back()->with('success', 'Profile Updated Successfully.' );
            }else{
                return redirect()->back()->with('error', 'Something went wrong.' );
            }
            
            

        }catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage() )->withInput();
        } 
    } // edit of  function update    



}
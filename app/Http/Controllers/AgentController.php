<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Helper;
use App\Models\Agent;
use App\Models\AgentDocument;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

use App\Exports\AgentExport;
use Maatwebsite\Excel\Facades\Excel;


 
class AgentController extends Controller
{
    
    function __construct()
    {
        
        //
    }

    public function add(){
        try{
           # dd(".........");
            return view('agents.add');
        }catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage() );
        }
    }

    public function store(Request $req){
       // return $req->input();
        try{

            $validator = Validator::make(
                $req->all(),
                    [
                    'first_name'        => 'required',  
                    'last_name'         => 'required',  
                    'email'             => 'required|email',   
                    'mobile'            => 'required',  
                    'mpin'              => 'min:4|max:6|required_with:confirm_mpin|same:confirm_mpin',
                    'confirm_mpin'      => 'min:4|max:6'
                ]
            );

            if ($validator->fails())
            {   
                return redirect()->back()->withErrors($validator->errors())->withInput();
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
            if($req->filled('mpin')){
                $agent['mpin'] = bcrypt($req->input('mpin'));    
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

                # save euin and arn data
                if($req->file('euin_image')){
                    $euin_image = base64_encode(file_get_contents($req->file('euin_image')->path()));
                    $agent_document['euin_image'] = "data:image/" . $req->file('euin_image')->extension() . ";base64," . $euin_image;
                }
                if($req->filled('euin_number')){
                    $agent_document['euin_number'] = $req->input('euin_number');
                }
                if($req->filled('arn_number')){
                    $agent_document['arn_number'] = $req->input('arn_number');
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


    public function updateAgentModuleStatus($agent_id, Request $request){
          try{
         
            $agent_id = Helper::_decrypt($agent_id);
            $agent = Agent::find($agent_id);    
            if($agent){
                $agent->fixed_deposit_module= $request->input('fixed_deposit_module');
                $agent->mutual_fund_module  = $request->input('mutual_fund_module');
                $agent->loan_module         = $request->input('loan_module');
                $agent->insurance_module    = $request->input('insurance_module');
                $agent->updated_at          = date('Y-m-d H:i:s');

                if($request->has('wealth_buddy_code')){
                    $agent->wealth_buddy_code = $request->input('wealth_buddy_code');
                }

                if($request->has('mf_agent_code')){
                    $agent->mf_agent_code = $request->input('mf_agent_code');
                }

                if($request->has('fd_agent_code')){
                    $agent->fd_agent_code = $request->input('fd_agent_code');
                }
                
                if($request->has('loan_agent_code')){
                    $agent->loan_agent_code = $request->input('loan_agent_code');
                }
                
                if($request->has('insurance_agent_code')){
                    $agent->insurance_agent_code = $request->input('insurance_agent_code');
                }

                $agent->save();
                return redirect()->back()->with('success', 'Agent Module status updated successfully.');
            }else{
                return redirect()->back()->with('error', 'Invalid agent id.');
            }
              
        }catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage() );
        }
    } // end of updateAgentModuleStatus 
    

    public function export_data(Request $req)
    {
        return Excel::download(new AgentExport($req), 'agents.xlsx');
    }


      public function edit($agent_id){
        try{

            $agent_id = Helper::_decrypt($agent_id);
            
            $agent = Agent::select(
                            'agents.id',
                            'agents.first_name',
                            'agents.last_name',
                            'agents.gender',
                            'agents.marital_status',
                            'agents.mobile',
                            'agents.email',
                            'agent_documents.agent_profile_image',
                            'agent_documents.pan_image',
                            'agent_documents.pan_card_no',
                            'agent_documents.pan_dob',
                            'agent_documents.aadhar_front_image',
                            'agent_documents.aadhar_back_image',
                            'agent_documents.aadhar_card_no',
                            'agent_documents.aadhar_address',
                            'agent_documents.aadhar_pin',
                            'agent_documents.aadhar_city',
                            'agent_documents.aadhar_state',
                            'agent_documents.cancelled_cheque_image',
                            'agent_documents.bank_account_holder_name',
                            'agent_documents.bank_name',
                            'agent_documents.bank_account_no',
                            'agent_documents.bank_ifsc_code',
                            'agent_documents.euin_image',
                            'agent_documents.euin_number',
                            'agent_documents.arn_number' 
                            )
                    ->join('agent_documents', 'agent_documents.agent_id', '=', 'agents.id')
                    ->where('agents.id', $agent_id)->first();           
                    $agent->pan_dob =  (new Carbon($agent->pan_dob))->format('d/m/Y');
                   // $agent->gender = ucwords($agent->gender) ;
                  //  return $agent;
            return view('agents.edit', ['agent'=>$agent]);
        }catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage() );
        }
    }

    public function update($agent_id, Request $req){
        try{
            $agent_id = Helper::_decrypt($agent_id);
          $validator = Validator::make(
                $req->all(),
                    [
                    'first_name'        => 'required',  
                    'last_name'         => 'required',  
                    'email'             => 'required|email',   
                    'mobile'            => 'required',  
                    'mpin'              => 'same:confirm_mpin',
                  //  'confirm_mpin'      => 'min:4|max:6'
                ]
            );

            if ($validator->fails())
            {   
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
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
            if($req->filled('mpin')){
                $agent['mpin'] = bcrypt($req->input('mpin'));    
            }

            if($req->filled('gender')){
                $agent['gender'] = $req->input('gender');    
            }

            if($req->filled('marital_status')){
                $agent['marital_status'] = $req->input('marital_status');
            }
            # update agent data
            $res = Agent::where('id', $agent_id)->update($agent);
            
            
            if($res){
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

                # save euin and arn data
                if($req->file('euin_image')){
                    $euin_image = base64_encode(file_get_contents($req->file('euin_image')->path()));
                    $agent_document['euin_image'] = "data:image/" . $req->file('euin_image')->extension() . ";base64," . $euin_image;
                }
                if($req->filled('euin_number')){
                    $agent_document['euin_number'] = $req->input('euin_number');
                }
                if($req->filled('arn_number')){
                    $agent_document['arn_number'] = $req->input('arn_number');
                }

                AgentDocument::where('agent_id', $agent_id)->update($agent_document);
                

                return redirect()->back()->with('success', 'Agent & Agent Document updated Successfully.' );
            }

        }catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage() );
        } 
    } // edit of  function update    


}

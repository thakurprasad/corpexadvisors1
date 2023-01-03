<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Helper;
use Carbon\Carbon;
use App\Models\{
    User,
    Affiliate
};


 
class UserController extends Controller
{
    
    function __construct()
    {
        //
    }

    public function index(Request $request , $user_type=''){
        $users = User::select('*');
        if(!empty($user_type)){
            $users = $users->where(['user_type'=> $user_type]);
        }        
        $users = $users->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.users.index', ['users'=>$users]);
    }

    public function edit_affiliate($user_id){
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
            return view('admin.users.edit-affiliate', ['user'=>$user]);
        }catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage() );
        }
    } // end of edit_affiliate

    public function update_affilate_profile(Request $req, $user_id){
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
            }
            if($req->file('aadhar_front_image')){
                $path = Storage::disk('local')->put( config('uploads.aadhar-front-path'), $req->aadhar_front_image, 'public');
                $affiliate['aadhar_front_image'] = Storage::disk('local')->url($path);    
            }
            if($req->file('aadhar_back_image')){
                $path = Storage::disk('local')->put( config('uploads.aadhar-back-path'), $req->aadhar_back_image, 'public');
                $affiliate['aadhar_back_image'] = Storage::disk('local')->url($path);    
            }
            if($req->file('pan_image')){
                $path = Storage::disk('local')->put( config('uploads.pan-path'), $req->pan_image, 'public');
                $affiliate['pan_image'] = Storage::disk('local')->url($path);    
            }
            if($req->file('cancelled_cheque_image')){
                $path = Storage::disk('local')->put( config('uploads.cancelled-cheque-path'), $req->cancelled_cheque_image, 'public');
                $affiliate['cancelled_cheque_image'] = Storage::disk('local')->url($path);    
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

            if($req->filled('pan_status')){
                $affiliate['pan_status'] = $req->input('pan_status');
            }
            if($req->filled('photo_status')){
                $affiliate['photo_status'] = $req->input('photo_status');
            }
            if($req->filled('aadhar_status')){
                $affiliate['aadhar_status'] = $req->input('aadhar_status');
            }
            if($req->filled('bank_status')){
                $affiliate['bank_status'] = $req->input('bank_status');
            }

            $res = Affiliate::where('user_id', $user_id)->update($affiliate);
            if($res){
                $u = User::where('id', $user_id)->update($user);
                return redirect()->back()->with('success', 'Profile Updated Successfully.' );
            }else{

               return redirect()->back()->with('error', 'Something went wrong.' );
            }
            
            

        }catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage() )->withInput();
        } 
    

    }


} # end if UserController 
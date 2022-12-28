<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Helper;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


 
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

}
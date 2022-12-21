<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Helper;

class ServiceController extends Controller
{
    
    public function index(){
        $data = ServiceCategory::select('*')->paginate(10);
        return view('admin.services.index', ['data'=>$data]);
    }

    public function service(){
    	$url = \Request::path();
    	$menu = str_replace("-", "_", $url);
    	return view('services', ['service'=> $menu ]);
    }

    public function edit($col, $id){
        $data = ServiceCategory::find($id);
        $parent_name_array[] = $data->name;
        $parent_id = $data->parent_id;
        if($parent_id){
            $p_arr = Helper::parent_tree($parent_id);
            $parent_name_array = array_merge($parent_name_array, $p_arr);
            $parent_name_array = array_reverse($parent_name_array);
        }else{
            //return "0";
        }
        $breadcrum =  implode(" => ", $parent_name_array);


        $result_data = collect(json_decode($data->result_data));
        $required_documents = collect(json_decode($data->required_documents));
        
        $working_process = collect(json_decode($data->working_process));
        $details = collect(json_decode($data->details));

        return view('admin.services.edit', ['data'=>$data, 'result_data' => $result_data , 'required_documents'=>$required_documents,'working_process'=>$working_process, 'breadcrum'=>$breadcrum, 'details'=>$details]);
    }

    public function update(Request $request ,$col, $id){
     #   return $request->input();
        $required_documents = array_values($request->input('required_documents'));
        $working_process = array_values($request->input('working_process'));
        $details = array_values($request->input('details'));

        $result_data = json_encode($request->result_data);
        ServiceCategory::where('id',$id)
                        ->update([
                            'result_data' => $result_data   ,
                            'required_documents' => json_encode($required_documents),
                            'working_process' => json_encode($working_process),
                            'details' => json_encode($details),
                            'price' => $request->price
                            ]);
        return back()->withSuccess('Data updated Successfully');
    }

}

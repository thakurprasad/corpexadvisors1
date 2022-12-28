<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Helper;
use DB;


class ServiceController extends Controller
{
    
    public function index(Request $request){
         $data = ServiceCategory::select('service_categories.*', 'sc.name as parent_name')
        ->leftJoin(
            DB::raw('service_categories sc'), 
            'sc.id', '=', 'service_categories.parent_id');
        if($request->has('parent_id')){
            $data = $data->where('service_categories.parent_id', $request->parent_id);
        }
        $data = $data->paginate(10);


        return view('admin.services.index', ['data'=>$data]);
    }

    public function service(){
    	$url = \Request::path();
    	$menu = str_replace("-", "_", $url);
    	return view('services', ['service'=> $menu ]);
    }

    public function edit($id){
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
        if($request->has('details')){
            $required_documents = array_values($request->input('required_documents'));
        }else{
            $required_documents = [];
        }
        if($request->has('details')){
            $working_process = array_values($request->input('working_process'));
        }else{
            $working_process = [];
        }
        if($request->has('details')){
            $details = array_values($request->input('details'));
        }else{
            $details = [];
        }

        $result_data = json_encode($request->result_data);
        ServiceCategory::where('id',$id)
                        ->update([
                            'result_data' => $result_data,
                            'required_documents' => json_encode($required_documents),
                            'working_process' => json_encode($working_process),
                            'details' => json_encode($details),
                            'price' => $request->price
                            ]);
        return redirect()->back()->with('message', 'Data updated Successfully');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $service_categories = ServiceCategory::where('parent_id',0)->get();
        return view('index', ['service_categories'=>$service_categories]);
    }

    public function startupRegistrationLabel1($lavel_1)
    {   
       $rows = ServiceCategory::select('service_categories.name as parent_category_name', 'sc.*' )
        ->rightJoin('service_categories as sc', 'sc.parent_id', '=', 'service_categories.id')
        ->where('service_categories.slug',$lavel_1)->get(); // find 2 category list in this query
        
            $DATA1 = [];
        $parent_category_name = '';
        foreach ($rows as $key => $row) {
            $parent_category_name = $row->parent_category_name;
            $id = $row->id;
            $DATA['id'] = $row->id;
            $DATA['name'] = $row->name;
            $DATA['slug'] = $row->slug;            
             $rows_1 = ServiceCategory::select('*')->where('parent_id', $id)->get();
            $DATA[$row->id] = json_decode(json_encode($rows_1), true );
            $DATA1[] = $DATA;
        }
        return view('startup-registration.index', ['data'=> json_encode($DATA1), 'parent_category_name'=>$parent_category_name ]);
    }

    public function startupRegistrationLabel2($lavel_1, $lavel_2)
    {   
        $lavel_1 = ServiceCategory::where('slug',$lavel_1)->first();
        $row = ServiceCategory::where('slug',$lavel_2)->first();
        return view('startup-registration.service', ['service'=>$row, 'lavel_1'=>$lavel_1]);
    }


}

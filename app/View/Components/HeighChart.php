<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Company;
use DB;

class HeighChart extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
       /* $rows = DB::select('SELECT registered_state as state, COUNT(1) totals FROM `companies` GROUP BY registered_state  
ORDER BY `totals` DESC');*/
     $rows = DB::select("SELECT state, total FROM `api_urls` ORDER BY `api_urls`.`total` DESC");
     #dd($rows);
       foreach($rows as $key => $row){
            $states[] = $row->state;
            $records[] = (int)$row->total;
       }

        $total_companies = array_sum($records);

        $states = implode("," , $states );
        $records = implode(",", $records);
      /*   dd($total_companies);*/
        return view('components.heigh-chart', ['states'=>$states, 'records'=> $records, 'total_companies' =>  $total_companies, 'rows'=>$rows ]);
    }
}

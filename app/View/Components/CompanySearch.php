<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Company;

use Carbon\Carbon;

class CompanySearch extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $s = null;
    public function __construct($s)
    {
        $this->s = $s;
       # die($this->s);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
      $company = Company::select(
          'corporate_identification_number',
            'company_name',
            'company_status',
            'company_class',
            'company_category',
            'company_sub_category',
            'date_of_registration',
            'registered_state',
            'authorized_cap',
            'paidup_capital',
            'industrial_class',
            'principal_business_activity_as_per_cin',
            'registered_office_address',
            'registrar_of_companies',
            'email_addr',
            'latest_year_ar',
            'latest_year_bs'
      )->orWhere('corporate_identification_number', $this->s)
        ->orWhere('company_name', $this->s)
        ->first();
        if($company){
            if($company->latest_year_ar != 'NA'){
               $company->latest_year_ar = Carbon::parse($company->latest_year_ar)->format('d/m/Y');
           }
           if($company->latest_year_bs !='NA'){
             $company->latest_year_bs = Carbon::parse($company->latest_year_bs)->format('d/m/Y');
           }
        }

        $companies = Company::select('company_name')->take(1000)->get();
        #dd($companies);
        return view('components.company-search' , ["data"=>$company, 'companies'=>$companies]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'corporate_identification_number',
        'company_name',
        'company_status',
        'company_class',
        'company_class_',
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
        'latest_year_bs',
        'created_at'
    ];


}

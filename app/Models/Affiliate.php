<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;
   
    protected $fillable = [
            'user_id',
            'first_name',
            'last_name',
            'gender',
            'marital_status',
            'profile_image',
            'photo_status',
            'photo_approved_by',
            'pan_image',
            'pan_card_no',
            'pan_dob',
            'pan_status',
            'pan_approved_by',
            'aadhar_front_image',
            'aadhar_back_image',
            'aadhar_card_no',
            'aadhar_address',
            'aadhar_pin',
            'aadhar_city',
            'aadhar_state',
            'aadhar_status',
            'aadhar_approved_by',
            'cancelled_cheque_image',
            'bank_name',
            'bank_account_holder_name',
            'bank_account_no',
            'bank_ifsc_code',
            'bank_status',
            'bank_approved_by',
            'kyc_status',
            'created_at',
            'updated_at'
    ];
}

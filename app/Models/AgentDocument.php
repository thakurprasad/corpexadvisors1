<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentDocument extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'agent_id',
        'agent_type',
        'agent_profile_image',
        'agent_photo_status',
        'agent_photo_approved_by',
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
        'bank_account_holder_name',
        'bank_name',
        'bank_account_no',
        'bank_ifsc_code',
        'bank_status',
        'bank_approved_by',
        'kyc_status',
        'euin_image',
        'euin_number',
        'euin_status',
        'euin_approved_by',
        'arn_image',
        'arn_number',
        'arn_status',
        'arn_approved_by',
        'created_at',
        'updated_at'
    ];
}

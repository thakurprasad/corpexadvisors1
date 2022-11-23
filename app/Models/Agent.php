<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'first_name',
        'last_name', 
        'mobile',
        'mpin',
        'otp',
        'refrence_code',
        'email',
        'password',
        'gender',
        'marital_status',
    ];


     public function getFullNameAttribute()
        {
           return $name =  ucwords("{$this->first_name} {$this->last_name}");
        }

}

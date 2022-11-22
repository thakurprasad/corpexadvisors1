<?php // Code within app\Helpers\Helper.php
namespace App\Helpers;
use DB;

class Helper
{
   /* public static function isDeferred(){
        return true;
    }*/
	   public static function getStatus(){
        return [ 
            '' => '-- Select --',
            '1' => 'Active',
            '-1' => 'Inactive',
        ];
    }

    public static function viewStatus($val){
       $data = '';
       if($val == 1) { $data = 'Active'; }
       if($val == -1) { $data = 'Inctive'; }
       return $data;
    }



    public static function _decrypt($str){
        return decrypt($str);
    }

    public static function _encrypt($str){
        return encrypt($str);
    }

    public static function edit_btn($url, $btn_name='',  $btn_id = ''){
        if(empty($btn_name)){
            return '<a href="'.$url.'" class="btn-info btn-sm btn">Edit</a>';
        }else{
            return '<a href="'.$url.'" class="btn-info btn-sm btn">'.$btn_name.'</a>';
        }
    }

    public static function delete_btn($url, $btn_name ='', $btn_id = ''){
        $alert = 'Are your sure, You want to delete this record?';
        if(empty($btn_name)){
            return '<a href="'.$url.'" class="btn-danger btn-sm btn" 
            onclick="return confirm(\''.$alert.'\')" >Delete</a>';
        }else{
            return '<a href="'.$url.'" class="btn-danger btn-sm btn">'.$btn_name.'</a>';
        }
    }


    public static function show_btn($url, $btn_name='', $btn_id = ''){
        if(empty($btn_name)){
            return '<a href="'.$url.'" class="btn-primary btn-sm btn">Show</a>';
        }else{
            return '<a href="'.$url.'" class="btn-primary btn-sm btn">'.$btn_name.'</a>';
        }
    }

    public static function add_btn($url, $btn_name='',  $btn_id = ''){
        if(empty($btn_name)){
            return '<a href="'.$url.'" class="btn-primary btn-sm btn">Add</a>';
        }else{
            return '<a href="'.$url.'" class="btn-primary btn-sm btn">'.$btn_name.'</a>';
        }
    }

    public static function verified($val = 0){
        if($val == 1){
            return '<label class="badge badge-success">Verified</label>';
        }else{
            return '<label class="badge badge-danger">Not Verified</label>';    
        }
    }

    public static function gender(){
        return [
            ''          => '-- Select --',
            'Male'      => 'Male',
            'Female'    => 'Female'
        ];
    }

    public static function gender_(){
        return [
            ''          => '-- Select --',
            'male'      => 'Male',
            'female'    => 'Female',
            'other'    => 'Other'
        ];
    }

    public static function rejection_reason(){
        return [
            ''             => '-- Select --',
            'document image not clear'     => 'document image not clear',
            'wrong document uploaded'     => 'wrong document uploaded',
            'Other'        => 'Other'
        ];
    }

    public static function maritalStatus(){
        return [
            ''          => '-- Select --',
            'married'      => 'Married',
            'unmarried'    => 'Unmarried '
        ];    
    }

    public static function getBanks(){
        $banks = BseBank::select('bank_name', 'id')->get();
        $BANKs_ARR[''] = '-- Select --';
        foreach($banks as $key=>$val){
            $BANKs_ARR[$val->bank_name] = $val->bank_name;
        }
        return $BANKs_ARR;
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Html extends Model
{
    use HasFactory;


    /*
	use this function like given bellow...
	 {{ \App\Models\Html::service( ['icon'=> 'public/assets/images/how/how4.png', 'title'=> 'Private Limited company Registration', 'link' => '#' ] ) }} 

	{{ \App\Models\Html::service( ['title'=>'hello word']) }}
	
    */

    public static function service($arr = array() ){

    	if(!isset($arr['icon'])){ 
    		$arr['icon'] = 'public/assets/images/services/comman.png';
    	}    	
    	if(!isset($arr['title'])){ 
    		$arr['title'] = 'Title';
    	}
    	if(!isset($arr['url'])){ 
    		$arr['url'] = "#";
    	}
    	if(!isset($arr['other'])){ 
    		$arr['other'] = "";
    	}
    	return view('components/service', [ 'data'=> json_encode($arr) ]);
    }
}

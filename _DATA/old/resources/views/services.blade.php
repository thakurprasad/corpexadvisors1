@extends('layouts.inner-page')

@section('page-title')
	{{ __('One Person Company') }}
@endsection

@section('breadcrumb')
	<h1 class="title">{{ __('Business Registrations') }}</h1>
        <ul class="breadcrumb">
	        <li>
	            <a href="{{ url('/') }}">Home</a>
	        </li>
	        <li>
	            <a href="#">STARTUP REGISTRATION</a>
	        </li>
	        <li>
	            <a href="#">Business Registrations</a>
	        </li> 
	        <li>
	            Business Registrations / Fssai & Eating License
	        </li> 
    </ul>
@endsection

@section('body')
 	<div class="contener">
 		<div class="row"> 
 			<div class="col-md-12"><h3>Business Registrations</h3></div>
 			@foreach(\App\Models\Menu::list('business_registrations') as $key => $val ) 

 			 	{{ \App\Models\Html::service( [ 'title'=> $val->name , 'url' => $val->url ] ) }}

 			 @endforeach
 		</div>

 		<div class="row"> 
 			<div class="col-md-12"><h3>Fssai & Eating License</h3></div>
 			@foreach(\App\Models\Menu::list('fssai_and_eating_license') as $key => $val )  			
 			 	
 			 	{{ \App\Models\Html::service( ['icon'=> 'public/assets/images/how/how4.png', 'title'=> $val->name , 'url' => $val->url ] ) }}

 			 @endforeach
 		</div>
 	</div>
@endsection  



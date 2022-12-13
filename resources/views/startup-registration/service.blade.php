@extends('layouts.inner-page')

@section('page-title')
	{{ __('One Person Company') }}
@endsection

@section('breadcrumb')
	<h1 class="title">{{ $service->name }}</h1>
        <ul class="breadcrumb">
	        <li>
	            <a href="{{ url('/') }}">Home</a>
	        </li>
	        <li>
	            <a href="{{ url($lavel_1->slug) }}">{{$lavel_1->name}}</a>
	        </li>
	        <li>
	            {{ $service->name }}
	        </li> 
    </ul>
@endsection

@section('body')
 	<div class="contener">
 		<div class="row"> 
 			<h1>{!! $service->name !!}</h1>
 			{!! $service !!}
 			<div class="col-md-12 row">
 				<h4>Documents Required </h4>
<p>Only Scanned Copies are needed, Scanned copy of PAN Card of all directors and Aadhar card/ Voter ID/ Passport/ Driving</p>
<?php $data = json_decode($service, true); 
$required_documents = json_decode($data['required_documents'], true);
$working_process = json_decode($data['working_process'], true);

?>
		@foreach($required_documents as $key=>$document)
			<div class="col-md-3">
				<h6> {!! $key !!}</h6>
				<p>{!! $document !!}</p>
			</div>
		@endforeach
 			</div>



 		</div>	

 		<div class="row col-md-12" style="padding-top:30px;">
 			<div class="tab-item" style="display: block;">
                <div class="faq-wrapper">
                	@foreach($working_process as $key=>$val)
                		 <div class="faq-item">
                        <div class="faq-title">
                            <h5 class="title">{!! $key !!}</h5>
                            <span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>
                               {!! $val !!}
                            </p>
                        </div>
                    </div>
                	@endforeach
                   
                </div>
            </div>
 		</div>
 	</div>
<style type="text/css">	
	.how-item a.custom-button{
	    color: white !important;
	}
 </style>
@endsection  



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
<?php 
	$data = json_decode($service, true); 
	$required_documents = json_decode($data['required_documents'], true);
	$working_process = json_decode($data['working_process'], true);
?>
<section class="faq-section padding-top padding-bottom">
<div class="contener">
 	<div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="section-header">
                <!-- <span class="cate">You have questions</span> -->
                <h2 class="title">
                  Documents Required 
                </h2>
                <p class="mw-100">
                    Only Scanned Copies are needed, Scanned copy of PAN Card of all directors and Aadhar card/ Voter ID/ Passport/ Driving
                </p>
            </div>
        </div>
    </div>
 	<div class="row"> 
			@foreach($required_documents as $key=>$document)
				<div class="col-md-3">
					<h6> {!! $key !!}</h6>
					<p>{!! $document !!}</p>
				</div>
			@endforeach
	</div>	
</div>
</section>

<section class="faq-section padding-top padding-bottom">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="section-header">
                <!-- <span class="cate">You have questions</span> -->
                <h2 class="title">
                    Working Process
                </h2>
                <p class="mw-100">
                    Working process step by step define bellow
                </p>
            </div>
        </div>
    </div>
    <div class="faq-wrapper">
    	<?php  $i=0; ?>
    	@foreach($working_process as $key=>$val)
    	<?php  $i++  ?>
        <div class="faq-item <?= ($i == 1 ? 'open' : '' ) ?> ">
            <div class="faq-title">
                <h5 class="title">{!! $key !!}</h5>
                <span class="right-icon"></span>
            </div>
            <div class="faq-content" style="display: <?= ($i ==1 ? 'block' : 'none' ) ?> ;">
                <p>
                    {!! $val !!}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>

 </section>		

<style type="text/css">	
	.how-item a.custom-button{
	    color: white !important;
	}
 </style>
@endsection  



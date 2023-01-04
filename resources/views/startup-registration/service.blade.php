@extends('layouts.inner-page')

@section('page-title')
	{{ $service->name }}
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
    $result_data  = json_decode($data['result_data']);
	$required_documents = json_decode($data['required_documents']);
	$working_process = json_decode($data['working_process']);
?>


<section class="faq-section padding-top padding-bottom">
        <div class="contener row">
            <div class="col-md-8">
                <div class="row justify-content-center">                    
                        <div class="section-header">
                            <!-- <span class="cate">You have questions</span> -->
                            <h2 class="title">
                                What Will You get
                            </h2>
                            <p class="mw-100">
                                
                            </p>
                        </div>                    
                </div>
                <div class="row"> 
                    <?php foreach ($result_data as $key => $value) {?>
                        <div class="col-md-4"> <i class="fa fa-check" aria-hidden="true"></i> {!! $value !!}</div>    
                    <?php } ?>
                    
                </div>
            </div>
            <div class="col-md-4">
              <div class="how-item">
                    <div class="how-thumb-area">
                        <div class="how-thumb">
                            <img src="{{ asset('images/services/comman.png') }}" alt="how">
                        </div>
                    </div>
                    <div class="how-content">
                       <a href="#"> <h5 class="title">{{ $data['name'] }}</h5></a>
                       <div class="other-content">
                           <b>Rs. </b><span class="price">{{$data['price'] }}</span>                             
                       </div>
                       <a href="{{ url('checkout/'.Helper::_encrypt($data['id'])) }}" class="custom-button"> Buy Now <i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
</section>

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
			@foreach($required_documents as $key => $row)
				<div class="col-md-3">
					<h6> {!! $row->document !!}</h6>
					<p>{!! $row->document_desc !!}</p>
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
    	@foreach($working_process as $key => $row)
    	<?php  $i++  ?>
        <div class="faq-item <?= ($i == 1 ? 'open' : '' ) ?> ">
            <div class="faq-title">
                <h5 class="title">{!! $row->title !!}</h5>
                <span class="right-icon"></span>
            </div>
            <div class="faq-content" style="display: <?= ($i ==1 ? 'block' : 'none' ) ?> ;">
                <p>
                    {!! $row->description !!}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>

 </section>		
 <section style="text-align:center;">
    <a class="btn btn-info btn-lg" href="{{ url(Request::path(). '/view-more-details') }}">View More Details</a>    
 </section>
 

<style type="text/css">	
	.how-item a.custom-button{
	    color: white !important;
	}
    span.price {
    font-size: 45px;
    color: green;
}
 </style>
@endsection  



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
 		<div class="row" style="min-height:600px;"> 
 			<h1>{!! $service->name !!}</h1>
 			{!! $service !!}
 		</div>	
 	</div>
@endsection  



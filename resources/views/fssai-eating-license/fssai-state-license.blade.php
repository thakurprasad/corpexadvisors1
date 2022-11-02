@extends('layouts.inner-page')

@section('page-title')
	{{ __('Inner Page Title') }}
@endsection

@section('breadcrumb')
	<h1 class="title">{{ __('Inner Page Title') }}</h1>
    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="#">TITLE</a></li>
        <li><a href="#">TEST</a></li> 
        <li>Page Name</li> 
    </ul>
@endsection 



@section('body')
	body text
@endsection  



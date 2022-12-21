@extends('admin.layouts.dashboard', ['title'=>'Admin Dashboard', 'module'=>'Home'])

@section('body')
	
      
<div class="container-fluid">
   @include('alert.message')     
   <h1>Admin Dashboard</h1>
  
</div>
@endsection


@extends('layouts.dashboard', ['title'=>'Edit Service', 'module'=>'Home'])

@section('body')
	
      
<div class="container-fluid">
   @include('alert.message')     
   <h1>Service List</h1>
   
   <table class="table table-bordered">
   	<thead>
   		<tr>
   			<th>id</th>
   			<th>Name</th>
   			<th>Price</th>
   			<th>Result Data</th>
   			<th>required_documents</th>
   		</tr>
   	</thead>
   	<tbody>
   	@foreach($data as $key=>$row)
   		<tr>
   			<td>{!! $row->id !!}</td>
   			<td>{!! $row->name !!}</td>
   			<td>{!! $row->price !!}</td>
   			<td>{!! $row->result_data !!} <a href="{{ url('admin/service/result_data/'.$row->id) }}" target="_blank">Edit</a> </td>
   			<td>{!! $row->required_documents !!}</td>

	   	</tr>
	   @endforeach	
	   </tbody>   	
   </table>   
   {{$data->links()}}
</div>
@endsection


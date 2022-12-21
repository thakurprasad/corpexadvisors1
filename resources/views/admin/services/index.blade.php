@extends('admin.layouts.dashboard', ['title'=>'Edit Service', 'module'=>'Home'])

@section('body')
	
      
<div class="container-fluid">
   @include('alert.message')     
   <h1>Service List</h1>
   
   <table class="table table-bordered">
   	<thead>
   		<tr>
   			<th>id</th>
   			<th>Name</th>
   			<th>Parent</th>
   			<th>Price</th>
   			<th>Result Data</th>
   			<th>Action</th>
   		</tr>
   	</thead>
   	<tbody>
   	@foreach($data as $key=>$row)
   		<tr>
   			<td>{!! $row->id !!}</td>
   			<td>{!! $row->name !!}</td>
   			<td>{!! $row->parent_name !!}</td>
   			<td>{!! $row->price !!}</td>
   			<td>{!! $row->result_data !!}  </td>
   			<td><a class="btn-info btn-sm btn" href="{{ url('admin/service/category/'.$row->id) }}" target="_blank">Edit</a></td>

	   	</tr>
	   @endforeach	
	   </tbody>   	
   </table>   
   {{$data->links()}}
</div>
@endsection


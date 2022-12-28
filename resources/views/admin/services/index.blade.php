@extends('admin.layouts.app', ['title'=>'Services List', 'module'=>'Services'])

@section('body')
	
      
<div class="container-fluid">
   @include('alert.message')        
   <table class="table table-bordered">
   	<thead>
   		<tr>
   			<th>id</th>
   			<th>Name </th>
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
   			<td><a href="{{ url('admin/services?parent_id='.$row->parent_id) }}"> {!! $row->parent_name !!}</a></td>
   			<td>{!! $row->price !!}</td>
   			<td>{!! $row->result_data !!}  </td>
   			<td><a class="btn-info btn-sm btn" href="{{ url('admin/services/edit/'.$row->id) }}" target="_blank">Edit</a></td>

	   	</tr>
	   @endforeach	
	   </tbody>   	
   </table>   
   {{$data->links()}}
</div>
@endsection


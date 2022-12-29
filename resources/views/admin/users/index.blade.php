@extends('admin.layouts.app', ['title'=>'User List', 'module'=>'Users'])

@section('body')
	
      
<div class="container-fluid">
   @include('alert.message')    
   <div class="col-md-12">
   	<a class="btn btn-primary btn-sm" href="{{ url('admin/users/add') }}"><i class="flaticon-man"></i> Add New User</a>
   </div>
   <table class="table table-bordered">
   	<thead>
   		<tr>
   			<th>Name </th>
   			<th>Mobile</th>
   			<th>Email</th>
   			<th>User Type</th>
   			<th>Created At</th>
   			<th>Action</th>
   		</tr>
   	</thead>
   	<tbody>
   	@foreach($users as $key=>$row)
   		<tr>
   			<td>{!! $row->name !!}</td>
   			<td>{!! $row->mobile !!}</td>
   			<td>{!! $row->email !!}</td>
   			<td>{!! $row->user_type !!}</td>
   			<td>{!! $row->created_at !!}</td>   			
   			<td>
               <a class="btn-info btn-sm btn" href="{{ url('admin/'.$row->user_type.'/update-profile/'. Helper::_encrypt($row->id) ) }}" target="_blank">Edit</a>
            </td>
	   	</tr>
	   @endforeach	
	   </tbody>   	
   </table>   
   {{$users->links()}}
   
</div>
@endsection


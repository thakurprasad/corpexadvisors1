@extends('admin.layouts.dashboard', ['title'=> $breadcrum, 'module'=>'Home'])

@section('body')
	
      
<div class="container-fluid">
   @include('alert.message')     
   <h3>Edit - {{  $data->name }}</h3>
  	

   {!! Form::model($data, array('url' => 'admin/service/service/'.$data->id ,'method'=>'POST',  'enctype'=>'multipart/form-data' )) !!} 
   @csrf
	    <div class="row">
		  	<div class="col-md-8">
		   	
   	<div class="container card">
   		<br><h5>Result Data</h5><br>
   		<div class="col-lg-6" id="input_area">
   			<?php  $i = 0; ?>
	   		@foreach($result_data as $key=>$val)
	   		<?php $i++; ?>
	          <div class="form-group"  id="row_no_<?= $i ?>">            
	             <input class="form-control data-input" type="text" name="result_data[]" value="<?= $val ?>"><span class="delete_row" onclick="remove_row('row_no_{{$i}}')">x</span>
	          </div>
	          @endforeach
	       </div>
	       <div class="col-lg-3">
	       	
	       </div>
	        <a style="cursor: pointer;padding-right: 30%;"  onclick="new_row()">Add more</a>
	    </div> 	
		   </div>
		    <div class="col-md-4">
		    	<div class="container card" style="padding-top: 20px; padding-bottom: 40px;">
		    	<h5>Price</h5>
		       	<input type="text" class="form-control" name="price" placeholder="Enter Price in Rs." value="{{ $data->price }}">
		       </div>
		    </div>
		 </div>

	    <div class="container card">
   		<br><h5>Required Documents</h5><br>
	   		<table class="table table-bordered">
	   			<thead>
	   				<tr>
	   					<th class="w-20">Required Documents</th>
	   					<th class="w-70">Required Documents Description</th>	
	   					<th class="w-10"></th>
	   				</tr>
	   			</thead>
	   			<tbody id="table_body">
	   			<?php  $j = 0; ?>
	   		@foreach($required_documents as $key=>$row)
	   			<?php $j++; ?>
	   				<tr  id="table_row_<?= $j ?>">
	   					<td>
	   						<input type="text" name="required_documents[{{$j}}][document]" value="{{ $row->document }}" class="form-control">          
	   					</td>
	   					<td>
	   						<input class="form-control data-input" type="text" name="required_documents[{{$j}}][document_desc]" value="<?= $row->document_desc ?>">	
	   					</td>
	   					<td>
	   						<span class="delete_row" onclick="remove_table_row('table_row_{{$j}}')">x</span>
	   					</td>
	   				</tr>	   				
	          	@endforeach
	   			</tbody>	   			
	   		</table>
	        <a style="cursor: pointer;padding-right: 30%;"  onclick="add_more_required_documents()">Add more</a>
	    </div>

	     <div class="container card">
   		<br><h5>Working Process</h5><br>
	   		<table class="table table-bordered">
	   			<thead>
	   				<tr>
	   					<th class="w-20">Title</th>
	   					<th class="w-70">Description</th>	
	   					<th class="w-10"></th>
	   				</tr>
	   			</thead>
	   			<tbody id="table_body_working_process">
	   			<?php  $k = 0; ?>
	   		@foreach($working_process as $key=>$row)
	   			<?php $k++; ?>
	   				<tr  id="_table_row_<?= $k ?>">
	   					<td>
	   						<input type="text" name="working_process[{{$k}}][title]" value="{{ $row->title }}" class="form-control" placeholder="Enter Title">          
	   					</td>
	   					<td>
	   						<textarea class="form-control data-input" type="text" name="working_process[{{$k}}][description]"><?= $row->description ?></textarea>	
	   					</td>
	   					<td>
	   						<span class="delete_row" onclick="remove_table_row('_table_row_{{$k}}')">x</span>
	   					</td>
	   				</tr>	   				
	          	@endforeach
	   			</tbody>	   			
	   		</table>
	        <a style="cursor: pointer;padding-right: 30%;"  onclick="add_more_working_process()">Add more</a>
	    </div>

	    <div class="container card">
   		<br><h5>Update Service Full Details</h5><br>
	   		<table class="table table-bordered">
	   			<thead>
	   				<tr>
	   					<th class="w-20">Title</th>
	   					<th class="w-70">Description</th>	
	   					<th class="w-10"></th>
	   				</tr>
	   			</thead>
	   			<tbody id="table_body_details">
	   			<?php  $m = 0; ?>
	   		@foreach($details as $key=>$row)
	   			<?php $m++; ?>
	   				<tr  id="1_table_row_<?= $m ?>">
	   					<td>
	   						<input type="text" name="details[{{$m}}][title]" value="{{ $row->title }}" class="form-control" placeholder="Enter Title">          
	   					</td>
	   					<td>
	   						<textarea id="ckeditor_{{ $m }}" class="form-control data-input" type="text" name="details[{{$m}}][description]"><?= $row->description ?></textarea>	
	   					</td>
	   					<td>
	   						<span class="delete_row" onclick="remove_table_row('1_table_row_{{$m}}')">x</span>
	   					</td>
	   				</tr>	   				
	          	@endforeach
	   			</tbody>	   			
	   		</table>
	        <a style="cursor: pointer;padding-right: 30%;"  onclick="add_more_details()">Add more</a>
	    </div>
	      
	       <div class="col-lg-12">
	       	<div class="col-md-3">
		       	<input type="submit" name="update" value="Update" class="custom-button">
		       </div>
	       </div>



	{!! Form::close() !!}
<?php /*
<textarea name="ckeditor_1"></textarea>
<textarea name="ckeditor_2"></textarea>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>  
<!-- https://www.c-sharpcorner.com/blogs/rich-textbox-editor-htmljavascript -->
<script>  
    CKEDITOR.replace('ckeditor_1');  
    CKEDITOR.replace('ckeditor_2');  
  
    function getData() {  
        //Get data written in first Editor   
        var editor_data = CKEDITOR.instances['ckeditor_1'].getData();  
        //Set data in Second Editor which is written in first Editor  
        CKEDITOR.instances['ckeditor_2'].setData(editor_data);  
    }  
</script> */ ?> 	
<style type="text/css">
.container.card {
    margin-bottom: 20px;
}
.w-5{
	width: 5%;
}	
.w-20{
	width: 20%;
}	
.w-70{
	width: 70%;
}	

.data-input {
    width: 90%;
    float: left;
    margin-bottom: 10px;
}
.delete_row{
	color: red;
	cursor: pointer;
	font-size: 30px;
}
</style>
<script type="text/javascript">
	var i =  {{ $i }};
	function new_row(){		
		i++;
		var d = 'row_no_'+i;
	var input = '<div id="row_no_'+i+'" class="form-group"><input type="text" class="form-control data-input" name="result_data[]"><span class="delete_row" onclick="remove_row(\''+d+'\')">x</span></div>';
		document.getElementById('input_area').innerHTML += input;
		
	}

	function remove_row(row_id){
		
		document.getElementById(row_id).innerHTML = '';
	}


	var j =  {{ $j }};
	function add_more_required_documents(){		
		j++;
		var d = 'row_no_'+j;

		var tr = '<tr id="'+d+'"><td><input type="text" name="required_documents['+j+'][document]" class="form-control"></td><td><input class="form-control data-input" type="text" name="required_documents['+j+'][document_desc]"></td><td><span class="delete_row" onclick="remove_table_row(\''+d+'\')">x</span></td></tr>';		

		document.getElementById('table_body').innerHTML += tr;
		
	}


var k =  {{ $k }};
	function add_more_working_process(){		
		k++;
		var d = 'row_no_'+k;

		var tr = '<tr id="'+d+'"><td><input placeholder="Enter Title" type="text" name="working_process['+k+'][title]" class="form-control"></td><td><textarea class="form-control data-input"  placeholder="Enter Description" type="text" name="working_process['+k+'][description]"></textarea></td><td><span class="delete_row" onclick="remove_table_row(\''+d+'\')">x</span></td></tr>';	
		document.getElementById('table_body_working_process').innerHTML += tr;
		
	}

var m =  {{ $m }};
	function add_more_details(){		
		m++;
		var d = 'row_no_'+m;

		var tr = '<tr id="'+d+'"><td><input placeholder="Enter Title" type="text" name="details['+m+'][title]" class="form-control"></td><td><textarea class="form-control data-input"  placeholder="Enter Description" type="text" name="details['+m+'][description]"></textarea></td><td><span class="delete_row" onclick="remove_table_row(\''+d+'\')">x</span></td></tr>';	
		document.getElementById('table_body_details').innerHTML += tr;
		
	}



	function remove_table_row(table_row){
		   document.getElementById(table_row).remove();
	}
</script>

</div>
@endsection


@extends('admin.layouts.app', ['title'=> $breadcrum, 'module'=>'Edit Services '. $data->name])

@section('body')
	
      
<div class="container-fluid">
   <div class="container"> 
   		@include('alert.message')   		
   </div>

   {!! Form::model($data, array('url' => 'admin/service/service/'.$data->id ,'method'=>'POST',  'enctype'=>'multipart/form-data' )) !!} 
   @csrf
	    <div class="row">
		  	<div class="col-md-8">		   	
   	<div class="container card">
   		<br><h5>Result Data</h5><br>
   		<div class="col-lg-6">
   			<table class="table table-bordered" id="table_result_data">   			
   			<?php  $i = 0; ?>
	   		@foreach($result_data as $key=>$val)
	   		<?php $i++; ?>
   				<tr  id="row_no_<?= $i ?>">
   					<td style="width:80%">
   						<input class="form-control" type="text" name="result_data[]" value="<?= $val ?>">	
   					</td>
   					<td style="width:20%">
   						<span class="delete_row" onclick="remove_row('row_no_{{$i}}')">x</span>
   					</td>
   				</tr>   				
	          @endforeach
   			</table>
	       </div>	       
	        <a style="cursor: pointer;padding-right: 30%;"  onclick="add_more_result_data()">Add more</a>
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
	   		<table class="table table-bordered" id="table_required_documents">
	   			<thead>
	   				<tr>
	   					<th class="w-30">Required Documents</th>
	   					<th class="w-60">Required Documents Description</th>	
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
	   						<textarea id="rd_ckeditor_{{ $j }}" class="form-control data-input" type="text" name="required_documents[{{$j}}][document_desc]"><?= $row->document_desc ?></textarea>
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
	   		<table class="table table-bordered" id="table_working_process">
	   			<thead>
	   				<tr>
	   					<th class="w-30">Title</th>
	   					<th class="w-60">Description</th>	
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
	   						<textarea id="wp_ckeditor_{{ $k }}" class="form-control data-input" type="text" name="working_process[{{$k}}][description]"><?= $row->description ?></textarea>	
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
	   		<table class="table table-bordered" id="table_details">
	   			<thead>
	   				<tr>
	   					<th class="w-30">Title</th>
	   					<th class="w-60">Description</th>	
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
	   						<textarea id="d_ckeditor_{{ $m }}" class="form-control data-input" type="text" name="details[{{$m}}][description]"><?= $row->description ?></textarea>	
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
		       	<input type="submit" name="update" value="Update" class="custom-button"  style="position: fixed;
    right: 0;
    top: 90%;
    width: 200px;
    z-index: 999;">
		       </div>
	       </div>



	{!! Form::close() !!}


<!-- <textarea name="ckeditor_1"></textarea>
<textarea name="ckeditor_2"></textarea> -->
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>  
<!-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>   -->
<!-- https://www.c-sharpcorner.com/blogs/rich-textbox-editor-htmljavascript -->
<script>  
	/*
    CKEDITOR.replace('ckeditor_1');  
    CKEDITOR.replace('ckeditor_2');  
  
    function getData() {  
    	alert("245");
        //Get data written in first Editor   
        var editor_data = CKEDITOR.instances['ckeditor_1'].getData();  
        //Set data in Second Editor which is written in first Editor  
        CKEDITOR.instances['ckeditor_2'].setData(editor_data);  
        alert("250");
    }  */
</script>
<style type="text/css">
.container.card {
    margin-bottom: 20px;
}
.w-5{
	width: 5%;
}	
.w-30{
	width: 30%;
}	
.w-60{
	width: 60%;
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
	function remove_row(row_id){		
		document.getElementById(row_id).innerHTML = '';
	}


	var i =  {{ $i }};
	function add_more_result_data(){		
		i++;
		var d = 'row_no_'+i;
		/*
	var input = '<div id="row_no_'+i+'" class="form-group"><input type="text" class="form-control data-input" name="result_data[]"><span class="delete_row" onclick="remove_row(\''+d+'\')">x</span></div>';
		document.getElementById('input_area').innerHTML += input;
*/
	var table = document.getElementById("table_result_data");
	  var row = table.insertRow();
	  row.setAttribute('id', d);
	  var cell1 = row.insertCell(0);
	  var cell2 = row.insertCell(1);
	  cell1.innerHTML = '<input placeholder="Enter Result Data" type="text" name="result_data[]" class="form-control">';
	  cell2.innerHTML = '<span class="delete_row" onclick="remove_table_row(\''+d+'\')">x</span>';
		
	}



	var j =  {{ $j }};
	<?php for ($i=1; $i <= $j ; $i++) { ?>
	var c = 'rd_ckeditor_' + {{ $i }};
	CKEDITOR.replace(c);
	<?php } ?>
	function add_more_required_documents(){		
		j++;
		var d = 'row_no_'+j;
/*
		var tr = '<tr id="'+d+'"><td><input type="text" name="required_documents['+j+'][document]" class="form-control"></td><td><input class="form-control data-input" type="text" name="required_documents['+j+'][document_desc]"></td><td><span class="delete_row" onclick="remove_table_row(\''+d+'\')">x</span></td></tr>';		

		document.getElementById('table_body').innerHTML += tr;
		*/

	  var table = document.getElementById("table_required_documents");
	  var row = table.insertRow();
	  row.setAttribute('id', d);
	  var cell1 = row.insertCell(0);
	  var cell2 = row.insertCell(1);
	  var cell3 = row.insertCell(2);
	  cell1.innerHTML = '<input placeholder="Enter Title" type="text" name="required_documents['+j+'][document]" class="form-control">';
	  cell2.innerHTML = '<textarea id="rd_ckeditor_'+j+'" class="form-control data-input"  placeholder="Enter Description" type="text" name="required_documents['+j+'][document_desc]"></textarea>';
	  cell3.innerHTML = '<span class="delete_row" onclick="remove_table_row(\''+d+'\')">x</span>';
	  CKEDITOR.replace('rd_ckeditor_'+j);  
		
	}


	var k =  {{ $k }};
	<?php for ($i=1; $i <= $k ; $i++) { ?>
	var c = 'wp_ckeditor_' + {{ $i }};
	CKEDITOR.replace(c);
	<?php } ?>
	function add_more_working_process(){		
		k++;
		var d = 'row_no_'+k;
/*
		var tr = '<tr id="'+d+'"><td><input placeholder="Enter Title" type="text" name="working_process['+k+'][title]" class="form-control"></td><td><textarea class="form-control data-input"  placeholder="Enter Description" type="text" name="working_process['+k+'][description]"></textarea></td><td><span class="delete_row" onclick="remove_table_row(\''+d+'\')">x</span></td></tr>';	
		document.getElementById('table_body_working_process').innerHTML += tr;*/
		

	  var table = document.getElementById("table_working_process");
	  var row = table.insertRow();
	  row.setAttribute('id', d);
	  var cell1 = row.insertCell(0);
	  var cell2 = row.insertCell(1);
	  var cell3 = row.insertCell(2);
	  cell1.innerHTML = '<input placeholder="Enter Title" type="text" name="working_process['+k+'][title]" class="form-control">';
	  cell2.innerHTML = '<textarea id="wp_ckeditor_'+k+'" class="form-control data-input"  placeholder="Enter Description" type="text" name="working_process['+k+'][description]"></textarea>';
	  cell3.innerHTML = '<span class="delete_row" onclick="remove_table_row(\''+d+'\')">x</span>';
	  CKEDITOR.replace('ckeditor_'+k);  

	}


var m =  {{ $m }};
<?php for ($i=1; $i <= $m ; $i++) { ?>
	var c = 'd_ckeditor_' + {{ $i }};
	CKEDITOR.replace(c);
<?php } ?>
	  

	function add_more_details(){
		m++;
	  var d = '1_table_row_'+m;

	  var table = document.getElementById("table_details");
	  var row = table.insertRow();
	  row.setAttribute('id', d);
	  var cell1 = row.insertCell(0);
	  var cell2 = row.insertCell(1);
	  var cell3 = row.insertCell(2);
	  cell1.innerHTML = '<input placeholder="Enter Title" type="text" name="details['+m+'][title]" class="form-control">';
	  cell2.innerHTML = '<textarea id="d_ckeditor_'+m+'" class="form-control data-input"  placeholder="Enter Description" type="text" name="details['+m+'][description]"></textarea>';
	  cell3.innerHTML = '<span class="delete_row" onclick="remove_table_row(\''+d+'\')">x</span>';
	  CKEDITOR.replace('d_ckeditor_'+m);  
	}


	function remove_table_row(table_row){
		   document.getElementById(table_row).remove();
	}
</script>



</div>
@endsection


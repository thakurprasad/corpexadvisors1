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

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@section('body')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<form method="get">
    <div class="row">
        <div class="col-md-8">
            
            <input id="tags" type="text" name="s" class="form-control" 
            value="<?= isset($_GET['s']) ? $_GET['s'] : "" ?>" 
            placeholder="Enter Company Name/CIN">
        </div>
        <div class="col-md-4 button-group">
            <p><input type="submit" name="search" value="search" class="custom-button">
        </div>
    </div>
</form>

<?php

$arr = array();
foreach($companies as $key=>$r){
    $arr[] = $r->company_name;
}

$companies_str = implode("|",$arr); // return string 

 ?>

  <script>

  $( function() {
    var comp_str = "<?= $companies_str ?>";
    var availableTags = comp_str.split("|");
    $( "#tags" ).autocomplete({
     source: availableTags,
      minLength: 3      
    });
  } );
  </script>


@if(!empty($data))
<div class="table-responsive-sm">
<table class="table table-bordered table table-striped table table-sm">
    
   <tr>        
    <th>CIN</th>
    <td><?php echo $data['corporate_identification_number']; ?></td><br>
    </tr>
    
    <tr><th>Company Name</th><td><?php echo $data['company_name']; ?></td></tr>
    <tr><th>Company Status</th><td><?php echo $data['company_status']; ?></td></tr>
    <tr><th>Company Class</th><td><?php echo $data['company_class']; ?></td></tr>
    <tr><th>Company Category</th><td><?php echo $data['company_category']; ?></td></tr>
    <tr><th>company_sub_category</th><td><?php echo $data['company_sub_category']; ?></td></tr>
    <tr><th>Date of Incorporation</th><td><?php echo $data['date_of_registration']; ?></td></tr>
    <tr><th>Registration State</th><td><?php echo $data['registered_state']; ?></td></tr>
    <tr><th>Authorised Capital(Rs)</th><td><?php echo $data['authorized_cap']; ?></tr>
    <tr><th>Paid up Capital(Rs)</th><td><?php echo $data['paidup_capital']; ?></tr>
    <tr><th>Industrial Class</th><td><?php echo $data['principal_business_activity_as_per_cin']; ?></td></tr>
    <tr><th>Registered Address</th><td><?php echo $data['registered_office_address']; ?></td></tr>
    <tr><th>principal_business_activity_as_per_cin</th><td><?php echo $data['registrar_of_companies']; ?></td></tr>
    <tr><th>ROC Code</th><td><?php echo $data['registrar_of_companies']; ?></td></tr>
    <tr><th>Email Id</th><td><?php echo $data['email_addr']; ?></td></tr>
  
    <tr><th>latest_year_ar</th><td>
@if($data['latest_year_ar'] != 'NA')
    {{ \Carbon\Carbon::parse($data['latest_year_ar'])->format('d/m/Y')}}
@else
    {{$data['latest_year_ar']}}
@endif
    </td></tr>
    <tr><th>latest_year_bs</th><td> 
@if($data['latest_year_ar'] != 'NA')
    {{ \Carbon\Carbon::parse($data['latest_year_bs'])->format('d/m/Y')}}
@else
    {{$data['latest_year_bs']}}
@endif

</td></tr>

</table>
</div>
@else
Record Not Found
@endif
@endsection  



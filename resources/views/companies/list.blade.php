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
    

<div style="overflow: scroll;width: 100%;padding: 10px;">  
<table cellpadding="1" cellpadding="1" border="1">
   <tr>
        
<th>corporate_identification_number</th>
<th>company_name</th>
<th>company_status</th>
<th>company_class</th>
<th>company_category</th>
<th>company_sub_category</th>
<th>date_of_registration</th>
<th>registered_state</th>
<th>authorized_cap</th>
<th>paidup_capital</th>
<th>industrial_class</th>
<th>principal_business_activity_as_per_cin</th>
<th>registered_office_address</th>
<th>registrar_of_companies</th>
<th>email_addr</th>
<th>latest_year_ar</th>
<th>latest_year_bs</th>
</tr>
<tbody>
    <?php foreach ($data as $key => $row) {
        // code...
     ?>
    <tr>    
        <td><?= $row['id'] ?></td>
   
    <td><?php echo $row['corporate_identification_number']; ?></td>
    <td><?php echo $row['company_name']; ?></td>
    <td><?php echo $row['company_status']; ?></td>
    <td><?php echo $row['company_class']; ?></td>
    <td><?php echo $row['company_category']; ?></td>
    <td><?php echo $row['company_sub_category']; ?></td>
    <td><?php echo $row['date_of_registration']; ?></td>
    <td><?php echo $row['registered_state']; ?></td>
    <td><?php echo $row['authorized_cap']; ?></td>
    <td><?php echo $row['paidup_capital']; ?></td>
    <td><?php echo $row['industrial_class']; ?></td>
    <td><?php echo $row['principal_business_activity_as_per_cin']; ?></td>
    <td><?php echo $row['registered_office_address']; ?></td>
    <td><?php echo $row['registrar_of_companies']; ?></td>
    <td><?php echo $row['email_addr']; ?></td>
    <td><?php echo $row['latest_year_ar']; ?></td>
    <td><?php echo $row['latest_year_bs']; ?></td>
    </td>
</td>
    </tr>
    <?php } ?>
    </tbody> 
</table>    
</div> 
@endsection  



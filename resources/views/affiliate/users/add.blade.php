@extends('layouts.dashboard', ['title'=>'Dashboard', 'module'=>'Users'])

@section('body')
	
	       <div class="card-body">
@include('alert.message')      

<a href="{{ url('msg') }}">get Error msg</a>
@if($errors->any())
    <h4>{{$errors->first()}}</h4>
@endif
                {!! Form::open(array('url' => 'agents/add','method'=>'POST',  'enctype'=>'multipart/form-data' )) !!} 
                  <div class="row col-md-12">
                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>First Name</label>
                         {!! Form::text('first_name', null, array('placeholder' => 'Enter First Name', 'class' => 'form-control', 'id'=>'first_name'  )) !!}                          
                      </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Last Name</label>
                         {!! Form::text('last_name', null, array('placeholder' => 'Enter Last Name', 'class' => 'form-control', 'id'=>'last_name')) !!}                          
                      </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Gender</label>
                           {!! Form::select('gender', Helper::gender_() , null, array('class' => 'form-control', 'id'=>'gender'  ) ) !!}
                      </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Marital Status</label>
                           {!! Form::select('marital_status', Helper::maritalStatus() , null, array('class' => 'form-control', 'id'=>'marital_status'  ) ) !!}
                      </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Email</label>
                         {!! Form::text('email', null, array('placeholder' => 'Enter Email', 'class' => 'form-control', 'id'=>'email')) !!}                          
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Mobile</label>
                         {!! Form::text('mobile', null, array('placeholder' => 'Enter Mobile', 'class' => 'form-control', 'id'=>'mobile')) !!}                          
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Upload Agent Profile Image</label>
                         <input type="file" name="agent_profile_image" id="agent_profile_image" class="form-control">
                        <img src="{{ asset('img/no-image.jpg') }}" id="view_agent_profile_image" class="doc-image">                         
                      </div>
                    </div>
                </div>
    
             
                <div class="row gap-with-border"></div>

                    <div class="row col-md-12">

                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Upload PAN Image</label>
                         <input type="file" name="pan_image" id="pan_image" class="form-control">
                         <img src="{{ asset('img/no-image.jpg') }}" id="view_pan_image" class="doc-image">
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>PAN Card No.</label>
                         {!! Form::text('pan_card_no', null, array('placeholder' => 'Enter PAN Card No.', 'class' => 'form-control', 'id'=>'pan_card_no')) !!}                          
                      </div>
                    </div>

                 
                  <div class="col-md-3 col-sm-6">
                     <div class="form-group">
                      <label>PAN DOB (dd/mm/yyyy)</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input name="pan_dob" type="text" class="form-control datetimepicker-input" placeholder="Enter PAN DOB" id="pan_dob" data-target="#reservationdate"  />
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
              </div>

                  </div>
<div class="row gap-with-border"></div>
                 <div class="row col-md-12">

                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Upload Aadhar Front Image</label>
                         <input type="file" name="aadhar_front_image" id="aadhar_front_image" class="form-control">
                         <img src="{{ asset('img/no-image.jpg') }}" id="view_aadhar_front_image" class="doc-image">    
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Upload Aadhar Back Image</label>
                          <input type="file" name="aadhar_back_image" id="aadhar_back_image" class="form-control">
                         <img src="{{ asset('img/no-image.jpg') }}" id="view_aadhar_back_image" class="doc-image">   
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Aadhar Card</label>
                         {!! Form::text('aadhar_card_no', null, array('placeholder' => '', 'class' => 'form-control', 'id'=>'aadhar_card_no')) !!}                          
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Aadhar Address</label>
                         {!! Form::textarea('aadhar_address', null, array('placeholder' => 'Enter Aadhar Address', 'class' => 'form-control', 'id'=>'aadhar_address')) !!}                          
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Aadhar PIN</label>
                         {!! Form::text('aadhar_pin', null, array('placeholder' => 'Enter Aadhar PIN', 'class' => 'form-control', 'id'=>'aadhar_pin')) !!}                          
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Aadhar City</label>
                         {!! Form::text('aadhar_city', null, array('placeholder' => 'Enter Aadhar City', 'class' => 'form-control', 'id'=>'aadhar_city')) !!}                          
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Aadhar State</label>
                         {!! Form::text('aadhar_state', null, array('placeholder' => 'Enter Aadhar State', 'class' => 'form-control', 'id'=>'aadhar_state')) !!}                          
                      </div>
                    </div>

                  </div>
<div class="row gap-with-border"></div>
                  <div class="row col-md-12">


                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Bank Holder Name</label>
                         {!! Form::text('bank_account_holder_name', null, array('placeholder' => 'Enter Bank Holder Name', 'class' => 'form-control', 'id'=>'bank_account_holder_name')) !!}                          
                      </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Bank Name</label>
                          {!! Form::select('bank_name', Helper::getBanks() , null, array('class' => 'form-control')) !!}
                      </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Bank Account No.</label>
                         {!! Form::text('bank_account_no', null, array('placeholder' => 'Enter Bank Account No.', 'class' => 'form-control', 'id'=>'bank_account_no')) !!}                          
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>IFSC CODE</label>
                         {!! Form::text('bank_ifsc_code', null, array('placeholder' => 'Enter IFSC CODE', 'class' => 'form-control', 'id'=>'bank_ifsc_code')) !!}                          
                      </div>
                    </div>

                    
                    <div class="col-md-3 col-sm-6">
                      <div class="form-group" >
                        <label>Upload Cancelled Cheque Image</label>
                          <input type="file" name="cancelled_cheque_image" id="cancelled_cheque_image" class="form-control">
                         <img src="{{ asset('img/no-image.jpg') }}" id="view_cancelled_cheque_image" class="_doc-image" style="margin-top:10px;">                             
                      </div>
                    </div>

                  </div>

			<div class="row gap-with-border"></div>
                <div class="col-md-12 text-center">                           
                    <button type="submit" class="btn btn-primary">Submit </button>
               </div>

                   {!! Form::close() !!}
            </div>

@endsection


@section('script') 

<style type="text/css">
  .doc-image{
    max-width: 95%;
    margin-top: 10px;
  }
</style>


<script>
 //Date picker
    $('#reservationdate').datetimepicker({
       // format: 'L'
          format: 'DD/MM/YYYY'
    });



// for pan view
$(function(){
  $('#agent_profile_image').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
     {
        var reader = new FileReader();
        reader.onload = function (e) {
           $('#view_agent_profile_image').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    
  });
});

// for pan view
$(function(){
  $('#pan_image').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
     {
        var reader = new FileReader();
        reader.onload = function (e) {
           $('#view_pan_image').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    
  });

});

// for pan view
$(function(){
  $('#aadhar_front_image').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
     {
        var reader = new FileReader();
        reader.onload = function (e) {
           $('#view_aadhar_front_image').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    
  });

});

// for pan view
$(function(){
  $('#aadhar_back_image').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
     {
        var reader = new FileReader();
        reader.onload = function (e) {
           $('#view_aadhar_back_image').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    
  });

});

// for pan view
$(function(){
  $('#cancelled_cheque_image').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
     {
        var reader = new FileReader();
        reader.onload = function (e) {
           $('#view_cancelled_cheque_image').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    
  });
});


// for arn view
$(function(){
  $('#euin_image').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
     {
        var reader = new FileReader();
        reader.onload = function (e) {
           $('#view_euin_image').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    
  });
});

</script>

@endsection


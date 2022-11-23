<br>
<div class="container-fluid">
@if (count($errors) > 0)
    <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">×</span>
        </button>
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">×</span>
        </button>
       <strong>Success!</strong> {{ session()->get('message') }}
    </div>
@endif  

@if(session()->has('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">×</span>
        </button>
       <strong>Error!</strong> {{ session()->get('error') }}
    </div>
@endif  
</div>


@if($message = Session::get('success'))
 <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">×</span>
        </button>
       <strong>Success!</strong> {{ $message }}
    </div>
     
@endif


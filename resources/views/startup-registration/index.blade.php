@extends('layouts.inner-page')

@section('page-title')
	{{ __('One Person Company') }}
@endsection

@section('breadcrumb')
	<h1 class="title">{{ $parent_category_name }}</h1>
        <ul class="breadcrumb"><!-- 
	        <li>
	            <a href="{{ url('/') }}">Home</a>
	        </li> -->
	        <li>
	            <a href="{{ url('/') }}">Home</a>
	        </li>
	        <li>
	            {{ $parent_category_name }}
	        </li> 
    </ul>
@endsection

@section('body')
 	<div class="contener">
 		<div class="row"> 
 			<?php 
 			$rows = json_decode($data, true);

 			foreach ($rows as $key => $row) {
 				echo '<div class="row service-contener">
 				<div class="col-md-12"><h3 class="service-titile">' . $row['name'] .'</h3></div>';
 				$id = $row['id'];
 				$R1 = $row[$id];
 				foreach ($R1 as $k => $v) {
 					$name = $v['name'] ; #. ' (' . $v['id'] . ')';
 					$url = url('/startup-registration/business-registrations/'.$v['slug']);
 					$result_data = json_decode($v['result_data']);
 					$other = "<b>Rs. </b>" . $v['price'] . '<br>
 								'.implode(" + ", $result_data).' <br><br> ';
 					echo \App\Models\Html::service( [ 
 						'title'=> $name , 
 						'url' => $url ,
 						'other' => $other
 					] );
 				}
 				echo "</div>";
 			}
 			?>
 		</div>	
 	</div>
 	<style type="text/css">
 		service-contener {
		    margin-bottom: 10px;
		    border-bottom: 1px solid #cccc;
		}
		h3.service-titile {
		    padding: 20px;
		    text-align: center;
		    color: #2b50e6;
		}

		.service-contener .how-item {
	 		   min-height: 400px;
			}
 	</style>
@endsection  



@extends('layouts.inner-page')

@section('page-title')
	{{ __('One Person Company') }}
@endsection

@section('breadcrumb')
	<h1 class="title">{{ __('One Person Company') }}</h1>
        <ul class="breadcrumb">
	        <li>
	            <a href="{{ url('/') }}">Home</a>
	        </li>
	        <li>
	            <a href="#">STARTUP REGISTRATION</a>
	        </li>
	        <li>
	            <a href="#">Business Registrations</a>
	        </li> 
	        <li>
	            One Person Company
	        </li> 
    </ul>
@endsection

@section('body')

<div class="row">	
 	<div class="side-header oh col-md-3 header-bottom" style="z-index: -0.5;overflow: scroll;border: 1px solid #ccc;top:90px;"> 
    	<div class="site-header-container" style="width: 90%;height:700px;"> 
	        <ul class="dashboard-menu">
	        	<?php for($i = 1 ; $i<=10; $i++){ ?>
	            <li>
	                <a href="#data_{{$i}}" class="active"><i class="flaticon-man"></i>DATA {{ $i }}</a>
	            </li>
	        	<?php } ?>
	            <li>
	                <a href="operations.html"  class="active"><i class="flaticon-coin"></i>Operations</a>
	            </li>
	            <li>
	                <a href="deposit.html"><i class="flaticon-interest"></i>Deposits</a>
	            </li>
	            <li>
	                <a href="withdraw.html"><i class="flaticon-atm"></i>Withdraw</a>
	            </li>
	            <li>
	                <a href="fund-transfer.html"><i class="flaticon-exchange"></i>Fund Transfer </a>
	            </li>
	            <li>
	                <a href="partners.html"><i class="flaticon-deal"></i>Partners</a>
	            </li>
	            <li>
	                <a href="setting.html"><i class="flaticon-gears"></i>Settings</a>
	            </li>
	            <li>
	                <a href="notification.html"><i class="flaticon-bell"></i>Notifications</a>
	            </li>
	            <li>
	                <a href="ticket.html"><i class="flaticon-sms"></i>Tickets</a>
	            </li>
	            <li>
	                <a href="promotional-metarials.html"><i class="flaticon-deal"></i>Promotional</a>
	            </li> 
	        </ul>
            </div>
	</div>
	<div class="col-md-3">-</div>
    <div class="col-md-9">
    	<?php for($i =1 ; $i<=10; $i++){ ?>
    	<div style="min-height: 400px;padding-top: 100px; margin-top: 80px;" id="data_{{ $i }}">
			<h3 class="main-title">Data {{ $i }} Content ...</h3>   
			<div>
				<p>ABOUT HYIPLAND
			HYIPLAND is an investment company, whose team is working on making money from the volatility of cryptocurrencies and offer great returns to our clients. 
			WHY SHOULD YOU INVEST
			We are worldwide investment company who are committed to the principle of revenue maximization and reduction of the financial risks at investing.</p>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
@endsection  



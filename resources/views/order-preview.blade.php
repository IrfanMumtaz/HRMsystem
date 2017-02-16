@extends('layouts.home')
@section('brdCrmbTitle', 'Order Summary')
@section('brdCrmbLink', 'Dashboard / Order Summary')
@section('section')



	@foreach($details as $det)         
	<div class="container-fluid">
        <div id="box">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title">Order Preview</h1>
                </div>
            </div>
            <div class="row line">
                <div class="col-md-7 ">
                    <ul class="list-group">
                        <li class="list-group-item">{{ Auth::user()->name }}</li>
                        <li class="list-group-item">{{ Auth::user()->email }}</li>
                        <li class="list-group-item">{{ Auth::user()->phone }}</li>
                    </ul>
                </div>

                <div class="col-md-5 ">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Order ID:</b> {{$det->orderID}}</li>
                        <li class="list-group-item"><b>Order Date:</b> {{$det->created_at}}</li>
                        <li class="list-group-item"><b>Assign:</b> -</li>
                    </ul>
                </div>
            </div>
        
	        <div class="row line">
	            <div class="col-md-12">
	            	<ul>
	            		<li class="list-group-item"><b>Order Details:</b></li>
		                <li class="list-group-item"><b>Writing Services:</b> {{$det->writingServices}}</li>
		                <li class="list-group-item"><b>Education level:</b> {{$det->educationLevel}}</li>
		                <li class="list-group-item"><b>Service level:</b> {{$det->serviceLevel}}</li>
		                <li class="list-group-item"><b>Deadline:</b> {{$det->deadline}}</li>
		                <li class="list-group-item"><b>Number Of Pages:</b> {{$det->numberOfPages}}</li>
		                <li class="list-group-item"><b>Price Per Page:</b> {{$det->pricePerPage}} GBP</li>
		                <li class="list-group-item"><b>Total:</b> {{$det->totalAmount}} GBP</li>
	            	</ul>
	                
	            </div>
	        </div>

	        <div class="row line">
	        	<div class="col-md-12 col-sm-12">
	        		<div class="list-group-item">
	        			<h3>Topic Details</h3>
	        			<p>{{$det->topicTitle}}</p>
	        		</div>
	        		
	        	</div>
	        </div>
	        <div class="clearfix"></div>
	        <div class="row line">
	        	<div class="col-md-12 col-sm-12">
	        		<div class="list-group-item">	        			
		        		<h3>Further Details</h3>
		        		<p>{{$det->furtherDetails}}</p>
	        		</div>
	        	</div>
	        </div>  
	        <br />
	        <div class="row line">
	            <div class="col-md-12">
	            	<ul>
	            		<li class="list-group-item"><b>File Attachment:</b> </li>
	            		<li class="list-group-item">{{$det->fileAttach}}</li>
	            	</ul> 
	            </div>
	            <div class="col-md-12 end">
	            	<ul>
		                <li class="list-group-item"><b>Total:</b> {{$det->totalAmount}} GBP</li>
		                <li class="list-group-item"><b>Discount:</b> 05 %</li>
		                <li class="list-group-item"><b class="discount">Amount after Discount:</b> <span class="discount">{{$det->totalAmount * 0.95}} GBP</span></li>
	            	</ul>
	            	<form id="paypal-form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			            <input name="cmd" value="_xclick" type="hidden"><br>
			            <input name="business" value="nazishlutfi@hotmail.com" type="hidden"><br>
			            <input name="add" value="1" type="hidden">
			            <input name="item_name" value="Research" type="hidden">
			            <input name="item_number" value="{{$det->orderID}}" type="hidden">
			            <input name="amount" value="{{$det->totalAmount * 0.95}}" type="hidden"><br>
			            <input name="currency_code" value="GBP" type="hidden">
			            <button class="btn btn-primary button-blue calculate-price checkout-btn" type="submit">Checkout Paypal</button><br>
			            <img class="pp-image" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" alt="PayPal Acceptance Mark" height="70" border="0">
			        </form>
	            </div>
	        </div>
        </div>
    </div>  
    @endforeach
@stop

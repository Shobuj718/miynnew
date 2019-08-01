@extends('admin.master')

@section('page_header')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Settings</h5>
                    <p class="m-b-0">Welcome to miyn settings</p>

                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('main_content')
<div class="page-body">
    <div class="row">
		<div class="col-xl-4 col-md-6">
		    <a href="{{ route('booking.client') }}">
		        <div class="card">
		            <div class="card-block">
		                <div class="row align-items-center m-l-0">
		                    <div class="col-auto">
		                    	<i class="fa fa-user f-30 text-c-red"></i>
		                    </div>
		                    <div class="col-auto">
		                        <h4 class="text-muted m-b-10">APPOINTMENTS</h4>
		                        <h6>View your appointments</h6>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </a>
	    </div>
	    <div class="col-xl-4 col-md-6">
	    	<a href="{{ route('client.services.all') }}">
	        <div class="card">
	            <div class="card-block">
	                <div class="row align-items-center m-l-0">
	                    <div class="col-auto">
	                        <i class="fa fa-rocket f-30 text-c-green"></i>
	                    </div>
	                    <div class="col-auto">
	                        <h4 class="text-muted m-b-10">SERVICES</h4>
	                        <h6>View your services </h6>
	                    </div>
	                </div>
	            </div>
	        </div>
	    	</a>
	    </div>
		<div class="col-xl-4 col-md-6">
			<a href="#">
	        <div class="card">
	            <div class="card-block">
	                <div class="row align-items-center m-l-0">
	                    <div class="col-auto">
	                        <i class="fa fa-book f-30 text-c-purple"></i>
	                    </div>
	                    <div class="col-auto">
	                        <h4 class="text-muted m-b-10">BUSINESS</h4>
	                        <h6>Sync your business</h6>
	                    </div>
	                </div>
	            </div>
	        </div>
	    	</a>
	    </div>
	</div>

	<!-- <div class="row">

		<div class="col-xl-4 col-md-6">
			<a href="#">
	        <div class="card">
	            <div class="card-block">
	                <div class="row align-items-center m-l-0">
	                    <div class="col-auto">
	                        <i class="fa fa-book f-30 text-c-purple"></i>
	                    </div>
	                    <div class="col-auto">
	                        <h2 class="text-muted m-b-10">Staff</h2>
	                        <h6>3 staff members</h6>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </a>
	    </div>
	    <div class="col-xl-4 col-md-6">
	    	<a href="{{ route('inbox') }}">
	        <div class="card">
	            <div class="card-block">
	                <div class="row align-items-center m-l-0">
	                    <div class="col-auto">
	                        <i class="fa fa-rocket f-30 text-c-green"></i>
	                    </div>
	                    <div class="col-auto">
	                        <h2 class="text-muted m-b-10">Inbox</h2>
	                        <h6>Sync your inbox</h6>
	                    </div>
	                </div>
	            </div>
	        </div>
	    	</a>
	    </div>
	    <div class="col-xl-4 col-md-6">
	    <a href="{{ route('client.portal') }}">
	        <div class="card">
	            <div class="card-block">
	                <div class="row align-items-center m-l-0">
	                    <div class="col-auto">
	                        <i class="fa fa-user f-30 text-c-red"></i>
	                    </div>
	                        <h2 class="text-muted m-b-10">Client Portal</h5>
	                        <h6>Show your client portal</h6>
	                </div>
	            </div>
	        </div>
	    </a>
	    </div>    
	</div>
	<div class="row">

		<div class="col-xl-4 col-md-6">
			<a href="{{ route('website.widget') }}">
	        <div class="card">
	            <div class="card-block">
	                <div class="row align-items-center m-l-0">
	                    <div class="col-auto">
	                        <i class="fa fa-book f-30 text-c-purple"></i>
	                    </div>
	                    <div class="col-auto">
	                        <h2 class="text-muted m-b-10">Widget</h2>
	                        <h6>Add Website Widget</h6>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </a>
	    </div>
	    <div class="col-xl-4 col-md-6">
	    	<a href="#">
	        <div class="card">
	            <div class="card-block">
	                <div class="row align-items-center m-l-0">
	                    <div class="col-auto">
	                        <i class="fa fa-rocket f-30 text-c-green"></i>
	                    </div>
	                    <div class="col-auto">
	                        <h2 class="text-muted m-b-10">Payments</h2>
	                        <h6>Sync your payments</h6>
	                    </div>
	                </div>
	            </div>
	        </div>
	    	</a>
	    </div>
	    <div class="col-xl-4 col-md-6">
	    <a href="#">
	        <div class="card">
	            <div class="card-block">
	                <div class="row align-items-center m-l-0">
	                    <div class="col-auto">
	                        <i class="fa fa-user f-30 text-c-red"></i>
	                    </div>
	                        <h2 class="text-muted m-b-10">My Calendar</h5>
	                        <h6>Sync your calendar</h6>
	                </div>
	            </div>
	        </div>
	    </a>
	    </div>   
	</div> -->
</div>
    

@endsection
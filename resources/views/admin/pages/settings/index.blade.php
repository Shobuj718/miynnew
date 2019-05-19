@extends('admin.master')

@section('page_header')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Settings</h5>
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
	        <div class="card">
	            <div class="card-block">
	                <div class="row align-items-center m-l-0">
	                    <div class="col-auto">
	                        <i class="fa fa-book f-30 text-c-purple"></i>
	                    </div>
	                    <div class="col-auto">
	                        <h2 class="text-muted m-b-10">Business Info</h2>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="col-xl-4 col-md-6">
	        <div class="card">
	            <div class="card-block">
	                <div class="row align-items-center m-l-0">
	                    <div class="col-auto">
	                        <i class="fa fa-rocket f-30 text-c-green"></i>
	                    </div>
	                    <div class="col-auto">
	                        <h2 class="text-muted m-b-10">Sevices</h2>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="col-xl-4 col-md-6">
	    <a href="{{ route('availabilityAndCalendar') }}">
	        <div class="card">
	            <div class="card-block">
	                <div class="row align-items-center m-l-0">
	                    <div class="col-auto">
	                        <i class="fa fa-user f-30 text-c-red"></i>
	                    </div>
	                        <h5 class="text-muted m-b-10">Availability & Calendar</h5>
	                        <h6>Sync your calendar to keep your schedule update</h6>
	                </div>
	            </div>
	        </div>
	    </a>
	    </div>
	    
	    <!-- customar project  end -->
	</div>
</div>
    

@endsection
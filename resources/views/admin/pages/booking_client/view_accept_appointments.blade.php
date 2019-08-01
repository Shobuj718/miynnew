@extends('admin.master')
@section('styles')

<link rel="stylesheet" href="{{asset('/files/bower_components/select2/css/select2.min.css')}}" />
<!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/multiselect/css/multi-select.css')}}" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/css/style.css')}}">
@endsection
@section('page_header')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">View Appointments</h5>
                    <p class="m-b-0">Welcome to miyn dashboard</p>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
@section('main_content')

<div class="page-body">
   

<!-- Basic Form Inputs card start -->
    <div class="card">
        <div class="card-header">
        @if (session('success'))
          <div class="alert alert-success background-success">
                <strong>{{ session('success')}}</strong>
           </div>
        @endif
        @if (session('error'))
           <div class="alert alert-danger background-danger">
               {{ session('error')}}
           </div>
        @endif
            <div class="card-header">
                <h5>View Appointments</h5>
            </div>
        </div>
        <div class="card-block">
            <form action="{{route('appointments.confirmed', $booking->id)}}" method="POST">
                @csrf          
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                        value="{{ $booking->first_name }}" name="first_name" id="first_name" readonly>
                        <input type="hidden" name="id" value="{{ $booking->id }}">
                    </div>
                </div>    
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                        value="{{ $booking->phone }}" name="phone" id="phone" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                        value="{{ $booking->email }}" name="email" id="email" readonly>
                    </div>
                </div>
                
                <div class="dateTimeAccept">
                 <?php 
                 	/*foreach ($booking2 as $key => $value) {
                 		echo $key;
                 		dd($booking2);
                 	}*/
                 	//echo $date;
                  ?>
                  
               
                @foreach ($booking2 as $key => $value)
                    <div class="form-group row accept-date-time">
                        <label class="col-sm-2 col-form-label">Date & Time</label>
                        <div class="col-sm-10 dateTimeParent">
                            <!-- <input class="border-checkbox" type="checkbox" id="select_date" value="{{ $key }}" name="select_date"> -->
                            <input class="appDate" type="radio" name="select_date" value="{{$key}}" data-bv-field="member" required="">
                            <label class="border-checkbox-label" for="checkbox2">
                                
                                <?php 
                                    $new_date = new DateTime($key);
                                    //echo $date->format('d/m/Y');
                                    $key = $new_date->format('d/m/Y');
                                ?>
                                {{ $key }}  </label>
                                
                                @foreach($value as $data)
                                    <label>
                                       &nbsp;&nbsp; <input class="appTime" type="radio" name="select_time[]" value="{{$data}}" data-bv-field="member" required="">
                                        <i class="helper"></i>  {{$data}}
                                    </label>
                                @endforeach
                        </div>
                    </div>
                    
                    <!-- <div class="form-group row">
                        <label class="col-sm-2">Times</label>
                        <div class="col-sm-10">
                            <div class="form-radio">

    	                    	@foreach($value as $data)
    	                            <div class="radio radiofill radio-primary radio-inline">
    	                                <label>
    	                                    <input type="radio" name="select_time[]" value="{{$data}}" data-bv-field="member" required="">
    	                                    <i class="helper"></i> {{$data}}
    	                                </label>
    	                            </div>
                    			@endforeach
                            </div>
                            <span class="messages"></span>
                        </div>
                    </div> -->

                @endforeach
                <!-- <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Schedule Date</label>
                    <div class="col-sm-10">
                        <div class="input-group date" >
                            <input type="text" class="form-control" name="reschedule_date" id="datetimepicker">
                        </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Schedule Time</label>
                    <div class="col-sm-10">
                        <select class="js-example-basic-multiple-limit col-sm-12" multiple="multiple" name="reschedule_time[]" id="reschedule_time[]">
                            <option value="8:30 AM"> 8:30 AM</option>
                            <option value="8:50 AM"> 8:50 AM</option>   
                        </select>
                    </div>
                </div>-->
                </div>
                
                 <!--<div class="form-group row">
                    <label class="col-sm-2 col-form-label">Client Message</label>
                    <div class="col-sm-10">
                        <textarea rows="3" cols="3" class="form-control"
                        placeholder="Message" name="message2" id="message2" readonly="" >{{ $booking->message }}</textarea>
                    </div>
                </div>-->

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Message Send</label>
                    <div class="col-sm-10">
                        <textarea rows="3" cols="3" class="form-control"
                        placeholder="Message send to client" name="message" id="message" ></textarea>
                    </div>
                </div>
                 <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="confirmed" id="confirmed" class="form-control">
                            @if($booking->confirmed == 0)
                            <option value="0">Pending</option>
                            <option value="1">Confirmed</option>
                            @else
                            <option value="1">Confirmed</option>
                            <option value="0">Pending</option>
                            @endif
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-info pull-right"  type="submit" value="submit">Save</button>
                </div>
            </form>
            
        </div>
    </div>
<!-- Basic Form Inputs card end -->

</div>

@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('/files/bower_components/select2/js/select2.full.min.js')}}"></script>
<!-- Validation js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script type="text/javascript" src="{{asset('/files/assets/pages/form-validation/validate.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('/files/assets/pages/form-validation/form-validation.js')}}"></script>
<script src="{{asset('/files/assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('/files/assets/js/vertical/vertical-layout.min.js')}}"></script>
<script src="{{asset('/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/files/assets/js/script.js')}}"></script>
    

@endsection
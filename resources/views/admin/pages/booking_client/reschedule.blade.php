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
                    <h5 class="m-b-10">Booking Re-Schedule</h5>
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
            <h5>Re-schedule Booking</h5>
        </div>
        </div>
        <div class="card-block AppointForm">
            <form action="{{route('reschedule.confirmed')}}" method="POST">
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
                
                <!-- <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Selected Date & Time</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                        value="{{ $date }}" readonly>
                    </div>
                </div> -->
                 @foreach ($booking2 as $key => $value)
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Date & Time</label>
                        <div class="col-sm-10">
                            <!-- <input class="border-checkbox" type="checkbox" id="select_date" value="{{ $key }}" name="select_date"> -->
                            <input type="radio" name="select_date" value="{{$key}}" data-bv-field="member" disabled required="">
                            <label class="border-checkbox-label" for="checkbox2">
                                
                                <?php 
                                    $new_date = new DateTime($key);
                                    //echo $date->format('d/m/Y');
                                    $key = $new_date->format('d/m/Y');
                                ?>
                                {{ $key }} 
                                
                                </label>
                                
                                @foreach($value as $data)
                                    <label>
                                       &nbsp;&nbsp; <input type="radio" name="select_time[]" value="{{$data}}" data-bv-field="member" disabled required="">
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

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Re-Schedule Date</label>
                    <div class="col-sm-10">
                        <div class="input-group date" >
                            <input type="text" class="form-control" name="reschedule_date" placeholder="Select Date" id="datetimepicker" >
                        </div>
                    </div>
                </div>
                
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Re-Schedule Time</label>
                    <div class="col-sm-10">
                        <select class="js-example-basic-multiple-limit col-sm-12" multiple="multiple" name="reschedule_time[]" id="reschedule_time[]" >
                            <option value="8:00 AM"> 8:00 AM</option>
                            <option value="8:30 AM"> 8:30 AM</option>
                            <option value="9:00 AM"> 9:00 AM</option>
                            <option value="9:30 AM"> 9:30 AM</option>
                            <option value="10:00 AM"> 10:00 AM</option>
                            <option value="10:30 AM"> 10:30 AM</option>
                            <option value="11:00 AM"> 11:00 AM</option>
                            <option value="11:30 AM"> 11:30 AM</option>
                            <option value="12:00 PM"> 12:00 PM</option>
                            <option value="12:30 PM"> 12:30 PM</option>
                            <option value="1:00 PM"> 1:00 PM</option>
                            <option value="1:30 PM"> 1:30 PM</option>
                            <option value="2:00 PM"> 2:00 PM</option>
                            <option value="2:30 PM"> 2:30 PM</option>
                            <option value="3:00 PM"> 3:00 PM</option>
                            <option value="3:30 PM"> 3:30 PM</option>
                            <option value="4:00 PM"> 4:00 PM</option>
                            <option value="4:30 PM"> 4:30 PM</option>
                            <option value="5:00 PM"> 5:00 PM</option>   
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-10">
                        <textarea rows="5" cols="5" class="form-control"
                        placeholder="Message" name="message" id="message" >{{ $booking->message }}</textarea>
                    </div>
                </div>
                 <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="confirmed" id="confirmed" class="form-control">
                            @if($booking->confirmed == 0)
                            <option value="0">Pending</option>
                            <!--<option value="1">Confirmed</option>-->
                            @else
                            <option value="1">Confirmed</option>
                            <option value="0">Pending</option>
                            @endif
                        </select>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                  </div> -->
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
<!-- Multiselect js -->
<script type="text/javascript" src="{{asset('/files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js')}}">
</script>
<script type="text/javascript" src="{{asset('/files/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{asset('/files/assets/js/jquery.quicksearch.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('/files/assets/pages/advance-elements/select2-custom.js')}}"></script>

<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css"> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css"> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker-standalone.css"> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
    $(function () {
        //$('#datetimepicker').datetimepicker();
        $('#datetimepicker').datetimepicker({  
            minDate:new Date(),
            format: 'DD/MM/YYYY',
           // format: 'L',
        });
    });
</script>
    

@endsection
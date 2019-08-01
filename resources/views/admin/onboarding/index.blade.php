
@extends('admin.master')

@section('styles')
<link rel="stylesheet" href="{{ asset('/files/assets/pages/multi-step-sign-up/css/style.css')}}">

<link rel="stylesheet" href="{{asset('/multistep_form/css/form-elements.css')}}">
<link rel="stylesheet" href="{{asset('/files/bower_components/select2/css/select2.min.css')}}" />
<!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/multiselect/css/multi-select.css')}}" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/css/style.css')}}">
@endsection

@section('main_content')
<div class="page-body">
    <div class="row">
        
        <div class="col-md-10">
                <div class="page-header-title" style="text-align: center;">
                    <h2 class="text-center">Welcome to MIYN!</h2>
                    <h5 class="text-center">Grow your business, deliver great service and put your daily tasks on auto-pilot.</h5>
                    <a href="{{ url('/') }}" >Take Our Product Tour</a>
                </div>
                <hr>
            <!-- New ticket button card start -->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Color Progressbar card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Get Started by completing the following steps!</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <div class="progress">

                                            <?php if($business_profile_status == 1){
                                               $progressbar = 0;
                                               $progressbar += 20;
                                            }
                                            if($staff_status == 1){
                                                $progressbar += 20;
                                            }
                                            if($OnboardService == 1){
                                                $progressbar += 20;
                                            }
                                            ?>

                                            <div class="progress-bar progress-bar-striped progress-bar-success" role="progressbar" style='width:<?php echo "$progressbar"; ?>%' aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Color Progressbar card end -->
                    </div>
                </div>

            <!-- bug list card start -->
            <div class="card">
                <div class="card-header">
                    <h3>1. Lets get you on onboard</h3>
                    <p>Tell us more about your business so we can make the setup process quicker and customized for your needs. </p>

                    <div class="custom-control custom-radio">

                      <input type="radio" class="custom-control-input"  id="complete_business_info" 
                      <?php if($business_profile_status == 1){
                         echo 'checked';
                      }else{
                        echo '';
                      }
                      ?> name="complete_business_info">

                      <label class="custom-control-label" for="complete_business_info">Complete your business info</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" data-toggle="modal" data-target="#staff_modal" class="custom-control-input" 
                      <?php if($staff_status == 1){
                         echo 'checked';
                      }else{
                        echo '';
                      } ?>
                      id="set_staff_member" name="set_staff_member">
                      <label class="custom-control-label" for="set_staff_member">Add your staff members</label>
                    </div>


                </div>
                
            </div>

           <!--  <div class="card">
                <div class="card-header">
                    <h3>2. Calendar and Services</h3>
                    <p>MIYN help you stay on top of your game, whether your are home or on the go. Organize your schedule, keep team members in the know and accept booking 24/7. </p>

                    <div class="custom-control custom-radio">
                      <input type="radio" data-toggle="modal" data-target="#service_modal" class="custom-control-input"
                      <?php if($OnboardService == 1){
                         echo 'checked';
                      }else{
                        echo '';
                      } ?>
                      id="set_service_online_schedule" name="set_service_online_schedule">
                      <label class="custom-control-label" for="set_service_online_schedule">Set up your service menu and your online schedular</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="set_hours_sync_calendar" name="set_hours_sync_calendar">
                      <label class="custom-control-label" for="set_hours_sync_calendar"><a href="{{ route('availabilityAndCalendar') }}">Set your availability hours and sync your calendar</a></label>
                    </div>

                </div>
            </div> -->

            <div class="card">
                <div class="card-header">
                    <h3>3. Customize your client portal</h3>
                    <p>Be Available 24/7: Choose which actions you'd like your clients to be able to perform online: pay, book appointments, share documents, give directions and much more. </p>

                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="edit_client_portal" name="edit_client_portal">
                      <label class="custom-control-label" for="edit_client_portal"><a href="{{ route('client.portal') }}">Your client portal</a></label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="add_website_widget" name="add_website_widget">
                      <label class="custom-control-label" for="add_website_widget"><a href="#">Add widgets to your website</a></label>
                    </div>

                </div>
                
            </div>
            <h3>Want to get even more from your account</h3>

        </div>
        
        

    </div>
</div>
<!-- Page body end -->


    <div class="modal fade" id="staff_modal" data-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Assign Services to Staff</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Basic Inputs Validation start -->
                    <div class="card">
                        <div class="card-block">
                            <form id="add_staff_form" method="post" action="/" novalidate>
                                
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Staff Name</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="staff_name" id="staff_name" onchange="get_staff_email();">
                                            <option value="">Select Staff Name</option>
                                            @if($onboardStaff === null)
                                            <option value="">Please create your staff first!</option>
                                            @else
                                                @foreach($onboardStaff as $staffname)
                                                    <option value="{{ $staffname->id }}">{{ $staffname->onboard_staff_name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <span class="staff_name_error"></span>
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Staff Email</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="staff_email" id="staff_email">
                                            <option value="">Select Staff Email</option>
                                            <!-- <input type="text" name="staff_email" placeholder="Staff Email..." readonly="" class="form-control" id="staff_email"> -->
                                        </select>
                                        <span class="staff_email_error"></span>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Staff Role</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="staff_role" id="staff_role">
                                        	<option value="user">User</option>
                                        	<option value="editor">Editor</option>
                                        	<option value="writter">Writter</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Will provide the followin services</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="staff_provide_service" id="staff_provide_service">
                                        	<option value="">Selecte Services</option>
                                        	@foreach($onboardService2 as $value)
                                                <option value="{{ $value->id }}">{{ $value->service_name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="error_staff_provide_service"></p>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Will provide the followin services</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-responsive col-sm-12 staff_provide_service" name="staff_provide_service" id="staff_provide_service" multiple="multiple">
                                            @foreach($onboardService2 as $value)
                                                <option value="{{ $value->id }}">{{ $value->service_name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="error_staff_provide_service"></span>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="send_email_with_inst" id="send_email_with_inst" value="1"> Send email invitation with set password instruction
                                            </label>
                                        </div>
                                        
                                        <span class="messages"></span>
                                    </div>
                                </div> -->
                                <!-- <div class="form-group row">
                                    <label class="col-sm-2"></label>
                                    <div class="col-sm-10">
                                    	<button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Cancel</button>
                                        <button type="submit" onclick="submitContactForm()" class="btn btn-primary m-b-0">Add</button>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                        <div class="card-block">                               
                        </div>
                    </div>
                    <!-- Basic Inputs Validation end -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <button type="button" onclick="submitContactForm()" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                </div>
            </div>
        </div>
    </div>

                
    @include('admin.onboarding.service_modal_form')       



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

<?php
    if($staff_status == 0){
        echo '<script type="text/javascript">
            $(document).ready(function(){
                $("#staff_modal").modal("show");
            });

            </script>';
    }



?>

<script src="{{ asset('/files/assets/pages/multi-step-sign-up/js/main.js')}}"></script>
<script>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    console.log(CSRF_TOKEN);

    function get_staff_email(){
    var staff_name = $('#staff_name').val();
    console.log(staff_name)

    if(staff_name != ''){
        $.ajax({
            url : '{{url('getOnboardStaffEmail')}}',
            type: 'get',
            data: {'staff_name':staff_name},
            success: function (data) {
                console.log(data);
                  //for (var i = 0; i < data.length; i ++){
                  staff_email = '<option value="'+data.id+'">'+data.onboard_staff_email+'</option>'
                  //staff_email = ' <input type="text" name="staff_email" value="'+data.onboard_staff_email+'"  readonly="" class="form-control" id="staff_email">'
                   // }
                   document.getElementById("staff_email").innerHTML = staff_email;
            }
        });
    }
    /*var profession_id = $('#profession_id').val();
    console.log('profession id here');
    console.log(profession_id);*/
}

function submitContactForm(){



	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    console.log(CSRF_TOKEN);
	var staff_name            = $('#staff_name').val();
	var staff_email           = $('#staff_email').val();
    var staff_role            = $('#staff_role').val();

    var staff_provide_service = $('#staff_provide_service').val();
	var send_email_with_inst  = $('#send_email_with_inst:checked').val();

    //var staff_provide_service = JSON.encode(staff_provide_service);
    console.log(staff_provide_service);

	if(staff_name.trim() == '' ){
        //alert('Please enter your phone_number.');
        $('#staff_name').focus();
         $('.staff_name_error').html('<span style="color:red;">Please select staff name</p>');
        return false;

    }
	else if(staff_email.trim() == '' ){
        //alert('Please enter your staff email.');
        $('#staff_email').focus();
         $('.staff_email_error').html('<span style="color:red;">Please enter staff email</p>');
        return false;

    }

    else if(staff_provide_service == '' ){
        $('#staff_provide_service').focus();
         $('.error_staff_provide_service').html('<span style="color:red;">Please select at least one service </p>');
        return false;
    }

	else{
		//alert('hhhh');
		
		$.ajax({
                type:'POST',
                url:'{{url("/staff")}}',
                data:{_token:CSRF_TOKEN, staff_name:staff_name, staff_email:staff_email, staff_role:staff_role, staff_provide_service:staff_provide_service, send_email_with_inst:send_email_with_inst  },
                dataType:'json',
                success:function(data){
                    console.log(data.success);
                    console.log(data.message);
                    console.log(data.value);
                    if(data.success == 'ok'){
                        $('#staff_modal').modal('hide');
                        console.log('ok, success');
                    }else{
                        console.log('error return');
                    }
                   
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                } 
            });
        }
	}
</script>


@endsection
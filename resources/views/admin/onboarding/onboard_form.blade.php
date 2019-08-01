
@extends('admin.master')

@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="{{asset('/multistep_form/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('/multistep_form/css/form-elements.css')}}">
<link rel="stylesheet" href="{{asset('/multistep_form/css/style.css')}}">
<link rel="stylesheet" href="{{asset('/files/bower_components/select2/css/select2.min.css')}}" />
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/multiselect/css/multi-select.css')}}" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/css/style.css')}}">


@endsection

@section('main_content')
@include('admin.onboarding.showModal')
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
            <div class="card">
                <div class="card-block">
                    <div class="issue-list-progress">
                        <h6>You have completed 20%, keep on going!</h6>
                        <div class="issue-progress">
                            <div class="progress">
                                <span class="issue-text1 txt-primary"></span>
                                <div class="issue-bar1 bg-primary"></div>
                            </div>
                            <!-- end of progress -->
                        </div>
                        <!-- end of issue progress -->
                    </div>
                </div>
            </div>

            <!-- bug list card start -->
            <div class="card">
                <div class="card-header">
                    <h3>1. Lets get you on onboard</h3>
                    <p>Tell us more about your business so we can make the setup process quicker and customized for your needs. </p>

                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="complete_business_info" name="complete_business_info">
                      <label class="custom-control-label" for="complete_business_info">Complete your business info</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" data-toggle="modal" data-target="#staff_modal" class="custom-control-input" id="set_staff_member" name="set_staff_member">
                      <label class="custom-control-label" for="set_staff_member">Add your staff members</label>
                    </div>

                </div>
                
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>2. Calendar and Services</h3>
                    <p>MIYN help you stay on top of your game, whether your are home or on the go. Organize your schedule, keep team members in the know and accept booking 24/7. </p>

                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="set_service_online_schedule" name="set_service_online_schedule">
                      <label class="custom-control-label" for="set_service_online_schedule">Set up your service menu and your online schedular</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="set_hours_sync_calendar" name="set_hours_sync_calendar">
                      <label class="custom-control-label" for="set_hours_sync_calendar">Set your availability hours and sync your calendar</label>
                    </div>

                </div>
                
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>3. Customize your client portal</h3>
                    <p>Be Available 24/7: Choose which actions you'd like your clients to be able to perform online: pay, book appointments, share documents, give directions and much more. </p>

                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="edit_client_portal" name="edit_client_portal">
                      <label class="custom-control-label" for="edit_client_portal">Edit your client portal</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="add_website_widget" name="add_website_widget">
                      <label class="custom-control-label" for="add_website_widget">Add widgets to your website</label>
                    </div>

                </div>
                
            </div>
            <h3>Want to get even more from your account</h3>

        </div>
        
        

    </div>
</div>
<!-- Page body end -->


                
    
    <!-- Modal large-->
    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#staff_modal">Website widget</button>

    <div class="modal fade" id="staff_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Staff Account</h4>
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
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="staff_name" id="staff_name" placeholder="Enter staff name">
                                        <span class="staff_name_error"></span>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Account Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="staff_email" id="staff_email" class="form-control"  placeholder="Enter staff email address">
                                        <span class="staff_email_error"></span>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Account Role</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="staff_role" id="staff_role">
                                            <option value="user">User</option>
                                            <option value="editor">Editor</option>
                                            <option value="writter">Writter</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Will provide the followin services</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="staff_provide_service" id="staff_provide_service">
                                            <option value="services">Services</option>
                                            <option value="services2">Services2</option>
                                            <option value="services3">Services3</option>
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Will provide the followin services</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-multiple-limit col-sm-12" multiple="multiple">
                                            <option value="AL">Alabama</option>
                                            <option value="WY">Wyoming</option>
                                            <option value="WY">Coming</option>
                                            <option value="WY">Hanry Die</option>
                                            <option value="WY">John Doe</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="send_email_with_inst" id="send_email_with_inst" value="option1"> Send email invitation with set password instruction
                                            </label>
                                        </div>
                                        
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                <br>
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

                
           



@endsection

@section('scripts')

<?php
    if( 1===1){
        echo '<script type="text/javascript">
            $(document).ready(function(){
                $("#staff_modal").modal("show");
            });
            </script>';
    }
    else{
        echo "<script>window.location = '/dashboard'</script>";
    }
?>

<script type="text/javascript" src="{{asset('/files/bower_components/select2/js/select2.full.min.js')}}"></script>
<!-- Multiselect js -->
<script type="text/javascript" src="{{asset('/files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js')}}">
</script>
<script type="text/javascript" src="{{asset('/files/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{asset('/files/assets/js/jquery.quicksearch.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('/files/assets/pages/advance-elements/select2-custom.js')}}"></script>


<script>

function submitContactForm(){



    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var staff_name = $('#staff_name').val();
    var staff_email = $('#staff_email').val();
    var manage_client_records = $('#manage_client_records:checked').val();

    alert(staff_name);

    if(staff_name.trim() == '' ){
        alert('Please enter your staff name.');
        $('#staff_name').focus();
         $('.staff_name_error').html('<span style="color:red;">Please enter staff name</p>');
        return false;

    }
    else if(staff_email.trim() == '' ){
        alert('Please enter your staff email.');
        $('#staff_email').focus();
         $('.staff_email_error').html('<span style="color:red;">Please enter staff email</p>');
        return false;

    }

    else{
        //alert('hhhh');
        
        $.ajax({
                type:'POST',
                url:'{{url("/staff")}}',
                data:{_token:CSRF_TOKEN, staff_name:staff_name },
                dataType:'json',
                success:function(data){
                    console.log(data.success);
                    console.log(data.message);
                    if(data.success == 'ok'){
                        //$('staff_modal').modal('hide');
                        console.log('okee');
                    }else{
                        console.log('okee');
                    }
                   
                }
            });
        }
    }
</script>
<script src="{{asset('/multistep_form/assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('/multistep_form/js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('/multistep_form/js/retina-1.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/multistep_form/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>


<script type="text/javascript">
        
jQuery(document).ready(function() {
    
    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/1.jpg");
    
    $('#top-navbar-1').on('shown.bs.collapse', function(){
        $.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
        $.backstretch("resize");
    });
    
    /*
        Form
    */
    $('.registration-form fieldset:first-child').fadeIn('slow');
    
    $('.registration-form input[type="text"], .registration-form input[type="password"], .registration-form textarea').on('focus', function() {
        $(this).removeClass('input-error');
    });
    
    // next step
    $('.registration-form .btn-next').on('click', function() {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;
        
        parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function() {
            if( $(this).val() == "" ) {
                $(this).addClass('input-error');
                next_step = false;
            }
            else {
                $(this).removeClass('input-error');
            }
        });
        
        if( next_step ) {
            parent_fieldset.fadeOut(400, function() {
                $(this).next().fadeIn();
            });
        }
        
    });
    
    // previous step
    $('.registration-form .btn-previous').on('click', function() {
        $(this).parents('fieldset').fadeOut(400, function() {
            $(this).prev().fadeIn();
        });
    });
    
    // submit
    $(".open3").click(function() {
        
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        

        var industry_id = $('#industry_id').val();
        var profession_id = $('#profession_id').val();
        var country_with_code = $('#country_with_code').val();
        var phone_number = $('#phone_number').val();
        var persons = $('#persons').val();
        var web_url = $('#web_url').val();
        var address = $('#address').val();
        var present_number_address = $('#present_number_address:checked').val();
        var user_id = $('#user_id').val();

        var manage_client_records = $('#manage_client_records:checked').val();
        var send_email_sms_promotions = $('#send_email_sms_promotions:checked').val();
        var send_email_sms_reminders = $('#send_email_sms_reminders:checked').val();
        var add_online_scheduling = $('#add_online_scheduling:checked').val();
        var invoices_estimates = $('#invoices_estimates:checked').val();
        var accept_payments = $('#accept_payments:checked').val();

        alert(industry_id);
        alert(manage_client_records);

         $.ajax({
                type:'POST',
                url:'{{url("/business")}}',
                data:{_token:CSRF_TOKEN, industry_id:industry_id, profession_id:profession_id, country_with_code:country_with_code, phone_number:phone_number, persons:persons, web_url:web_url, address:address, present_number_address:present_number_address, user_id:user_id, manage_client_records:manage_client_records, send_email_sms_promotions:send_email_sms_promotions, send_email_sms_reminders:send_email_sms_reminders, add_online_scheduling:add_online_scheduling, invoices_estimates:invoices_estimates, accept_payments:accept_payments },
                dataType:'json',
                success:function(data){
                    console.log(data.success);
                    console.log(data.message);
                    console.log(data.profession_id);
                    if(data.success == 'ok'){
                        window.location = '/dashboard/onboarding';
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });


        /*$(this).find('input[type="text"], input[type="password"], textarea').each(function() {
            alert('hi modal');
            if( $(this).val() == "" ) {
                e.preventDefault();
                $(this).addClass('input-error');
            }
            else {
                $(this).removeClass('input-error');
            }
        });*/
        
    });
    
    
});

    </script>

@endsection

@extends('admin.master')

@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="{{asset('/multistep_form/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('/multistep_form/css/form-elements.css')}}">
<link rel="stylesheet" href="{{asset('/multistep_form/css/style.css')}}">

<style>
    .pac-container{
        z-index:9999;
    }
      /*input[type="text"]{
    height: 20px;
    vertical-align: top;
      }*/
    .field_wrapper div{
    margin-bottom: 10px;
    }
    .add_button{
    margin-top: 10px;margin-left: 10px;vertical-align: text-bottom;
    }
    .remove_button{
    margin-top: 10px;
    margin-left: 10px;
    margin-right: 10px;
    vertical-align: text-bottom;
    }
</style>

@endsection

@section('main_content')
@include('admin.onboarding.showmodal1')
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
                $("#onboard_modal").modal("show");
            });

            </script>';

    }
    else{
        echo "<script>window.location = '/dashboard'</script>";
    }
?>

<script src="{{ asset('/files/assets/pages/multi-step-sign-up/js/main.js')}}"></script>

<script src="{{asset('/multistep_form/assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('/multistep_form/js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('/multistep_form/js/retina-1.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/multistep_form/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhDZ-X-FmlL7R9vg4VA7843bel7S4GOac&libraries=places" type="text/javascript"></script>


<!-- staff add  -->
<script>
function submitServiceValue(){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var sun_business_hours_am = $('#sun_business_hours_am').val();
    var sun_business_hours_pm = $('#sun_business_hours_pm').val();

    var mon_business_hours_am = $('#mon_business_hours_am').val();
    var mon_business_hours_pm = $('#mon_business_hours_pm').val();

    var tue_business_hours_am = $('#tue_business_hours_am').val();
    var tue_business_hours_pm = $('#tue_business_hours_pm').val();

    var wed_business_hours_am = $('#wed_business_hours_am').val();
    var wed_business_hours_pm = $('#wed_business_hours_pm').val();

    var thu_business_hours_am = $('#thu_business_hours_am').val();
    var thu_business_hours_pm = $('#thu_business_hours_pm').val();

    var fri_business_hours_am = $('#fri_business_hours_am').val();
    var fri_business_hours_pm = $('#fri_business_hours_pm').val();

    var sat_business_hours_am = $('#sat_business_hours_am').val();
    var sat_business_hours_pm = $('#sat_business_hours_pm').val();

    var tue_business_hours_am = $('#tue_business_hours_am').val();
    var tue_business_hours_pm = $('#tue_business_hours_pm').val();

    /*var n = $("input[name^= 'onboard_staff_name']").length;
    var array = $("input[name^='onboard_staff_name']");*/
    /*for(i=0; i < n; i++) {

       card_value = array.eq(i).val(); 
       //  it'd be .eq(i).val(); (if you wanted the text value)
       alert(card_value);
    }*/
    /*var n = $("input[name^= 'onboard_staff_email']").length;
    var array = $("input[name^='onboard_staff_email']");

    for(i=0; i < n; i++) {

       card_value = array.eq(i).val(); 
       //  it'd be .eq(i).val(); (if you wanted the text value)
       alert(card_value);
    }*/
    var onboard_staff_name = [];
    $("input[name^='onboard_staff_name']").each(function() {
        console.log($(this).val());
        onboard_staff_name.push($(this).val());
    });
    //onboard_staff_name= JSON.stringify(onboard_staff_name);

    var onboard_staff_email = [];
    $("input[name^='onboard_staff_email']").each(function() {
        console.log($(this).val());
        onboard_staff_email.push($(this).val());
    });
    //onboard_staff_email= JSON.stringify(onboard_staff_email);

    var service_name = [];
    $("input[name^='service_name']").each(function() {
        console.log($(this).val());
        service_name.push($(this).val());
    });
    //service_name= JSON.stringify(service_name);

    /*var service_duration = [];
    $("#service_duration :selected").each(function() {
        console.log($(this).val());
        service_duration.push($(this).val());
    });
    service_duration= JSON.stringify(service_duration);*/

    var service_duration = [];
    $.each($(".service_duration option:selected"), function(){   
        console.log($(this).val());     
        service_duration.push($(this).val());
    });

    var service_price = [];
    $("input[name^='service_price']").each(function() {
        console.log($(this).val());
        service_price.push($(this).val());
    });
    //service_price= JSON.stringify(service_price);

    //alert('sss');
    //var formData = $("input[name^='onboard_staff_email']").serialize();
    

    $.ajax({
            type:'POST',
            url:'/serviceOnboard',
            data: {_token:CSRF_TOKEN, sun_business_hours_am:sun_business_hours_am, sun_business_hours_pm:sun_business_hours_pm, mon_business_hours_am:mon_business_hours_am, mon_business_hours_pm:mon_business_hours_pm, tue_business_hours_am:tue_business_hours_am, tue_business_hours_pm:tue_business_hours_pm, wed_business_hours_am:wed_business_hours_am, wed_business_hours_pm:wed_business_hours_pm, thu_business_hours_am:thu_business_hours_am, thu_business_hours_pm:thu_business_hours_pm, fri_business_hours_am:fri_business_hours_am, fri_business_hours_pm:fri_business_hours_pm, sat_business_hours_am:sat_business_hours_am, sat_business_hours_pm:sat_business_hours_pm, onboard_staff_name:onboard_staff_name, onboard_staff_email:onboard_staff_email, service_name:service_name, service_duration:service_duration, service_price:service_price },
            dataType:'json',
            success:function(data){
                console.log(data.success);
                console.log(data.message);
                console.log(data.value);
                if(data.success == 'ok'){
                    console.log('ok, success');
                }else{
                    console.log('error return');
                }
               
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            } 
        });
    
    return false;
}
</script>
<!-- staff add end -->


<!-- google map show code here -->
<script>
    var address;
    var lat;
    var lng;
    var postal_code;
        function initialize() {

          var input = document.getElementById('address');
          var autocomplete = new google.maps.places.Autocomplete(input);

            // Set initial restrict to the greater list of countries.
            autocomplete.setComponentRestrictions(
            {'country': ['au','bd']});

            // Specify only the data fields that are needed.
            autocomplete.setFields(
                ['address_components', 'geometry', 'icon', 'name', 'formatted_address']);


            google.maps.event.addListener(autocomplete, 'place_changed', function () {

                var place = autocomplete.getPlace();
                var address_components = place.address_components;

                
                /*document.getElementById('location-snap').innerHTML = place.formatted_address;
                document.getElementById('lat-span').innerHTML = place.geometry.location.lat();
                document.getElementById('lon-span').innerHTML = place.geometry.location.lng();*/

                var address = place.formatted_address
                var lat     = place.geometry.location.lat();
                var lng     = place.geometry.location.lng();

                

                var result = place.address_components;
                for (var i = 0; i < result.length; i++ ) {
                    if (result[i].types == "postal_code"){
                        var postal_code = result[i].long_name
                        
                    }
                }

                console.log(address);
                console.log(lat);
                console.log(lng);
                console.log(postal_code);

               /* document.getElementById('postal-code').innerHTML = postal_code;*/

                var map_options = {
                    center: new google.maps.LatLng(lat, lng),
                    zoom: 11,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("map_canvas"), map_options);


            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);



function get_professions(){
    var profession_id ='<option value="">...Select Profession Type...</option>';
    var industry_id = $('#industry_id').val();
    console.log(industry_id)

    if(industry_id != ''){
        $.ajax({
            url : '{{route("getProfession")}}',
            type: 'get',
            data: {'industry_id':industry_id},
            success: function (data) {
                console.log(data);
                  for (var i = 0; i < data.length; i ++){
                  profession_id = profession_id + '<option value="'+data[i].id+'">'+data[i].name+'</option>'
                    }
                   document.getElementById("profession_id").innerHTML = profession_id;
            }
        });
    }
    /*var profession_id = $('#profession_id').val();
    console.log('profession id here');
    console.log(profession_id);*/
}


//jQuery(document).ready(function() {
    
    /*$(".open1").click(function() {
      var phone_number = $("#phone_number").val();
      if(phone_number.trim() == '' ){
        //alert('Please enter your phone_number.');
        $('#phone_number').focus();
         $('.phone_number_error').html('<span style="color:red;">Please enter phone_number</p>');
        return false;

    }  
      
    });*/
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

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        var industry_id = $('#industry_id').val();
        var profession_id = $('#profession_id').val();
        var country_with_code = $("#country_with_code").val();
        var phone_number = $("#phone_number").val();
        var business_name = $("#business_name").val();
        var web_url = $('#web_url').val();
        //var address = $('#address').val();
        var present_number_address = $('#present_number_address:checked').val();
        var user_id = $('#user_id').val();
        var address = $('#address').val();

        console.log('google map value');
        console.log(address);
        console.log(lat);
        console.log(lng);
        console.log(postal_code);
        console.log('profession id here');
        console.log(profession_id);
        console.log('other value');
        console.log(address);
        console.log(industry_id)
        console.log(profession_id)
        console.log(country_with_code)
        console.log(phone_number)
        console.log(business_name)
        console.log(web_url)
        console.log(present_number_address)
        console.log(user_id)
        
        if(!$.isNumeric(phone_number)){
            //alert('Please enter your phone_number.');
            $('#phone_number').focus();
             $('.phone_number_error').html('<span style="color:red;">Please enter phone number</p>');
            next_step = false;
        }
        else{
            $('.phone_number_error').html('<span style="display:none"/>')
        }
        if(industry_id === ''){
            //alert('Please enter your phone_number.');
            $('#industry_id').focus();
             $('.error_induestry_id').html('<span style="color:red;">Please select industry type</p>');
            next_step = false;
        }
        else{
            $('.error_induestry_id').html('<span style="display:none"/>')
        }
        if(profession_id === ''){
            //alert('Please enter your phone_number.');
            $('#profession_id').focus();
             $('.error_profession_id').html('<span style="color:red;">Please select profession type</p>');
            next_step = false;
        }
        else{
            $('.error_profession_id').html('<span style="display:none"/>')
        }

        var web_url = $('#web_url').val();
        url_validate = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
        if(!url_validate.test(web_url)){
           //alert('error');
           $('#web_url').focus();
             $('.error_web_url').html('<span style="color:red;">Please enter valid URL</p>');
            next_step = false;
        }
        else{
           $('.error_web_url').html('<span style="display:none"/>')
        }
        
        /*$.ajax({
            type:'POST',
            url:'{{url("/business")}}',
            data:{_token:CSRF_TOKEN, industry_id:industry_id, profession_id:profession_id, country_with_code:country_with_code, phone_number:phone_number, business_name:business_name, web_url:web_url, address:address, user_id:user_id },
            dataType:'json',
            success:function(data){
                console.log(data.success);
                console.log(data.message);
                
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });*/
        
        if( next_step ) {
            parent_fieldset.fadeOut(400, function() {
                $(this).next().fadeIn();
            });
        }
        
    });

    // next step
    $('.registration-form .btn-next2').on('click', function() {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        var time_zone = $('#time_zone').val();
        var time_format = $('#time_format').val();
        var start_weak_on = $('#start_weak_on').val();

        console.log(time_zone);
        console.log(time_format);
        console.log(start_weak_on);

        /*$.ajax({
            type:'POST',
            url:'{{url("/timezone")}}',
            data:{_token:CSRF_TOKEN, user_id:user_id, time_zone:time_zone, time_format:time_format, start_weak_on:start_weak_on },
            dataType:'json',
            success:function(data){
                console.log(data.success);
                console.log(data.message);
                
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });*/
        
        if( next_step ) {
            parent_fieldset.fadeOut(400, function() {
                $(this).next().fadeIn();
            });
        }
        
    });
    // next step
    $('.registration-form .btn-next3').on('click', function() {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        var service_name = [];
        $("input[name^='service_name']").each(function() {
            console.log($(this).val());
            service_name.push($(this).val());
        });
        
        var service_duration = [];
        $.each($(".service_duration option:selected"), function(){   
            console.log($(this).val());     
            service_duration.push($(this).val());
        });

        var service_price = [];
        $("input[name^='service_price']").each(function() {
            console.log($(this).val());
            service_price.push($(this).val());
        });
        //alert('modal 3');
        
        if( next_step ) {
            parent_fieldset.fadeOut(400, function() {
                $(this).next().fadeIn();
            });
        }
        
    });
    // next step
    $('.registration-form .btn-next4').on('click', function() {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        var onboard_staff_name = [];
        $("input[name^='onboard_staff_name']").each(function() {
            console.log($(this).val());
            onboard_staff_name.push($(this).val());
        });
        //onboard_staff_name= JSON.stringify(onboard_staff_name);

        var onboard_staff_email = [];
        $("input[name^='onboard_staff_email']").each(function() {
            console.log($(this).val());
            onboard_staff_email.push($(this).val());
        });
        //alert('modal 4');
        
        if( next_step ) {
            parent_fieldset.fadeOut(400, function() {
                $(this).next().fadeIn();
            });
        }
        
    });

    // next step
    $('.registration-form .btn-next5').on('click', function() {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        //alert('modal set hours');
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        var sun_business_hours_am = $('#sun_business_hours_am').val();
        var sun_business_hours_pm = $('#sun_business_hours_pm').val();

        var mon_business_hours_am = $('#mon_business_hours_am').val();
        var mon_business_hours_pm = $('#mon_business_hours_pm').val();

        var tue_business_hours_am = $('#tue_business_hours_am').val();
        var tue_business_hours_pm = $('#tue_business_hours_pm').val();

        var wed_business_hours_am = $('#wed_business_hours_am').val();
        var wed_business_hours_pm = $('#wed_business_hours_pm').val();

        var thu_business_hours_am = $('#thu_business_hours_am').val();
        var thu_business_hours_pm = $('#thu_business_hours_pm').val();

        var fri_business_hours_am = $('#fri_business_hours_am').val();
        var fri_business_hours_pm = $('#fri_business_hours_pm').val();

        var sat_business_hours_am = $('#sat_business_hours_am').val();
        var sat_business_hours_pm = $('#sat_business_hours_pm').val();

        var tue_business_hours_am = $('#tue_business_hours_am').val();
        var tue_business_hours_pm = $('#tue_business_hours_pm').val();
        console.log(sat_business_hours_am);
        console.log(sat_business_hours_pm);
       /* $.ajax({
            type:'POST',
            url:'/serviceOnboard',
            data: {_token:CSRF_TOKEN, sun_business_hours_am:sun_business_hours_am, sun_business_hours_pm:sun_business_hours_pm, mon_business_hours_am:mon_business_hours_am, mon_business_hours_pm:mon_business_hours_pm, tue_business_hours_am:tue_business_hours_am, tue_business_hours_pm:tue_business_hours_pm, wed_business_hours_am:wed_business_hours_am, wed_business_hours_pm:wed_business_hours_pm, thu_business_hours_am:thu_business_hours_am, thu_business_hours_pm:thu_business_hours_pm, fri_business_hours_am:fri_business_hours_am, fri_business_hours_pm:fri_business_hours_pm, sat_business_hours_am:sat_business_hours_am, sat_business_hours_pm:sat_business_hours_pm, onboard_staff_name:onboard_staff_name, onboard_staff_email:onboard_staff_email, service_name:service_name, service_duration:service_duration, service_price:service_price },
            dataType:'json',
            success:function(data){
                console.log(data.success);
                console.log(data.message);
                console.log(data.value);
                if(data.success == 'ok'){
                    console.log('ok, success');
                }else{
                    console.log('error return');
                }
               
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            } 
        });*/
        if( next_step ) {
            parent_fieldset.fadeOut(400, function() {
                $(this).next().fadeIn();
            });
        }
        
    });
    // next step
    $('.registration-form .btn-next6').on('click', function() {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        var check_value = $('input[type="checkbox"]:checked').length;
        console.log(check_value); 

        if(check_value > 0){
          //alert(check_value);
          next_step = true;
        } 
        else{
            alert("Please Checked at least one.");
            next_step = false;
        }

        var manage_client_records = $('#manage_client_records:checked').val();
        var send_email_sms_promotions = $('#send_email_sms_promotions:checked').val();
        var send_email_sms_reminders = $('#send_email_sms_reminders:checked').val();
        var add_online_scheduling = $('#add_online_scheduling:checked').val();
        var invoices_estimates = $('#invoices_estimates:checked').val();
        var accept_payments = $('#accept_payments:checked').val();

        console.log(manage_client_records);
        console.log(send_email_sms_promotions);
        console.log(send_email_sms_reminders);
        console.log(add_online_scheduling);
        console.log(invoices_estimates);
        console.log(accept_payments);
        //alert('modal 5');
        
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
    /*$(".open3").click(function() {
        
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

        //alert(industry_id);
        //alert(manage_client_records);

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
    });*/

     $(".open3").click(function(e) {

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        
        var industry_id = $('#industry_id').val();
        var profession_id = $('#profession_id').val();
        var country_with_code = $("#country_with_code").val();
        var phone_number = $("#phone_number").val();
        var business_name = $("#business_name").val();
        var web_url = $('#web_url').val();
        //var address = $('#address').val();
        var present_number_address = $('#present_number_address:checked').val();
        var user_id = $('#user_id').val();
        var address = $('#address').val();

        var time_zone = $('#time_zone').val();
        var time_format = $('#time_format').val();
        var start_weak_on = $('#start_weak_on').val();

        var service_name = [];
        $("input[name^='service_name']").each(function() {
            console.log($(this).val());
            service_name.push($(this).val());
        });
        
        var service_duration = [];
        $.each($(".service_duration option:selected"), function(){   
            console.log($(this).val());     
            service_duration.push($(this).val());
        });

        var service_price = [];
        $("input[name^='service_price']").each(function() {
            console.log($(this).val());
            service_price.push($(this).val());
        });

        var onboard_staff_name = [];
        $("input[name^='onboard_staff_name']").each(function() {
            console.log($(this).val());
            onboard_staff_name.push($(this).val());
        });
        //onboard_staff_name= JSON.stringify(onboard_staff_name);

        var onboard_staff_email = [];
        $("input[name^='onboard_staff_email']").each(function() {
            console.log($(this).val());
            onboard_staff_email.push($(this).val());
        });

        var sun_business_hours_am = $('#sun_business_hours_am').val();
        var sun_business_hours_pm = $('#sun_business_hours_pm').val();

        var mon_business_hours_am = $('#mon_business_hours_am').val();
        var mon_business_hours_pm = $('#mon_business_hours_pm').val();

        var tue_business_hours_am = $('#tue_business_hours_am').val();
        var tue_business_hours_pm = $('#tue_business_hours_pm').val();

        var wed_business_hours_am = $('#wed_business_hours_am').val();
        var wed_business_hours_pm = $('#wed_business_hours_pm').val();

        var thu_business_hours_am = $('#thu_business_hours_am').val();
        var thu_business_hours_pm = $('#thu_business_hours_pm').val();

        var fri_business_hours_am = $('#fri_business_hours_am').val();
        var fri_business_hours_pm = $('#fri_business_hours_pm').val();

        var sat_business_hours_am = $('#sat_business_hours_am').val();
        var sat_business_hours_pm = $('#sat_business_hours_pm').val();

        var tue_business_hours_am = $('#tue_business_hours_am').val();
        var tue_business_hours_pm = $('#tue_business_hours_pm').val();

        var manage_client_records = $('#manage_client_records:checked').val();
        var send_email_sms_promotions = $('#send_email_sms_promotions:checked').val();
        var send_email_sms_reminders = $('#send_email_sms_reminders:checked').val();
        var add_online_scheduling = $('#add_online_scheduling:checked').val();
        var invoices_estimates = $('#invoices_estimates:checked').val();
        var accept_payments = $('#accept_payments:checked').val();

         $.ajax({
                type:'POST',
                url:'{{url("/business")}}',
                data:{_token:CSRF_TOKEN, industry_id:industry_id, profession_id:profession_id, country_with_code:country_with_code, phone_number:phone_number, business_name:business_name, web_url:web_url, address:address, user_id:user_id, time_zone:time_zone, time_format:time_format, start_weak_on:start_weak_on, service_name:service_name, service_duration:service_duration, service_price:service_price, onboard_staff_name:onboard_staff_name, onboard_staff_email:onboard_staff_email, sun_business_hours_am:sun_business_hours_am, sun_business_hours_pm:sun_business_hours_pm, mon_business_hours_am:mon_business_hours_am, mon_business_hours_pm:mon_business_hours_pm, tue_business_hours_am:tue_business_hours_am, tue_business_hours_pm:tue_business_hours_pm, wed_business_hours_am:wed_business_hours_am, wed_business_hours_pm:wed_business_hours_pm, thu_business_hours_am:thu_business_hours_am, thu_business_hours_pm:thu_business_hours_pm, fri_business_hours_am:fri_business_hours_am, fri_business_hours_pm:fri_business_hours_pm, sat_business_hours_am:sat_business_hours_am, sat_business_hours_pm:sat_business_hours_pm, manage_client_records:manage_client_records, send_email_sms_promotions:send_email_sms_promotions, send_email_sms_reminders:send_email_sms_reminders, add_online_scheduling:add_online_scheduling, invoices_estimates:invoices_estimates, accept_payments:accept_payments },
                dataType:'json',
                success:function(data){
                    console.log(data.success);
                    console.log(data.message);
                    console.log(data.value);
                    if(data.success == 'ok'){
                        //window.location = 'route("dashboard.onboarding")';
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });

        
    });
    
    
//});

    </script>

@endsection
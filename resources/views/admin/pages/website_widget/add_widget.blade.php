@extends('admin.master')

@section('styles')
<!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/icon/icofont/css/icofont.css') }}">

 <link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- Style.css -->
<link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/css/jquery.mCustomScrollbar.css') }}">

<!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/pages/notification/notification.css') }}">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/bower_components/animate.css/css/animate.css') }}">


@endsection

@section('page_header')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Add the Client Portal to Your Website</h5>
                    <p class="m-b-0">Client Portal Widget</p>

                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('main_content')

<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- To Do List in Modal card start -->
                @if (session('success'))
                  <div class="alert alert-success background-success">
                        <strong>{{ session('success')}}</strong>
                   </div>
                @endif
                @if (session('error'))
                   <div class="alert alert-warning">
                       {{ session('error')}}
                   </div>
                @endif
                
            <div class="card">
                <div class="card-header">                
                    <h5>Portal Actions</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa-plus minimize-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block" style="display: none;">
                    <section class="task-panel tasks-widget">
                        <div class="panel-body">
                                <div class="task-content">
                            <form id="portal_actions" action="{{ route('store.portal.actions') }}" method="post">
                                @csrf
                                    <div class="to-do-label">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="check_schedule" id="check_schedule">
                                                <span class="cr">
                                                   <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                               </span>
                                                <span class="">Schedule</span>
                                                
                                            </label>
                                            <br>
                                                <label>Text </label>
                                                <input type="text" name="schedule" id="schedule" value="Schedule now 2">
                                        </div>
                                    </div>
                                    <div class="to-do-label">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="check_call_us" id="check_call_us">
                                                <span class="cr">
                                                   <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                               </span>
                                                <span class="">Call Us</span>
                                                
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="to-do-label">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="check_share_document" id="check_share_document">
                                                <span class="cr">
                                                   <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                               </span>
                                                <span class="">Share Document</span>
                                                
                                            </label>
                                            <br>
                                                <label>Text </label>
                                                <input type="text" name="share_document" id="share_document" value="Send us a file 2">
                                        </div>
                                    </div>
                                    <div class="to-do-label">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="check_content" id="check_content">
                                                <span class="cr">
                                                   <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                               </span>
                                                <span class="">Content</span>
                                                
                                            </label>
                                            <br>
                                                <label>Text </label>
                                                <input type="text" name="content" id="content" value="Customer Testimonials 2">
                                        </div>
                                    </div>
                                    <div class="to-do-label">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="check_details" id="check_details">
                                                <span class="cr">
                                                   <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                               </span>
                                                <span class="">Leave Details</span>
                                                
                                            </label>
                                            <br>
                                                <label>Text </label>
                                                <input type="text" name="details" id="details" value="We would love to here from 2">
                                        </div>
                                    </div>
                                <div>
                                    <button type="button" onclick="submitPortalActions()" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                                </div>
                            </form>
                                </div>
                            
                        </div>
                    </section>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Portal Invite</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <!-- <li><i class="fa fa fa-wrench open-card-option"></i></li> -->
                            <li><i class="fa fa-plus minimize-card"></i></li>
                            <li><i class="fa fa-window-maximize full-card"></i></li>
                            <!-- <li><i class="fa fa-refresh reload-card"></i></li>
                            <li><i class="fa fa-trash close-card"></i></li> -->
                        </ul>
                    </div>
                </div>
                <div class="card-block" style="display: none;">
                    <section class="task-panel tasks-widget">
                        <div class="panel-body">
                            <div class="task-content">
                                <form id="portal_actions" action="{{ route('store.portal.invite') }}" method="post">
                                @csrf
                                <div class="to-do-label">
                                    <div class="checkbox-fade fade-in-primary">
                                        
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>Invitation Lebel : </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="invitation_lebel" id="invitation_lebel" value="Contact">
                                                    <p>This button will appear at the bottom right of your web page</p>
                                                </div>
                                            </div>
                                        </div>
                                            
                                           
                                    </div>
                                </div>
                                <div class="to-do-label">
                                    <div class="checkbox-fade fade-in-primary">
                                        
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>Invitation Title : </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="invitation_title" id="invitation_title" value="Let's Talk!">
                                                </div>
                                            </div>
                                        </div>
                                            
                                           
                                    </div>
                                </div>
                                <div class="to-do-label">
                                    <div class="checkbox-fade fade-in-primary">
                                        
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>Invitation Text : </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <textarea rows="3" name="invitation_text" id="invitation_text">Thanks for stopping by! We're here to help, please don't hesitate to reach out.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                            
                                           
                                    </div>
                                </div>
                                <div>
                                    <button type="button" onclick="submitPortalInvite()" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                                </div>
                            </form>
                            </div>
                        
                        </div>
                    </section>
                </div>
            </div>
            <!-- To Do List in Modal card end -->
        </div>
    </div>
</div>

<!-- <div class="page-body button-page">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="notifications">
                                <li>
                                    <button class="btn btn-success waves-effect" data-type="success" data-from="top" data-align="right">success</button>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection

@section('scripts')
<!-- Todo js -->
<script src="{{ asset('/files/assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('/files/assets/js/vertical/vertical-layout.min.js') }}"></script>
<script src="{{ asset('/files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- Custom js -->

<!-- notification js -->
<script type="text/javascript" src="{{ asset('/files/assets/js/bootstrap-growl.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/files/assets/pages/notification/notification.js') }}"></script>
<script src="{{ asset('/files/assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('/files/assets/js/vertical/vertical-layout.min.js') }}"></script>
<script src="{{ asset('/files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>


<script>
    function submitPortalActions(){

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        var check_schedule       = $('#check_schedule:checked').val();
        var check_call_us        = $('#check_call_us:checked').val();
        var check_share_document = $('#check_share_document:checked').val();
        var check_content        = $('#check_content:checked').val();
        var check_details        = $('#check_details:checked').val();

        console.log('portal action check start...');
        console.log(check_schedule)
        console.log(check_call_us)
        console.log(check_share_document)
        console.log(check_content)
        console.log(check_details)

        console.log('portal action value start...');
        if(check_schedule !== 'on'){
            var check_schedule = 'no checked schedule';
            console.log(check_schedule);
        }else{
            var schedule = $('#schedule').val();
            console.log(schedule);
        }

        if(check_call_us !== 'on'){
            var check_call_us = 'no checked call us';
            console.log(check_call_us);
        }else{
            var call_us = 'Call Us 2';
            console.log(call_us);
        }

        if(check_share_document !== 'on'){
            var check_share_document = 'no checked share document';
            console.log(check_share_document);
        }else{
            var share_document = $('#share_document').val();
            console.log(share_document);
        }

        if(check_content !== 'on'){
            var check_content = 'no checked content';
            console.log(check_content);
        }else{
            var content = $('#content').val();
            console.log(content);
        }

        if(check_details !== 'on'){
            var check_details = 'no checked details';
            console.log(check_details);
        }else{
            var details = $('#details').val();
            console.log(details);
        }

        $.ajax({
            type:'POST',
            url :"{{route('store.portal.actions')}}", 
            data:{_token:CSRF_TOKEN,schedule:schedule, call_us:call_us, share_document:share_document, content:content, details:details },
            dataType:'json',
            success:function(data){
               console.log(data.status); 
               console.log(data.value);
            },
            error: function(xhr, ajaxOptions, thrownError){
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });

        return false;

        /*console.log(schedule)
        console.log(schedules)
        console.log(call_us)
        console.log(share_document)
        console.log(content)
        console.log(details)*/
    }

    function submitPortalInvite(){
        
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


        var invitation_lebel = $('#invitation_lebel').val();
        var invitation_title = $('#invitation_title').val();
        var invitation_text = $('#invitation_text').val();
        alert(invitation_lebel);

        $.ajax({
            type:'POST',
            url :"{{route('store.portal.invite')}}", 
            data:{_token:CSRF_TOKEN, invitation_lebel:invitation_lebel, invitation_title:invitation_title, invitation_text:invitation_text},
            dataType:'json',
            success: function(data){
                console.log(data.success);
                console.log(data.value);
                //console.log(data.websiteWidget);
            },
            error: function(xhr, ajaxOptions, thrownError){
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
</script>

@endsection
@extends('admin.master')
@section('styles')

<link rel="stylesheet" href="{{asset('/files/bower_components/select2/css/select2.min.css')}}" />
<!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/multiselect/css/multi-select.css')}}" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/css/style.css')}}">
    <style>
        .container{max-width:1170px; margin:auto;}
      img{ max-width:100%;}
      .inbox_people {
        background: #f8f8f8 none repeat scroll 0 0;
        float: left;
        overflow: hidden;
        width: 40%; border-right:1px solid #c4c4c4;
      }
      .inbox_msg {
        border: 1px solid #c4c4c4;
        clear: both;
        overflow: hidden;
      }
      .top_spac{ margin: 20px 0 0;}


      .recent_heading {float: left; width:40%;}
      .srch_bar {
        display: inline-block;
        text-align: right;
        width: 60%; padding:
      }
      .headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

      .recent_heading h4 {
        color: #05728f;
        font-size: 21px;
        margin: auto;
      }
      .srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
      .srch_bar .input-group-addon button {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        padding: 0;
        color: #707070;
        font-size: 18px;
      }
      .srch_bar .input-group-addon { margin: 0 0 0 -27px;}

      .chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
      .chat_ib h5 span{ font-size:13px; float:right;}
      .chat_ib p{ font-size:14px; color:#989898; margin:auto}
      .chat_img {
        float: left;
        width: 11%;
      }
      .chat_ib {
        float: left;
        padding: 0 0 0 15px;
        width: 88%;
      }

      .chat_people{ overflow:hidden; clear:both;}
      .chat_list {
        border-bottom: 1px solid #c4c4c4;
        margin: 0;
        padding: 18px 16px 10px;
      }
      .inbox_chat { height: 550px; overflow-y: scroll;}

      .active_chat{ background:#ebebeb;}

      .incoming_msg_img {
        display: inline-block;
        width: 6%;
      }
      .received_msg {
        display: inline-block;
        padding: 0 0 0 10px;
        vertical-align: top;
        width: 92%;
       }
       .received_withd_msg p {
        background: #ebebeb none repeat scroll 0 0;
        border-radius: 3px;
        color: #646464;
        font-size: 14px;
        margin: 0;
        padding: 5px 10px 5px 12px;
        width: 100%;
      }
      .time_date {
        color: #747474;
        display: block;
        font-size: 12px;
        margin: 8px 0 0;
      }
      .received_withd_msg { width: 57%;}
      .mesgs {
        float: left;
        padding: 30px 15px 0 25px;
        width: 60%;
      }

       .sent_msg p {
        background: #05728f none repeat scroll 0 0;
        border-radius: 3px;
        font-size: 14px;
        margin: 0; color:#fff;
        padding: 5px 10px 5px 12px;
        width:100%;
      }
      .outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
      .sent_msg {
        float: right;
        width: 46%;
      }
      .input_msg_write input {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        color: #4c4c4c;
        font-size: 15px;
        min-height: 48px;
        width: 100%;
      }

      .type_msg {border-top: 1px solid #c4c4c4;position: relative;}
      .msg_send_btn {
        background: #05728f none repeat scroll 0 0;
        border: medium none;
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        font-size: 17px;
        height: 33px;
        position: absolute;
        right: 0;
        top: 11px;
        width: 33px;
      }
      .messaging { padding: 0 0 50px 0;}
      .msg_history {
        height: 300px;
        overflow-y: auto;
      }
      .msg_history{
        border-left: 5px solid #87c5c3;
        /*border-top: 5px solid #87c5c3;
        border-bottom: 5px solid #87c5c3;*/
      }
    </style>
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
                <h5>Appointments</h5>
            </div>
        </div>
        <div class="card-block booking-container">
            <div class="booking-content"> 
                <div class="booking-right booking-info">
                    @if($booking->confirmed == 0)
                        <h4 class="pending">Status: <span>Pending</span></h4>
                    @else
                        <h4 class="active">Status: <span>Active</span></h4>
                    @endif
                    <p><i class="ti-user"></i><strong>First Name: </strong>{{ $booking->first_name }}</p>
                    <p><i class="ti-agenda"></i><strong>Service: </strong>{{ $booking->service->name }}</p>
                    <p><i class="ti-calendar"></i>{{ $date }}</p>
                    <!--<p><img src="{{ asset('images/icon/user.png') }}"> with {{ $booking->first_name }}</p>-->

                    <p><i class="fa fa-phone" aria-hidden="true"></i> {{ $booking->phone }}</p>

                    <p><i class="ti-email"></i> {{ $booking->email }}</p>

                     <p><i class="ti-comment-alt"></i></p>
                    <label class="">Message</label>
                    <p>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="messaging">
                                  <div class="mesgs">
                                    <div class="msg_history">
                                    @foreach($messages as $message)

                                    @if($message->recipient_id == 6)
                                    <div class="outgoing_msg">
                                        <div class="sent_msg">
                                          <p>{{ $message->body }}</p>
                                          <span class="time_date"> {{ $message->created_at->format('H:i A') }} |  {{$message->created_at->format('d F Y') }}</span> </div>
                                    </div>
                                    @else

                                    <div class="incoming_msg">
                                        <!--<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="miyn"> </div>-->
                                        <div class="received_msg">
                                            <div class="received_withd_msg">
                                            <p>{{ $message->body }}</p>
                                                <span class="time_date"> {{ $message->created_at->format('H:i A') }} |  {{$message->created_at->format('d F Y') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                      
                                      @endforeach
                                    </div>
                                    <br>
                                    <div class="type_msg">
                                      <div class="input_msg_write">
                                        <form id="" method="post" action="{{url('/message-send-from-client')}}" >
                                            @csrf
                                        
                                            <input type="text" style="border-left: 5px solid #87c5c3;" class="form-control" name="message" id="message" placeholder="Send a message" />

                                            <input type="hidden" name="admin_id" id="admin_id" value="{{$booking->staff_id}}">
                                            <input type="hidden" name="client_id" id="client_id" value="{{$booking->client_id}}">

                                            <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                        
                                        </form>
                                      </div>
                                    </div>
                                    
                                  </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </p>
                    <p></p>
                </div>
            </div>

            <a style="color:#fff;" class="btn view-btn" href="{{ route('reschedule', $booking->id) }}">Re-Schedule</a>
    
            <a style="color:#fff;" class="btn delete-btn" href="{{ url('booking-client-cancel/'.$booking->id.'/'.$booking->confirmed) }}">Delete</a>
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
            format: 'L',
        });
    });
</script>
    

@endsection
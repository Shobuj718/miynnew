@extends('admin.master')

@section('styles')
<!-- Calender css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/bower_components/fullcalendar/css/fullcalendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/bower_components/fullcalendar/css/fullcalendar.print.css')}}" media='print'>
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/css/style.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('page_header')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Client Calender</h5>
                    <p class="m-b-0">Calendar page</p>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Event Calender</a>
                    </li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Full Calender</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('main_content')
<div class="page-body">
    <div class="card">
        <div class="card-header">
            <h5>Full Calender</h5>
        </div>
        </div>

        <div class="card-block">

            <div class="col-xl-12 col-md-12">

                {!! $calendar->calendar() !!}

                {!! $calendar->script() !!}

            </div>
        </div>
</div>

@endsection

@section('scripts')


    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
    <!--classic JS-->
    <script type="text/javascript" src="{{ asset('/files/assets/js/classie.js')}}"></script>
    <!-- calender js -->
    <script type="text/javascript" src="{{ asset('/files/bower_components/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/files/bower_components/fullcalendar/js/fullcalendar.min.js')}}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('/files/assets/pages/full-calender/calendar.js')}}"></script>
    <script src="{{ asset('/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>


@endsection
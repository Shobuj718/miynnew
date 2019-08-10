@extends('admin.master')
@section('inbox', 'active selected')
@section('title', 'Inbox')


@section('styles')
<!-- waves.css -->
      <link rel="stylesheet" href="{{ asset('/files/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/icon/icofont/css/icofont.css') }}">
      <!-- Font Awesome -->
      <!-- Style.css -->


@endsection


@section('main_content')
<div class="page-body">
    <div class="card">
        <!-- Email-card start -->
        <div class="card-block email-card">
            <div class="row">
                <div class="col-lg-12 col-xl-3">
                    <div class="user-head row">
                        <div class="user-face">
                            <img style="display: inline-block;float: none; width: 67px;height: 61px;" class="img-fluid" src="{{asset('/files/assets/images/miynlogo.png')}}"  alt="Theme-Logo" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-9">
                    <div class="mail-box-head row justify-content-end">
                        <div class="col-auto">
                            <form class="form-material">
                                <div class="material-group">
                                    <div class="form-group form-default">
                                        <input type="text" name="footer-email" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Search</label>
                                    </div>
                                    <div class="material-addone">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Left-side section start -->
                <div class="col-lg-12 col-xl-3">
                    <div class="user-body">
                        <div class="p-20 text-center">
                            <a href="email-compose.html" class="btn btn-danger waves-effect">Compose</a>
                        </div>
                        <ul class="page-list nav nav-tabs flex-column" id="pills-tab" role="tablist">
                            <li class="nav-item mail-section">
                                <a class="nav-link waves-effect d-block active" data-toggle="pill" href="#e-inbox" role="tab">
                                    <i class="icofont icofont-inbox"></i> Inbox
                                    <span class="label label-primary f-right">6</span>
                                </a>
                            </li>
                            <li class="nav-item mail-section">
                                <a class="nav-link waves-effect d-block" data-toggle="pill" href="#e-starred" role="tab">
                                    <i class="icofont icofont-star"></i> Require your attention
                                    <span class="label label-info f-right">1</span>
                                </a>
                            </li>
                            <li class="nav-item mail-section">
                                <a class="nav-link waves-effect d-block" data-toggle="pill" href="#e-drafts" role="tab">
                                    <i class="icofont icofont-file-text"></i> Follow Up
                                </a>
                            </li>
                            <li class="nav-item mail-section">
                                <a class="nav-link waves-effect d-block" data-toggle="pill" href="#e-sent" role="tab">
                                    <i class="icofont icofont-paper-plane"></i> Sent
                                </a>
                            </li>
                            <li class="nav-item mail-section">
                                <a class="nav-link waves-effect d-block" data-toggle="pill" href="#e-sent" role="tab">
                                    <i class="icofont icofont-paper-plane"></i> Archived
                                </a>
                            </li>
                            <li class="nav-item mail-section">
                                <a class="nav-link waves-effect d-block" data-toggle="pill" href="#e-trash" role="tab">
                                    <i class="icofont icofont-ui-delete"></i> Trash
                                    <span class="label label-danger f-right">2</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- Left-side section end -->
                <!-- Right-side section start -->
                <div class="col-lg-12 col-xl-9">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="e-inbox" role="tabpanel">

                            <div class="mail-body">
                                <div class="mail-body-header">
                                    
                                    <div class="btn-group dropdown-split-primary">
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont icofont-ui-folder"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                           
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="mail-body-content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr class="unread">
                                                <td>
                                                    <div class="check-star">
                                                        <div class="checkbox-fade fade-in-primary checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                            </label>
                                                        </div>
                                                        <i class="icofont icofont-star text-warning"></i>
                                                    </div>
                                                </td>
                                                <td><a href="email-read.html" class="email-name waves-effect">THE MIYN</a></td>
                                                <td><a href="email-read.html" class="email-name waves-effect">this message come from miyn</a></td>
                                                <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                <td class="email-time">08:01 AM</td>
                                            </tr>
                                          
                                            <tr class="read">
                                                <td>
                                                    <div class="check-star">
                                                        <div class="checkbox-fade fade-in-primary checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                            </label>
                                                        </div>
                                                        <i class="icofont icofont-star text-primary"></i>
                                                    </div>
                                                </td>
                                                <td><a href="email-read.html" class="email-name waves-effect">Shobuj</a></td>
                                                <td><a href="email-read.html" class="email-name waves-effect">this is message come from shobuj</a></td>
                                                <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                <td class="email-time">07:15 AM</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="e-starred" role="tabpanel">
                            <div class="mail-body">
                                <div class="mail-body-header">
                                    <div class="btn-group dropdown-split-primary">
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont icofont-ui-folder"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mail-body-content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr class="read">
                                                <td>
                                                    <div class="check-star">
                                                        <div class="checkbox-fade fade-in-primary checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                            </label>
                                                        </div>
                                                        <i class="icofont icofont-star text-primary"></i>
                                                    </div>
                                                </td>
                                                <td><a href="email-read.html" class="email-name waves-effect">THE MIYN</a></td>
                                                <td><a href="email-read.html" class="email-name waves-effect">this is message come from miyn</a></td>
                                                <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                <td class="email-time">11:01 AM</td>
                                            </tr>
                                            <tr class="read">
                                                <td>
                                                    <div class="check-star">
                                                        <div class="checkbox-fade fade-in-primary checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                            </label>
                                                        </div>
                                                        <i class="icofont icofont-star text-danger"></i>
                                                    </div>
                                                </td>
                                                <td><a href="email-read.html" class="email-name waves-effect">THE MIYN</a></td>
                                                <td><a href="email-read.html" class="email-name waves-effect">this message come from miyn</a></td>
                                                <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                <td class="email-time">12:01 PM</td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Right-side section end -->
            </div>
        </div>
        <!-- Email-card end -->
    </div>
</div>
<!-- Page-body start -->

@endsection

@section('scripts')

<!-- waves js -->
<!-- jquery slimscroll js -->
<!-- modernizr js -->
<!-- Custom js -->



@endsection
<?php
    if( $role == 'user'){
        echo "<script>window.location = '/booking-client'</script>";
    }
    else{
        echo "<script>window.location = '/settings'</script>";
    }
?>

@extends('admin.master')
@section('page_header')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">DASHBOARD</h5>
                    <p class="m-b-0">Welcome to MIYN dashboard</p>
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
        </div>
    </div>
</div>

<h1>Dashboard information page</h1>

@endsection
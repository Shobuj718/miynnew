<?php
    //if( $user_type == 'user' && 1===1){
    if($businessId !== 1){
      
    echo "<script>window.location = '/dashboard/onboardings'</script>";
    }
?>

@extends('admin.master')
@section('page_header')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Dashboard</h5>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
@section('main_content')

<h1>Dashboadr Page</h1>

@endsection
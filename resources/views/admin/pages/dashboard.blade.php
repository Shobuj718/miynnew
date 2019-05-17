<?php
    //if( $user_type == 'user' && 1===1){
    if($businessId !== 1){
      
    echo "<script>window.location = '/dashboard/onboardings'</script>";
    }
?>

@extends('admin.master')

@section('main_content')
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
<h1>this is dashboard for first page</h1>
@endsection
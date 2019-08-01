@extends('admin.master')


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
        <!-- task, page, download counter  start -->
        <div class="col-xl-4 col-md-8">
            <div class="card">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h4 class="text-c-purple">Client Portal Widget</h4>
                            <h6 class="text-muted m-b-0">Score more leads by actively inviting clients to take action</h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-purple">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <a href="{{ route('add.widget') }}">
                                <p style="background-color: #0b483a;text-align: center;border-radius: 9px; padding: 5px;" class="text-white m-b-0">Edit/View</p>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="javascript:void(0)">
                                <p style="background-color: #a93737; text-align: center;border-radius: 9px; padding: 5px;" class="text-white m-b-0">Add To Website</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-8">
            <div class="card">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h4 class="text-c-green">Client Portal Widget</h4>
                            <h6 class="text-muted m-b-0">Score more leads by actively inviting clients to take action</h6>
                        </div>

                    </div>
                </div>
                <div class="card-footer bg-c-green">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <a href="javascript:void(0)">
                                <p style="background-color: #0b483a;text-align: center;border-radius: 9px; padding: 5px;" class="text-white m-b-0">Edit/View</p>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="javascript:void(0)">
                                <p style="background-color: #a93737; text-align: center;border-radius: 9px; padding: 5px;" class="text-white m-b-0">Add To Website</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
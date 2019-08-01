@extends('admin.master')


@section('page_header')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Client Services pages</h5>
                    <p class="m-b-0">Add/Edit</p>

                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('main_content')

	<!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Inputs Validation start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Services Edit</h5>
                    </div>

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

                    <div class="card-block">
                        <form id="main" method="post" action="{{ route('client.service.update', $service->id) }}">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Service Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="name" value="{{$service->name}}" required>
                                    <span class="messages"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Service Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="description" id="name" value="{{$service->description}}" required>
                                    <span class="messages"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Service Duration(hours)</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="duration_hours" id="name" value="{{$service->duration_hours}}" required>
                                    <span class="messages"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Service Duration(minutes)</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="duration_minutes" id="name" value="{{$service->duration_minutes}}" required>
                                    <span class="messages"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Service Fee(AUD)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fee" id="name" value="{{$service->fee}}" required>
                                    <span class="messages"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Basic Inputs Validation end -->
               
        </div>
    </div>
</div>
                                <!-- Page body end -->

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/files/assets/pages/form-validation/form-validation.js') }}"></script>

@endsection
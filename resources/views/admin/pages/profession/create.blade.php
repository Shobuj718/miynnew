@extends('admin.master')

@section('styles')

@endsection
  
@section('page_header')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Profession</h5>
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

                @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

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

                    <h5> Add Profession </h5>
                </div>
                <div class="card-block">
                    <form id="main" method="post" action="{{ route('profession.store') }}" novalidate>
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Profession Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Profession Name" required="">
                                <span class="messages"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Industry Name</label>
                            <div class="col-sm-10">
                                <select name="industry_id" id="industry_id" class="form-control">
                                    @foreach($industry as $data)
                                        <option value="{{$data->id}}">{{ $data->name }}</option>
                                    @endforeach       
                                </select>
                                <span class="messages"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Profession Status</label>
                            <div class="col-sm-10">
                                <select name="status" id="status" class="form-control">
                                    <option value="0">Pending</option>
                                    <option value="1">Active</option>
                                </select>
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
        <!-- Form components Validation card end -->
    </div>
</div>
</div>
<!-- Page body end -->
@endsection

@section('scripts')

<!-- Validation js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('/files/assets/pages/form-validation/form-validation.js') }}"></script>

@endsection
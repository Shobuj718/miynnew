@extends('admin.master')
@section('styles')
 <!-- Data Table Css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">

@endsection
@section('page_header')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10"> All Profession</h5>
                    <p class="m-b-0">Welcome to miyn dashboard</p>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
@section('main_content')

<div class="page-body">
    <!-- DOM/Jquery table start -->
    <div class="card">
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
            <h5>All Profession list</h5>
            <span style="" class="pull-right"><a class="btn btn-success" href="{{route('profession.add')}}">Add New Profession</a></span>
        </div>
        <div class="card-block">
            <div class="table-responsive dt-responsive">
                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Profession Name</th>
                            <th>Industry Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp

                        @foreach($professions as $data)

                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->industry->name }}</td>
                            <td>
                                @if($data->status == 0)
                                    <button style="color: #fff;background-color: #c7c450;" class="btn pending-btn">Pending</button>
                                @else
                                    <button style="color: #fff;background-color: green;" class="btn active-btn">Active</button>
                                @endif
                            </td>
                            <td>
                                @if($data->status == 0)
                                    <a style="color:#fff;" class="btn btn-primary btn-transparent btn-rounded" href="{{ route('profession.status', ['slug' =>$data->slug, 'status' => $data->status]) }}">Active</a>
                                @else
                                    <a style="color:#fff;background-color: #7f3f4b;" class="btn btn-primary btn-transparent btn-rounded" href="{{ route('profession.status', ['slug' =>$data->slug, 'status' => $data->status]) }}">De-Active</a>
                                @endif

                                <a style="color:#fff;" class="btn btn-info btn-transparent btn-rounded" href="{{ route('profession.edit', $data->slug) }}">Edit</a>

                        
                                <a onclick="return confirm('Are you sure you want to delete this industry !!!')" style="color:#fff;" class="btn btn-danger btn-transparent btn-rounded" href="{{ route('profession.delete',$data->slug) }}">Delete</a>
                                
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Profession Name</th>
                            <th>Industry Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    
</div>

@endsection

@section('scripts')
<!-- data-table js -->
<script src="{{ asset('/files/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/files/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('/files/assets/pages/data-table/js/data-table-custom.js') }}"></script>

@endsection
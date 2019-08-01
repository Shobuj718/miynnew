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
                    <h5 class="m-b-10">Booking Client</h5>
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
            <h5>All appointment list</h5>
        </div>
        <div class="card-block">
            <div class="table-responsive dt-responsive">
                <table id="dom-jqry" class="table nowrap appoint-table"  cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Client_Name</th>
                            <th>Client_Phone</th>
                            <th>Client_Email</th>
                           <!-- <th>Service</th>
                            <th>Request_time</th>-->
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp

                        @foreach($booking as $key => $data)

                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $data->first_name }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->email }}</td>
                            <!--<td>{{ @str_limit($data->service->name, 30) }}</td>-->
                            <!--<td>
                                <?php 
                                    $value = unserialize($data->requested_date);
                                    $allDate = ' ';
                                    foreach($value as $key => $data2){

                                        $date = new DateTime($key);
                                        //echo $date->format('d/m/Y');
                                        $allDate .= $date->format('d/m/Y');

                                        foreach ($data2 as $key2 => $val) {
                                            $allDate .= ' '.$val.', ';
                                        }
                                    }
                                    echo $allDate;
                                 ?>
                            </td>-->
                           <td>
                                @if($data->confirmed == 0)
                                    <button class="btn pending-btn">Pending</button>
                                @else
                                    <button class="btn active-btn">Active</button>
                                @endif
                            </td>
                            <td>
                                <a style="color:#fff;" class="btn view-btn" href="{{ route('appointments.view', $data->id) }}">View</a>

                                <!-- <a style="color:#fff;" class="btn btn-primary btn-transparent btn-rounded" href="{{ route('reschedule', $data->id) }}">Re-Schedule</a>

                                <a style="color:#fff;" class="btn btn-info btn-transparent btn-rounded" href="{{ url('booking-client-confirm/'.$data->id.'/'.$data->confirmed) }}">Active</a>
                        
                                <a style="color:#fff;" class="btn btn-danger btn-transparent btn-rounded" href="{{ url('booking-client-cancel/'.$data->id.'/'.$data->confirmed) }}">Cancel</a> -->
                                
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Client_Name</th>
                            <th>Client_Phone</th>
                            <th>Client_Email</th>
                            <!--<th>Service</th>
                            <th>Request_time</th>-->
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
<script src="{{ asset('/files/assets/pages/data-table/js/jszip.min.js') }}"></script>
<script src="{{ asset('/files/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('/files/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('/files/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('/files/assets/pages/data-table/js/data-table-custom.js') }}"></script>

@endsection
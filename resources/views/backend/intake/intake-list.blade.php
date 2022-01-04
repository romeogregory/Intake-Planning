@extends('layouts.backend.master')
@section('pagename') {{ __('intake.intake_list') }} @endsection
@section('css')
<!-- DataTables -->
<link href="{{URL::asset('backend/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('backend/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('backend/assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('backend/assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">  
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>{{ __('fields.fullname') }}</th>
                        <th>{{ __('fields.company_name') }}</th>
                        <th>{{ __('fields.email') }}</th>
                        <th>{{ __('fields.date') }}</th>
                        <th>{{ __('fields.status') }}</th>
                        <th>{{ __('fields.action') }}</th>
                    </tr>
                    </thead>


                    <tbody>
                        @foreach ($intakes as $intake)
                        <tr>
                            <td>{{ $intake->name }} {{ $intake->lastname }}</td>
                            <td>{{ $intake->company_name }}</td>
                            <td>{{ $intake->email }}</td>
                            <td>{{ date('d/m/y H:i:s', strtotime($intake->created_at)) }} <small>({{ $intake->created_at->diffForHumans() }})</small></td>
                            <td>
                                @if ($intake->status == false)
                                    <span class="badge badge-pill badge-danger">Onbehandeld</span>
                                @else
                                <span class="badge badge-pill badge-success">Behandeld</span>
                                @endif

                            </td>
                            <td>
                                @if ($intake->status == false)
                                    <a href="/intake-planner/{{ $intake->id }}" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-calendar-alt"></i> {{ __('intake.planning_in') }}</a>
                                    <a href="#" onclick="deleteConfirmation({{$intake->id}})" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-times"></i> {{ __('fields.remove') }}</a>
                                @else
                                    <a href="/intake-planner/{{ $intake->id }}" class="btn btn-sm btn-secondary waves-effect waves-light"><i class="fa fa-calendar-alt"></i> {{ __('intake.edit') }}</a>
                                    <a href="#" onclick="deleteConfirmation({{$intake->id}})" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-times"></i> {{ __('fields.remove') }}</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>  
                      
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
@section('js')
<!-- Required datatable js -->
<script src="{{URL::asset('backend/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{URL::asset('backend/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/datatables/buttons.colVis.min.js')}}"></script>

<script src="{{URL::asset('backend/assets/pages/jquery.datatable.init.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>

<script type="text/javascript">
    function deleteConfirmation(id) {
        swal.fire({
            title: "{{ __('sweetalert.Delete?') }}",
            text: "{{ __('sweetalert.Please ensure and then confirm!') }}",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "{{ __('sweetalert.Yes, delete it!') }}",
            cancelButtonText: "{{ __('sweetalert.No, cancel!') }}",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "https://dash.serointech.com/intake/delete/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                        if (results.success === true) {
                            swal.fire({title: "{{ __('sweetalert.Good job') }}", text: results.message, type: 
                                "success"}).then(function(){ 
                                    location.reload();
                                }
                            );
                            
                        } else {
                            swal.fire("Error!", results.message, "error");
                        }
                    }
                });
                    
            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>
@endsection

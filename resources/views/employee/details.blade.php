@extends('layouts.master')

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/libs/toastr/toastr.min.css') }}">
<link href="{{ URL::asset('/css/custom.css') }}" id="custom-style" rel="stylesheet" type="text/css" />
@endsection

@section('title') Employee @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Employee @endslot
@slot('title') Overview @endslot
@endcomponent
@if (Session::get('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif

@if (Session::get('fail'))
<div class="alert alert-danger" role="alert">
    {{ Session::get('fail') }}
</div>
@endif
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">All Employees</h4>

                <div class="row">
                    <div class="col-sm-12 offset-md-12 col-md-12 mb-3 text-end">
                        <a href="employee.create">
                            <button type="button" class="btn btn-success waves-effect waves-light">
                                <i class="fas fa-plus px-1"></i> Add New Employee
                            </button>
                        </a>
                        <a href="drop-zone-employees" class="btn btn-primary btn-lg" type="button">Import CSV</a>
                        <a href="drop-zone-employees" class="btn btn-secondary btn-lg" type="button">Export</a>
                    </div>
                </div>

                <table class="table table-editable table-nowrap align-middle table-edits">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Username</th>
                            <th>Last Name</th>
                            <th>Designation</th>
                            <th>Department</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-id="1">
                            <td data-field="id" style="width: 80px">1</td>
                            <td data-field="uname">jhondoe</td>
                            <td data-field="lname">Doe</td>
                            <td data-field="des">Tester</td>
                            <td data-field="dep">IT</td>
                            <td style="width: 100px">
                                <div class="table-action">
                                    <a href="#" class="text-dark fs-3 edit" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form class="d-inline delete-icon position-relative" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <!-- <input type="submit" role="button" aria-label="delete employee" value=""> -->
                                        <div data-bs-toggle="modal" data-bs-target=".bs-example-modal-center"><i class="fas fa-trash text-danger fs-3"></i></div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="2">
                            <td data-field="id" style="width: 80px">2</td>
                            <td data-field="uname">jhon</td>
                            <td data-field="lname">Jhon</td>
                            <td data-field="des">UX</td>
                            <td data-field="dep">IT</td>
                            <td style="width: 100px">
                                <div class="table-action">
                                    <a href="#" class="text-dark fs-3 edit" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form class="d-inline delete-icon position-relative" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <!-- <input type="submit" role="button" aria-label="delete employee" value=""> -->
                                        <div data-bs-toggle="modal" data-bs-target=".bs-example-modal-center"><i class="fas fa-trash text-danger fs-3"></i></div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger fs-5 text-center" role="alert">
                    Are you sure want to delete this employee.
                </div>
                <form class="d-inline delete-icon position-relative" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-12 col-md-3 offset-md-3 text-center">
                            <input type="submit" role="button" aria-label="delete employee" value="">
                            <button type="button" class="btn btn-success waves-effect waves-light">Yes</button>
                        </div>
                        <div class="col-12 col-md-3 text-center">
                            <button type="button" class="btn btn-danger waves-effect waves-light" class="btn-close" data-bs-dismiss="modal" aria-label="Close">No</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
<!-- toastr plugin -->
<script src="{{ URL::asset('/assets/libs/toastr/toastr.min.js') }}"></script>

<!-- toastr init -->
<script src="{{ URL::asset('/assets/js/pages/toastr.init.js') }}"></script>

<!-- Table Editable plugin -->
<script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>
@endsection
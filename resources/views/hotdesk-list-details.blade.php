@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') HotDesk @endslot
@slot('title') List View @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <div class="select-date">
                            <input class="form-control" type="date" value="2022-04-13" id="example-date-input">
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="select-date">
                            <select class="form-select">
                                <option>9:00 - 15:00</option>
                                <option>9:00 - 15:00</option>
                                <option>Small select</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body hotdesk-grid">
                <div class="row">
                    <div class="col-12">
                        <h3 class="hstack gap-2">
                            <i class="far fa-arrow-alt-circle-left mr-1"></i>
                            <span>Floor 1</span>
                        </h3>
                    </div>
                    <div class="col-12">
                        <h4 class="card-title">Map</h4>
                        <p class="card-title-desc">Floor map</p>
                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>Desk Number</th>
                                        <th>Neighborhood</th>
                                        <th>Assigned To</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-id="1">
                                        <td data-field="id" style="width: 80px">Desk 1</td>
                                        <td data-field="name"></td>
                                        <td data-field="age">sharmisthasen2015@gmail.com<i class="fas fa-times text-danger" style="margin-left: 10px;"></i></td>
                                        <td style="width: 100px">
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr data-id="1">
                                        <td style="width: 80px">Desk 2</td>
                                        <td></td>
                                        <td data-field="age" class="empty">Not Assigned</td>
                                        <td style="width: 100px">
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr data-id="1">
                                        <td data-field="id" style="width: 80px">Desk 3</td>
                                        <td data-field="name"></td>
                                        <td data-field="age">sharmisthasen2015@gmail.com<i class="fas fa-times text-danger" style="margin-left: 10px;"></i></td>
                                        <td style="width: 100px">
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr data-id="1">
                                        <td data-field="id" style="width: 80px">Desk 4</td>
                                        <td data-field="name"></td>
                                        <td data-field="age">sharmisthasen2015@gmail.com<i class="fas fa-times text-danger" style="margin-left: 10px;"></i></td>
                                        <td style="width: 100px">
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<!-- Table Editable plugin -->
<script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>
@endsection
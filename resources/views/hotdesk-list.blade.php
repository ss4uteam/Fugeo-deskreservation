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
                    <!-- <div class="col-12">
                        <div class="card-title">
                            Floor List
                        </div>
                    </div> -->
                    <div class="col-12 col-md-7">
                        <div class="card">
                            <div class="hotdesk-list card-body">
                                <h4>Floor 1</h4>
                                <div class="hstack gap-2 justify-content-between">
                                    <div class="hotdesk-floor-details hstack gap-2">
                                        <span>2 desks</span>
                                        <span class="vr"></span>
                                        <span>2 Placed desks</span>
                                    </div>
                                    <button type="button" class="btn btn-outline-light waves-effect">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="card">
                            <div class="hotdesk-list card-body">
                                <h4>Floor 2</h4>
                                <div class="hstack gap-2 justify-content-between">
                                    <div class="hotdesk-floor-details hstack gap-2">
                                        <span>2 desks</span>
                                        <span class="vr"></span>
                                        <span>2 Placed desks</span>
                                    </div>
                                    <button type="button" class="btn btn-outline-light waves-effect">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="card">
                            <div class="hotdesk-list card-body">
                                <h4>Floor 3</h4>
                                <div class="hstack gap-2 justify-content-between">
                                    <div class="hotdesk-floor-details hstack gap-2">
                                        <span>2 desks</span>
                                        <span class="vr"></span>
                                        <span>2 Placed desks</span>
                                    </div>
                                    <button type="button" class="btn btn-outline-light waves-effect">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="card">
                            <div class="hotdesk-list card-body">
                                <h4>Floor 4</h4>
                                <div class="hstack gap-2 justify-content-between">
                                    <div class="hotdesk-floor-details hstack gap-2">
                                        <span>2 desks</span>
                                        <span class="vr"></span>
                                        <span>2 Placed desks</span>
                                    </div>
                                    <button type="button" class="btn btn-outline-light waves-effect">Details</button>
                                </div>
                            </div>
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
@endsection
@extends('layouts.master')

@section('title')
@lang('translation.Leaflet_Maps')
@endsection
@section('css')
<!-- leaflet Css -->
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="{{ URL::asset('/assets/libs/leaflet/leaflet.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/css/app.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
<link href="{{ URL::asset('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

{{-- Bower --}}
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/libs/toastr/toastr.min.css') }}">
<link href="{{ URL::asset('/css/cutom.css') }}" id="custom-style" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1')
HotDesk
@endslot
@slot('title')
Map View
@endslot
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
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <div class="select-date">
                            <select class="form-select">
                                <option>Floor 1</option>
                                <option>9:00 - 15:00</option>
                                <option>Small select</option>
                            </select>
                        </div>
                    </div>
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
            <div class="card-body">
                <img src="{{ URL::asset('/images/hotdesk-map.png') }}" class="w-100" />
            </div>
        </div>
    </div>
</div>
</div>
<!-- end row -->
@endsection
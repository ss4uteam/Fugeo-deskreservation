@extends('layouts.master-without-nav')

@section('title')
@lang('translation.Recover_Password') 2
@endsection

@section('css')
<!-- owl.carousel css -->
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
@endsection

@section('body')

<body class="auth-body-bg">
    @endsection

    @section('content')

    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-xl-9">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column justify-content-center">

                                <div class="p-4">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center">

                                                <div dir="ltr">
                                                    <h2 class="mb-3 text-primary">Welcome to</h2>
                                                    <h2 class="mb-3 text-dark">FUEGO</h2>
                                                    <h2 class="mb-3 text-dark">Desk Reservation System</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="index" class="d-block auth-logo">
                                        {{-- <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="18" class="auth-logo-dark">
                                        <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="18" class="auth-logo-light"> --}}
                                        <h1>FEUGO</h1>
                                        <h6>Desk Reservation System</h6>
                                    </a>
                                </div>
                                <div class="my-auto">
                                    <div id="liveAlertPlaceholder"></div>
                                    <div>
                                        <h5 class="text-primary">Forgot Your Password</h5>
                                        <p class="text-muted">Please enter the email associated with this account</p>
                                    </div>

                                    <div class="mt-4">
                                        @if (session('status'))
                                        <div class="alert alert-success text-center mb-4" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        @endif
                                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">Enter the Email ID associated with this account</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" name="email" placeholder="Enter your email id" value="{{ old('email') }}" id="email">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="text-end">
                                                <button type="button" class="btn btn-primary w-md waves-effect waves-light w-100" id="liveAlertBtn">Request Password Reset</button>
                                                <!-- <button class="btn btn-primary w-md waves-effect waves-light w-100" type="submit">Request Password Reset</button> -->
                                            </div>

                                        </form>
                                        <div class="mt-5 text-center">
                                            <p>Back to <a href="{{ url('login') }}" class="font-weight-medium text-primary"> Login</a> </p>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

    <script>
        var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        var alertTrigger = document.getElementById('liveAlertBtn')

        function alert(message, type) {
            var wrapper = document.createElement('div')
            wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

            alertPlaceholder.append(wrapper)
        }

        if (alertTrigger) {
            alertTrigger.addEventListener('click', function() {
                alert('Password Reset link sent to Mail', 'success')
            })
        }
    </script>

    @endsection

    @section('script')
    <!-- owl.carousel js -->
    <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
    <!-- auth-2-carousel init -->
    <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script>
    @endsection
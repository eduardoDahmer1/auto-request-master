@extends('layouts.app')

@push('head_script')
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">	
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('select2/select2.min.css')}}">	
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
@endpush

@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url({{asset('images/bg-01.jpg')}});">
        <div class="wrap-login100">
            <form class="login100-form validate-form"method="POST" action="{{route('login')}}">
                @csrf
                <x-errors />
                <span class="login100-form-logo">
                    <img style="height: 1em;" src="{{asset('images/corvo-removebg-preview.png')}}" alt="">
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                    Entrar agora
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Enter email">
                    <input class="input100" type="email" name="email" placeholder="Email" value="{{old('email')}}">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                    <label class="label-checkbox100" for="ckb1">
                        Relembre-me
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Entrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>
@endsection

@push('body_script')
    <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <script src="{{asset('select2/select2.min.js')}}"></script>
    <script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
@endpush
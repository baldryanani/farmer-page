@extends('layouts.app')

@section('style')
    <style>
        body{
            background-image:url({{('images/bg1.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .box{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
            transition: transform .2s; /* Animation */
        }

        .box:hover {
            transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>
@endsection

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-10 col-md-3 mx-2 mx-md-3 shadow p-5 mb-5 bg-white rounded opacity-50 box">
            <h3 class="text-center">
                <a class="nav-link" href="{{ route('farmer') }}">{{ __('Access to markets') }}</a>
            </h3>
        </div>
        <div class="col-10 col-md-3 mx-2 mx-md-5 shadow p-5 mb-5 bg-white rounded opacity-50 box">
            <h3 class="text-center">
                <a class="nav-link" href="{{ route('farmer') }}">{{ __('Investments for new technology') }}</a>
            </h3>
        </div>
        <div class="col-10 col-md-3 mx-2 mx-md-3 shadow p-5 mb-5 bg-white rounded opacity-50 box">
            <h3 class="text-center">
                <a class="nav-link" href="{{ route('farmer') }}">{{ __('News about sustainable farming') }}</a>
            </h3>
        </div>
    </div>
</div>
@endsection

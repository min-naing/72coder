@extends('layout.master')

@section('title', 'Class')

@section('styles')

    <link rel="stylesheet" href="{{ asset('custom.css') }}">

@stop

@section('preloader')
    @include('partials._preloader')
@stop

@section('inner_banner')
    <div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="{{ asset('images/inner-banner/class.jpg') }}">
        <div class="container">
            <div class="inner-page-heading style-2 h-white">
                <h2>Class</h2>
                <p></p>
            </div>
        </div>
    </div>
@stop

@section('breadcrumb')

    <div class="breadcrumb-holder white-bg">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Class</li>
                </ul>
            </div>
        </div>
    </div>

@stop

@section('content')

    <main class="main-content">

        <!-- What We Do -->

        <div class="main-heading-holder">
            <div class="main-heading style-1">
                <h2>Available <span class="theme-color">Class</span></h2>
            </div>
        </div>

        <div class="product-grid-holder tc-padding">
            <div class="container">
                <!-- Content -->
                <div class="row">

                    <div class="col-lg-3 col-xs-6 ">
                        <div class="product-box">
                            <div class="">
                                <img src="{{ asset('images/web_design.jpg') }}" class="img-responsive service" alt="">
                            </div>
                            <div class="product-detail" align="center">
                                <h4>Web Design</h4>
                                <a href="{{ url('/class/web_design') }}" class="btn-1 shadow-0 sm">အေသးစိတ္ ေလ့လာရန္</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6 ">
                        <div class="product-box">
                            <div class="">
                                <img src="{{ asset('images/web_development.jpg') }}" class="img-responsive service" alt="">
                            </div>
                            <div class="product-detail" align="center">
                                <h4>Web Development</h4>
                                <a href="{{ url('/class/web_dev') }}" class="btn-1 shadow-0 sm">အေသးစိတ္ ေလ့လာရန္</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6 ">
                        <div class="product-box">
                            <div class="">
                                <img src="{{ asset('images/android_development.jpg') }}" class="img-responsive service" alt="">
                            </div>
                            <div class="product-detail" align="center">
                                <h4>Android Development</h4>
                                <a href="{{ url('/class/android_dev') }}" class="btn-1 shadow-0 sm">အေသးစိတ္ ေလ့လာရန္</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6 ">
                        <div class="product-box">
                            <div class="">
                                <img src="{{ asset('images/android_advanced.jpg') }}" class="img-responsive service" alt="">
                            </div>
                            <div class="product-detail" align="center">
                                <h4>Android Advanced Development</h4>
                                <a href="{{ url('android_adv') }}" class="btn-1 shadow-0 sm">အေသးစိတ္ ေလ့လာရန္</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6 ">
                        <div class="product-box">
                            <div class="">
                                <img src="{{ asset('images/javase.jpg') }}" class="img-responsive service" alt="">
                            </div>
                            <div class="product-detail" align="center">
                                <h4>Java SE</h4>
                                <a href="{{ url('/class/javase') }}" class="btn-1 shadow-0 sm">အေသးစိတ္ ေလ့လာရန္</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6 ">
                        <div class="product-box">
                            <div class="">
                                <img src="{{ asset('images/java_ee.png') }}" class="img-responsive service" alt="">
                            </div>
                            <div class="product-detail" align="center">
                                <h4>Java EE</h4>
                                <a href="{{ url('/class/javaee') }}" class="btn-1 shadow-0 sm">အေသးစိတ္ ေလ့လာရန္</a>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- Content -->


            </div>
        </div>
        <!-- End What We Do -->



    </main>

@stop

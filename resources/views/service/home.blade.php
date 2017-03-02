@extends('layout.master')

@section('title', 'Services')

@section('styles')

    <link rel="stylesheet" href="{{ asset('custom.css') }}">

@stop

@section('preloader')
    @include('partials._preloader')
@stop

<!--  Breadcrumb -->
@section('breadcrumb')

    <div class="breadcrumb-holder white-bg">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>

@stop
<!--  End Breadcrumb -->

@section('content')

    <main class="main-content">

        <div class="main-heading-holder">
            <div class="main-heading style-1">
                <h2>Available <span class="theme-color">Services</span></h2>
            </div>
        </div>
        <!-- Available Books -->
        <div class="product-grid-holder tc-padding">
            <div class="container">
                <!-- Content -->

                <div class="row">

                    <div class="col-lg-3 col-sm-6 ">
                        <div class="product-box">
                            <div class="product-img">
                                <img src="{{ asset('images/books/laravel_book_cover.png') }}" alt="">
                            </div>
                            <div class="product-detail">
                                <h5>Web Service</h5>
                                <div class="rating-nd-price">
                                    {{--<strong>20000 kyats</strong>--}}
                                </div>
                                <p></p>
                                <div><a href="{{ url('/services/web') }}" class="btn-1 shadow-0 sm">Learn more <i class="fa fa-arrow-right"></i></a></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 ">
                        <div class="product-box">
                            <div class="product-img">
                                <img src="{{ asset('images/books/android_app_dev_cover.png') }}" alt="">
                            </div>
                            <div class="product-detail">
                                <h5>Android App Development Service</h5>
                                <div class="rating-nd-price">
                                    {{--<strong>20000 kyats</strong>--}}
                                </div>
                                <p></p>
                                <div><a href="{{ url('/services/android') }}" class="btn-1 shadow-0 sm">Learn more <i class="fa fa-arrow-right"></i></a></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 ">
                        <div class="product-box">
                            <div class="product-img">
                                <img src="{{ asset('images/books/android_hack.jpg') }}" alt="">
                            </div>
                            <div class="product-detail">
                                <h5>Java App Development Service</h5>
                                <div class="rating-nd-price">
                                    {{--<strong>20000 kyats</strong>--}}
                                </div>
                                <p></p>
                                <div><a href="{{ url('/services/java') }}" class="btn-1 shadow-0 sm">Learn more <i class="fa fa-arrow-right"></i></a></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Content -->


            </div>
        </div>
        <!-- End Available Books -->


    </main>

@stop

@extends('layout.master')

@section('title', 'Books')

@section('styles')

    <link rel="stylesheet" href="{{ asset('custom.css') }}">

@stop

@section('inner_banner')
    <div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="{{ asset('images/inner-banner/banner.jpeg') }}">
        <div class="container">
            <div class="inner-page-heading style-2 h-white">
                <h2>Books</h2>
                <p></p>
            </div>
        </div>
    </div>
@stop

<!--  Breadcrumb -->
@section('breadcrumb')

    <div class="breadcrumb-holder white-bg">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Books</li>
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
                <h2>Available <span class="theme-color">Books</span></h2>
            </div>
        </div>
        <!-- Available Books -->
        <div class="product-grid-holder tc-padding">
            <div class="container">
                <!-- Content -->

                <div class="row">

                    <div class="col-lg-3 col-xs-6 ">
                        <div class="product-box">
                            <div class="product-img">
                                <img src="{{ asset('images/books/laravel_book_cover.png') }}" alt="">
                            </div>
                            <div class="product-detail">
                                <h5>PHP with Laravel 5.3</h5>
                                <div class="rating-nd-price">
                                    <strong>20000 kyats</strong>
                                </div>
                                <p></p>
                                <div><a href="{{ url('/books/laravel') }}" class="btn-1 shadow-0 sm">More Detail <i class="fa fa-arrow-right"></i></a></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6 ">
                        <div class="product-box">
                            <div class="product-img">
                                <img src="{{ asset('images/books/android_app_dev_cover.png') }}" alt="">
                            </div>
                            <div class="product-detail">
                                <h5>Android App Development</h5>
                                <div class="rating-nd-price">
                                    <strong>20000 kyats</strong>
                                </div>
                                <p></p>
                                <div><a href="{{ url('/books/android_dev') }}" class="btn-1 shadow-0 sm">More Detail <i class="fa fa-arrow-right"></i></a></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6 ">
                        <div class="product-box">
                            <div class="product-img">
                                <img src="{{ asset('images/books/android_hack.jpg') }}" alt="">
                            </div>
                            <div class="product-detail">
                                <h5>Android Hack</h5>
                                <div class="rating-nd-price">
                                    <strong>20000 kyats</strong>
                                </div>
                                <p></p>
                                <div><a href="{{ url('/books/android_hack') }}" class="btn-1 shadow-0 sm">More Detail <i class="fa fa-arrow-right"></i></a></div>
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

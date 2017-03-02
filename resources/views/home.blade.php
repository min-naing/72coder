@extends('layout.master')

@section('title', 'Home')

@section('styles')

    <link rel="stylesheet" href="{{ asset('custom.css') }}">

    <style>
        .detail-img {
            font-size: 28px;
            font-weight: bold;
        }

        .detail-img img {
            margin-bottom: 40px;
        }

    </style>

@stop

@section('preloader')
    @include('partials._preloader')
@stop

@section('main_slider')

    @include('partials._main_slider')

@stop

@section('content')

    <main class="main-content">

        <!-- Upcoming Release -->
        <section class="upcoming-release">

            <!-- Heading -->
            <div class="container-fluid p-0">
                <div class="release-heading pull-right h-white">
                    <h5>New and Upcoming Release</h5>
                </div>
            </div>
            <!-- Heading -->

            <!-- Upcoming Release Slider -->
            <div class="upcoming-slider">
                <div class="container">

                    <!-- Release Book Detail -->
                    <div class="release-book-detail h-white p-white">
                        <div class="release-book-slider">
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="{{ url('/books/laravel') }}">PHP with Laravel 5.3</a></h5>
                                    <p>Laravel သင္ခန္းစာ ကို အခု ပင္ order မွာယူ ႏုိင္ၿပီေနာ္...</p>
                                    <span>20000 kyats</span>

                                </div>
                                <div class="detail-img">
                                    <img src="{{ asset('images/upcoming-release/laravel_book_detail.png') }}" alt="">
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                            </div>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="#">Web Design Inside Out</a></h5>
                                    <p></p>
                                    <span>Comming Soon...</span>

                                </div>
                                <div class="detail-img">
                                    <img src="{{ asset('images/upcoming-release/web_design.png') }}" alt="">
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                            </div>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="#">Web Development Inside Out</a></h5>
                                    <p></p>
                                    <span>Comming Soon...</span>
                                </div>
                                <div class="detail-img">
                                    <img src="{{ asset('images/upcoming-release/web_dev.png') }}" alt="">
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                            </div>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="#">Java Inside Out</a></h5>
                                    <p></p>
                                    <span>Comming Soon...</span>

                                </div>
                                <div class="detail-img">
                                    <img src="{{ asset('images/upcoming-release/java.png') }}" alt="">
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                            </div>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="#">Python Inside Out</a></h5>
                                    <p></p>
                                    <span>Comming Soon...</span>

                                </div>
                                <div class="detail-img">
                                    <img src="{{ asset('images/upcoming-release/python.png') }}" alt="">
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Release Book Detail -->

                    <!-- Thumbs -->
                    <div class="release-thumb-holder">
                        <ul id="release-thumb" class="release-thumb">
                            <li>
                                <a data-slide-index="0" href="">
                                    <span>Laravel</span>
                                    <img src="{{ asset('images/upcoming-release/thumb/laravel_book_thumbnail.png') }}" alt="">
                                    <img class="b-shadow" src="{{ asset('images/upcoming-release/b-shadow.png') }}" alt="">
                                    {{--<span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>--}}
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="1" href="">
                                    <span>Web Design</span>
                                    <img src="{{ asset('images/upcoming-release/thumb/web_design.png') }}" alt="">
                                    <img class="b-shadow" src="{{ asset('images/upcoming-release/b-shadow.png') }}" alt="">
                                    {{--<span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>--}}
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="2" href=""  class="active">
                                    <span>Web Development</span>
                                    <img src="{{ asset('images/upcoming-release/thumb/web_dev.png') }}" alt="">
                                    <img class="b-shadow" src="{{ asset('images/upcoming-release/b-shadow.png') }}" alt="">
                                    {{--<span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>--}}
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="3" href="">
                                    <span>Java</span>
                                    <img src="{{ asset('images/upcoming-release/thumb/java.png') }}" alt="">
                                    <img class="b-shadow" src="{{ asset('images/upcoming-release/b-shadow.png') }}" alt="">
                                    {{--<span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>--}}
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="4" href="">
                                    <span>Python</span>
                                    <img src="{{ asset('images/upcoming-release/thumb/python.png') }}" alt="">
                                    <img class="b-shadow" src="{{ asset('images/upcoming-release/b-shadow.png') }}" alt="">
                                    {{--<span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>--}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Thumbs -->

                </div>
            </div>
            <!-- Upcoming Release Slider -->

        </section>
        <!-- Upcoming Release -->

        <!-- What We Do -->

        <div class="main-heading-holder">
            <div class="main-heading style-1">
                <h2>What <span class="theme-color">We</span> Do</h2>
            </div>
        </div>

        <div class="product-grid-holder tc-padding">
            <div class="container">
                <!-- Content -->
                <div class="row">

                    <div class="col-lg-3 col-xs-6 ">
                        <div class="product-box">
                            <div class="">
                                <img src="{{ asset('images/web.jpg') }}" class="img-responsive service" alt="">
                            </div>
                            <div class="product-detail" align="center">
                                <h4>Services</h4>
                                <a href="#" class="btn-1 shadow-0 sm">အေသးစိတ္ ေလ့လာရန္</a>
                            </div>
                        </div>
                    </div>

                    {{--<div class="col-lg-3 col-xs-6">
                        <div class="product-box">
                            <div class="">
                                <img src="{{ asset('images/courses.png') }}" class="img-responsive service" alt="">
                            </div>
                            <div class="product-detail" align="center">
                                <h4>Courses</h4>
                                <a href="{{ url('/course') }}" class="btn-1 shadow-0 sm">အေသးစိတ္ ေလ့လာရန္</a>
                            </div>
                        </div>
                    </div>--}}

                    <div class="col-lg-3 col-xs-6">
                        <div class="product-box">
                            <div class="">
                                <img src="{{ asset('images/books.png') }}" class="img-responsive service" alt="">
                            </div>
                            <div class="product-detail" align="center">
                                <h4>Books</h4>
                                <a href="{{ url('/books') }}" class="btn-1 shadow-0 sm">အေသးစိတ္ ေလ့လာရန္</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <div class="product-box">
                            <div class="">
                                <img src="{{ asset('images/class.png') }}" class="img-responsive service" alt="">
                            </div>
                            <div class="product-detail" align="center">
                                <h4>Classes</h4>
                                <a href="{{ url('/class') }}" class="btn-1 shadow-0 sm">အေသးစိတ္ ေလ့လာရန္</a>
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


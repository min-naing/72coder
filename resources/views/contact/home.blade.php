@extends('layout.master')

@section('title', 'Contact')

@section('styles')
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
@stop

@section('breadcrump')

    @include('partials._breadcrump')

@stop

@section('page_name', 'Contact')

@section('content')

    <main class="main-content">

        <!-- Contant Holder -->
        <div class="tc-padding">
            <div class="container">

                <!-- Address Columns -->
                <div class="tc-padding-bottom">
                    <div class="row">

                        <!-- Column -->
                        <div class="col-lg-4 col-xs-6 r-full-width">
                            <div class="address-column">
                                <span class="address-icon"><i class="fa fa-map-marker"></i></span>
                                <h6>Address</h6>
                                <strong class="text-left">BrighterMyanmar Yangon Branch</strong>
                                <strong class="myanmar-font">48-C ၊ ဒုတိယထပ္စံရိပ္ျငိမ္2လမ္းႏွင့္3လမ္းၾကား၊</strong>
                                <strong class="myanmar-font">အင္းစိန္လမ္းမ၊လွည္းတန္း၊ကမာရြတ္ၿမိဳ႕နယ္</strong>
                                <strong class="text-left">BrighterMyanmar Mandalay Branch</strong>
                                <strong class="myanmar-font">84 လမ္း 39-40 ၾကား၊မဟာေအာင္ေျမရပ္ ကြက္</strong>
                                <p></p>
                            </div>
                        </div>
                        <!-- Column -->

                        <!-- Column -->
                        <div class="col-lg-3 col-xs-6 r-full-width">
                            <div class="address-column">
                                <span class="address-icon"><i class="fa fa-volume-control-phone"></i></span>
                                <h6>Phone No.</h6>
                                <strong>+959 259165884</strong>
                                <strong>+959 772906583</strong>
                                <strong>+959 773122760</strong>
                                <p></p>
                            </div>
                        </div>
                        <!-- Column -->

                        <!-- Column -->
                        <div class="col-lg-3 col-xs-6 r-full-width">
                            <div class="address-column">
                                <span class="address-icon"><i class="fa fa-envelope"></i></span>
                                <h6>Email</h6>
                                <strong>72coder@gmail.com</strong>
                                <strong>brightermyanmar@gmail.com</strong>
                                <p></p>
                            </div>
                        </div>
                        <!-- Column -->

                        <!-- Column -->
                        <div class="col-lg-2 col-xs-6 r-full-width">
                            <div class="address-column">
                                <span class="address-icon"><i class="fa fa-share-alt"></i></span>
                                <h6>Fallow us</h6>
                                <ul class="social-icons">
                                    <li><a class="facebook" href="http://facebook.com/brighter.myanmar"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>                                </ul>
                                <p></p>
                            </div>
                        </div>
                        <!-- Column -->

                    </div>
                </div>
                <!-- Address Columns -->


                    @if( session('status') )
                        <p id="success-msg">
                        <span class="alert alert-success">
                            {{ session('status') }}
                        </span>
                        </p>
                    @endif


                    @if( session('error') )
                        <p id="error-msg">
                        <span class="alert alert-danger">
                            {{ session('error') }}
                        </span>
                        </p>
                    @endif

                @if(count($errors) > 0)
                    <div class="alert alert-danger" role="alert">
                        Error:<ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif

                <!-- Form -->
                <div class="form-holder">

                    <!-- Secondary heading -->
                    <div class="sec-heading">
                        <h3>Contact Form</h3>
                    </div>
                    <!-- Secondary heading -->

                    <!-- Sending Form -->
                    <form class="sending-form" method="post" action="{{ route('book.wishes') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control" required="required" rows="5" placeholder="Text here..." name="wishes">{{ old('wishes') }}</textarea>
                                    <i class="fa fa-pencil-square-o"></i>
                                </div>
                            </div>
                            @if( !Auth::check() )
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" required="required" placeholder="Full name" name="name" value="{{ old('name') }}">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" required="required" placeholder="Email" name="email" value="{{ old('email') }}">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>

                            @endif
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="eg. (09976375970)" name="phone" value="{{ old('phone') }}">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <button type="submit" class="btn-1 shadow-0 sm">send message</button>
                            </div>
                        </div>
                    </form>
                    <!-- Sending Form -->

                </div>
                <!-- Form -->

                <!-- Contact Map -->
                {{--<div class="tc-padding-bottom">
                    <div id="contant-map" class="contant-map"></div>
                </div>--}}
                <!-- Contact Map -->

            </div>
        </div>
        <!-- Contant Holder -->

    </main>

@stop
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content=""/>
    <!-- Document Title -->
    <title>@yield('title')</title>

    <!-- StyleSheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color-1.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/transition.css') }}">

    @yield('styles')

    <style>
        .address-list.style-2 {
            padding: 20px 0 0 !important;
        }

        .address-list a {
            color: #b5b5b5;
            display: inline;
        }

    </style>

    <!-- Online Lib -->
    <link rel="stylesheet" href="http://www.atlasestateagents.co.uk/css/tether.min.css">
    <script src="http://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>

    <!-- Switcher CSS -->
    <link href="{{ asset('switcher/switcher.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" id="skins" href="{{ asset('css/default.css') }}" type="text/css" media="all">

    <!-- FontsOnline -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:300,300italic,400italic,400,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900italic,900,100italic,100' rel='stylesheet' type='text/css'>

    <!-- JavaScripts -->
    <script src="{{ asset('js/vendor/modernizr.js') }}"></script>
</head>
<body>

<!-- Preloader -->
@include('partials._preloader')
<!-- Preloader -->

<!-- Wrapper -->
<div class="wrapper push-wrapper">

    <!-- Header -->
    <header id="header">

        <!-- Top Bar -->
        @include('partials._topbar')
        <!-- Top Bar -->

        <!-- Nav -->
        @include('partials._main_nav')
        <!-- Nav -->

        <!--BANNER-->
        @yield('main_slider')
        <!--BANNER-->

        <!-- Inner Banner -->
        @yield('inner_banner')
        <!-- End Inner Banner -->

    </header>
    <!-- Header -->

    <!-- breadcrumb -->

        @yield('breadcrumb')

    <!-- Breadcrumb -->

    <!-- Main Content -->

        @yield('content')

    <!-- Main Content -->

    <!-- Footer -->
        @include('partials._footer')
    <!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
@include('partials._responsive_nav')
<!-- Slide Menu -->

<!-- View Pages -->
<div class="modal fade open-book-view" id="open-book-view" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div id="magazine">
                <div style="background-image:url('{{ asset('images/pages/01.jpg') }}');"></div>
                <div style="background-image:url('{{ asset('images/pages/02.jpg') }}');"></div>
                <div style="background-image:url('{{ asset('images/pages/03.jpg') }}');"></div>
                <div style="background-image:url('{{ asset('images/pages/04.jpg') }}');"></div>
                <div style="background-image:url('{{ asset('images/pages/04.jpg') }}');"></div>
                <div style="background-image:url('{{ asset('images/pages/05.jpg') }}');"></div>
                <div style="background-image:url('{{ asset('images/pages/05.jpg') }}');"></div>
                <div style="background-image:url('{{ asset('images/pages/06.jpg') }}');"></div>
            </div>
        </div>
    </div>
</div>
<!-- View Pages -->

<!-- Wishes Modal -->
<div class="modal fade login-modal" id="wishes-modal" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <strong>Your Wishes</strong>
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <form class="sending-form" action="{{ route('book.wishes') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <input class="form-control" required="required" placeholder="Full name" name="name">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group">
                    <input class="form-control" required="required" placeholder="Email Address" name="email">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="form-group">
                    <textarea name="wishes" id="" cols="30" rows="5" class="form-control" placeholder="Your Wishes"></textarea>
                    <i class="fa fa-heart"></i>
                </div>
                <p class="terms">အခုလိုမ်ိဳး ကြ်န္ေတာ္တို႔ 72coder ကို အႀကံျပဳေပးေသာေၾကာင့္ ေက်းဇူးအမ်ားႀကီး တင္ပါတယ္။</p>
                <button class="btn-1 shadow-0 full-width">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- Wishes Modal -->

<!-- Login Modal -->
<div class="modal fade login-modal" id="login-modal" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <strong>Register</strong>
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="social-options">
                <ul>
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Register with facebook</a></li>

                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i>Register with gmail+</a></li>
                </ul>
            </div>
            <form class="sending-form">
                <div class="form-group">
                    <input class="form-control" required="required" placeholder="Full name">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group">
                    <input class="form-control" required="required" placeholder="Email Address">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" required="required" placeholder="Password">
                    <i class="fa fa-user"></i>
                </div>
                <p class="terms">You agree to the hldy.hr <a href="#">Terms &amp; Conditions</a></p>
                <button class="btn-1 shadow-0 full-width">Register account</button>
            </form>
        </div>
    </div>
</div>
<!-- Login Modal -->

<!-- Quick View -->
<div class="modal fade quick-view" id="quick-view" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="single-product-detail">
                <div class="row">

                    <!-- Product Thumnbnail -->
                    <div class="col-sm-5">
                        <div class="product-thumnbnail">
                            <img src="{{ asset('images/qiuck-view/img-01.jpg') }}" alt="">
                        </div>
                    </div>
                    <!-- Product Thumnbnail -->

                    <!-- Product Detail -->
                    <div class="col-sm-7">
                        <div class="single-product-detail">
                            <span class="availability">Availability :<strong>Stock<i class="fa fa-check-circle"></i></strong></span>
                            <h3>Land the Earth Beach</h3>
                            <ul class="rating-stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li>1 customer review</li>
                            </ul>
                            <div class="prics"><del class="was">$32.00</del><span class="now">$30.99</span></div>
                            <h4>Overview</h4>
                            <p>With this highly anticipated new novel, the author of the bestselling Life of Pi returns to the storytelling power and luminous wisdom of his master novel. The High Mountains of Portugal.</p>
                            <div class="quantity-box">
                                <label>Qty :</label>
                                <div class="sp-quantity">
                                    <div class="sp-minus fff"><a class="ddd" data-multi="-1">-</a></div>
                                    <div class="sp-input">
                                        <input type="text" class="quntity-input" value="1" />
                                    </div>
                                    <div class="sp-plus fff"><a class="ddd" data-multi="1">+</a></div>
                                </div>
                            </div>
                            <ul class="btn-list">
                                <li><a class="btn-1 sm shadow-0 " href="#">add to cart</a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-repeat"></i></a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Product Detail -->

                </div>
            </div>
            <!-- Single Product Detail -->

        </div>
    </div>
</div>
<!-- Quick View -->

<!-- Switcher  Panel -->
<div class="switcher"></div>
<!-- Switcher Panel -->

<!-- Java Script -->
<script src="{{ asset('js/vendor/jquery.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{ asset('js/gmap3.min.js') }}"></script>
<script src="{{ asset('js/datepicker.js') }}"></script>
<script src="{{ asset('js/contact-form.js') }}"></script>
<script src="{{ asset('js/bigslide.js') }}"></script>
<script src="{{ asset('js/3d-book-showcase.js') }}"></script>
<script src="{{ asset('js/turn.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/mcustom-scrollbar.js') }}"></script>
<script src="{{ asset('js/timeliner.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/countdown.js') }}"></script>
<script src="{{ asset('js/countTo.js') }}"></script>
<script src="{{ asset('js/owl-carousel.js') }}"></script>
<script src="{{ asset('js/bxslider.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/sticky.js') }}"></script>
<script src="{{ asset('js/prettyPhoto.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.js') }}"></script>
<script src="{{ asset('js/wow-min.js') }}"></script>
<script src="{{ asset('js/classie.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<!-- Switcher JS -->
<script type="text/javascript" src="{{ asset('switcher/cookie.js') }}"></script>
<script type="text/javascript" src="{{ asset('switcher/colorswitcher.js') }}"></script>
<!-- Switcher JS -->

@yield('scripts')

<script>
    $(document).ready(function(){

        $(".panel-collapse").on("hide.bs.collapse", function(){
            $(this).prev().find('.plus').html('<i class="fa fa-plus"></i>');
        });

        $(".panel-collapse").on("show.bs.collapse", function(){
            $(this).prev().find('.plus').html('<i class="fa fa-minus"></i>');
            $('html,body').scrollTop($(this).parent().offset().top);
        });

        $(".panel-collapse").on("shown.bs.collapse", function(){
            $('html,body').scrollTop($(this).parent().offset().top);
        });

    });
</script>

</body>
</html>
@extends('layout.master')

@section('title', '72coder Dictionary')

@section('styles')
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
@stop

@section('preloader')
    @include('partials._preloader')
@stop

@section('breadcrumb')

    <div class="breadcrumb-holder white-bg">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>App</li>
                    <li><a href="{{ url('/app/dictionary') }}">Dictionary</a></li>
                </ul>
            </div>
        </div>
    </div>

@stop

@section('content')

    <!-- Main Content -->
    <main class="main-content">

        <!-- Shop Detail -->
        <div class="product-grid-holder">
            <div class="container">

                <!-- Alert -->
                {{--<div class="add-cart-alert">
                    <p><i class="fa fa-check-circle"></i>The Complete Book of Vegetables </p>
                    <a class="btn-1 sm pull-right shadow-0" href="#">view cart</a>
                </div>--}}
                <!-- Alert -->

                <!-- Single Product Detail -->
                <div class="single-product-detail">
                    <div class="row">

                        <!-- Product Thumnbnail -->
                        <div class="col-lg-4 col-md-5">
                            <div class="product-thumnbnail">
                                <ul class="product-slider">
                                    <li>
                                        <img src="images/product-thumbnail/img-01.jpg" alt="">
                                        <a class="expand" href="#"><i class="fa fa-expand"></i></a>
                                    </li>
                                    <li>
                                        <img src="images/product-thumbnail/img-02.jpg" alt="">
                                        <a class="expand" href="#"><i class="fa fa-expand"></i></a>
                                    </li>
                                    <li>
                                        <img src="images/product-thumbnail/img-03.jpg" alt="">
                                        <a class="expand" href="#"><i class="fa fa-expand"></i></a>
                                    </li>
                                </ul>
                                <div id="product-thumbs">
                                    <a data-slide-index="0" href=""><img src="images/product-thumbnail/thumbs/img-01.jpg" alt="" /></a>
                                    <a data-slide-index="1" href=""><img src="images/product-thumbnail/thumbs/img-02.jpg" alt="" /></a>
                                    <a data-slide-index="2" href=""><img src="images/product-thumbnail/thumbs/img-03.jpg" alt="" /></a>
                                </div>

                            </div>
                        </div>
                        <!-- Product Thumnbnail -->

                        <!-- Product Detail -->
                        <div class="col-lg-8 col-md-7">
                            <div class="single-product-detail">
                                <span class="availability"></span>
                                <h3>72coder Dictionary </h3>
                                <ul class="rating-stars">
                                    <li>{{ count($reviews) }} customer review</li>
                                </ul>
                                <h4>Overview</h4>
                                <p>With this highly anticipated new novel, the author of the bestselling Life of Pi returns to the storytelling power and luminous wisdom of his master novel. The High Mountains of Portugal is a suspenseful. dinary journey through the last century. We begin in the early 1900s, when Tomás discovers an ancient journal and sets out from Lisbon. in one of the very first motor cars</p>
                                <p>Thirty-five years later, a pathologist devoted to the novels of Agatha Christie, whose wife has possibly been murdered, finds himself drawn into Tomás’s quest. Fifty years later, Senator Peter. Tovy of Ottawa, grieving the death of his own beloved wife, rescues a chimpanzee from an Oklahoma research facility and takes.</p>
                                <ul class="btn-list center-block">
                                    <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-share-alt"></i></a></li>
                                    <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-arrow-left"></i> Click here to like our App</a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- Product Detail -->

                    </div>
                </div>
                <!-- Single Product Detail -->

                <!-- Disc Nd Reviews -->
                <div class="disc-nd-reviews tc-padding-bottom">
                    <div class="row">
                        <div id="disc-reviews-tabs" class="disc-reviews-tabs">

                            <!-- Tabs Nav -->
                            <div class="col-lg-3 col-xs-12">
                                <div class="tabs-nav">
                                    <ul>
                                        <li><a href="#tab-1">Reviews</a></li>
                                        <li><a href="#tab-2">Description</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Tabs Nav -->

                            <!-- Tabs Content -->
                            <div class="col-lg-9 col-xs-12">
                                <div class="tabs-content">

                                    @if( Auth::check() )
                                    <!-- Reviews -->
                                    <div id="tab-1">
                                        <div class="reviews">

                                            <!-- Form -->
                                            <div class="form-holder add-review">

                                                @if (Session::has('success'))
                                                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                                                @endif

                                                @if(Session::has('error'))
                                                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
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

                                                <h5>Add a Review</h5>

                                                <form class="sending-form" action="{{ route('app.reviews.store', ['dictionary']) }}" method="post">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <div class="form-group">
                                                                <textarea class="form-control" required="required" rows="3" placeholder="Text here..." name="content"></textarea>
                                                                <i class="fa fa-pencil-square-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" required="required" placeholder="Full name" name="username">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" required="required" placeholder="Email" name="email">
                                                                <i class="fa fa-envelope"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <button type="submit" class="btn-1 shadow-0 sm">submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Form -->

                                            <!-- Reviews List -->
                                            <div class="reviews-list">
                                                <ul>
                                                    @foreach($reviews as $review)
                                                    <li>
                                                        <img src="{{ asset('images/reviews/img-03.jpg') }}" alt="">{{--<i class="fa fa-user"></i>--}}
                                                        <div class="comment">
                                                            <div class="reviews-detail">
                                                                <h6>{{ $review->username }}<span>{{ date('F d, Y',strtotime($review->created_at)) }}</span></h6>

                                                            </div>
                                                            <p>{{ $review->content }}</p>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <!-- Reviews List -->



                                        </div>
                                    </div>
                                    <!-- Reviews -->
                                        @else
                                            <strong><a class="btn-link" href="{{ url('login') }}">Please login to add your review</a></strong>
                                    @endif

                                    <!-- Description -->
                                    <div id="tab-2">
                                        <div class="description">
                                            <p>With this highly anticipated new novel, the author of the bestselling Life of Pi returns to the storytelling power and luminous wisdom of his master novel. The High Mountains of Portugal is a suspenseful.</p>
                                            <p>Thirty-five years later, a pathologist devoted to the novels of Agatha Christie, whose wife has possibly been murdered, finds himself drawn into Tomás’s quest. Fifty years later, Senator Peter Tovy of Ottawa, grieving the death of his own beloved wife, rescues a chimpanzee from an Oklahoma research facility and takes it to live with him in his ancestral village in northern Portugal, where the strands of all three stories miraculously mesh together.</p>
                                            <ul class="check-list">
                                                <li>Share this book</li>
                                                <li>Book club notes</li>
                                                <li>Openbook</li>
                                                <li>High resolution cover</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Description -->

                                </div>
                            </div>
                            <!-- Tabs Content -->

                        </div>
                    </div>
                </div>
                <!-- Disc Nd Reviews -->

            </div>
        </div>
        <!-- Shop Detail -->

    </main>
    <!-- Main Content -->

@stop
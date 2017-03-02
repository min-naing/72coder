@extends('layout.master')

@section('title', 'Our Activity')

@section('styles')

    <style>
        .gallery {
        //display: inline-block;
        //margin-top: 20px;
        }
    </style>

@stop

@section('preloader')

    @include('partials._preloader')

@stop

@section('content')

    <main class="main-container">

        <div class="main-heading-holder tc-padding">
            <div class="main-heading style-1">
                <h2>Our<span class="theme-color"> Activity</span></h2>
            </div>
        </div>

        <div class="container">
            {{--<div class="row">--}}
            <div class='list-group gallery grid' id="container">
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/arduio.jpg') }}">
                        <img class="img-responsive" alt="Arduino Testing" src="{{ asset('images/thumbnail/arduio.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Arduino Testing</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/class_android.jpg') }}">
                        <img class="img-responsive" alt="Android Development Class" src="{{ asset('images/thumbnail/class_android.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Android Development Class</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/class_android_1.jpg') }}">
                        <img class="img-responsive" alt="Android Development Class" src="{{ asset('images/thumbnail/class_android_1.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Android Development Class</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/class_java.jpg') }}">
                        <img class="img-responsive" alt="Java Development Class" src="{{ asset('images/thumbnail/class_java.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Java Development Class</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/class_web.jpg') }}">
                        <img class="img-responsive" alt="Web Development Class" src="{{ asset('images/thumbnail/class_web.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Web Development Class</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/class_web_1.jpg') }}">
                        <img class="img-responsive" alt="Web Development Class" src="{{ asset('images/thumbnail/class_web_1.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Web Development Class</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/mdy_barcamp.jpg') }}">
                        <img class="img-responsive" alt="Mandalay Developer Conference" src="{{ asset('images/thumbnail/mdy_barcamp.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Mandalay Developer Conference</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/mdy_computer_university_conference.jpg') }}">
                        <img class="img-responsive" alt="Mandalay Computer University Concert" src="{{ asset('images/thumbnail/mdy_computer_university_conference.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Mandalay Computer University Concert</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/meeting_japan.jpg') }}">
                        <img class="img-responsive" alt="Meeting with Japanese Consultant Business" src="{{ asset('images/thumbnail/meeting_japan.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Meeting with Japanese Consultant Business</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/meeting_japan_1.jpg') }}">
                        <img class="img-responsive" alt="Meeting with Japanese Consultant Business" src="{{ asset('images/thumbnail/meeting_japan_1.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Meeting with Japanese Consultant Business</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/mobile_architecture.jpg') }}">
                        <img class="img-responsive" alt="Mobile Technician Concert" src="{{ asset('images/thumbnail/mobile_architecture.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Mobile Technician Concert</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/myinchan_barcamp.jpg') }}">
                        <img class="img-responsive" alt="Myin Chan Barcamp" src="{{ asset('images/thumbnail/myinchan_barcamp.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Myin Chan Barcamp</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/myinchan_barcamp_1.jpg') }}">
                        <img class="img-responsive" alt="Myin Chan Barcamp" src="{{ asset('images/thumbnail/myinchan_barcamp_1.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Myin Chan Barcamp</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/pyae_barcamp.jpg') }}">
                        <img class="img-responsive" alt="Pyay Barcamp" src="{{ asset('images/thumbnail/pyae_barcamp.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Pyay Barcamp</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/pyae_cu_conference.jpg') }}">
                        <img class="img-responsive" alt="Pyay Computer University Programming Concert" src="{{ asset('images/thumbnail/pyae_cu_conference.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Pyay Computer University Programming Concert</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/pyae_rememberence.jpg') }}">
                        <img class="img-responsive" alt="Pyay Remembrance" src="{{ asset('images/thumbnail/pyae_rememberence.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Pyay Remembrance</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/pyae_rememberence_1.jpg') }}">
                        <img class="img-responsive" alt="Pyay Remembrance" src="{{ asset('images/thumbnail/pyae_rememberence_1.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Pyay Remembrance</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/pyae_tu_conference.jpg') }}">
                        <img class="img-responsive" alt="Pyay Technology University Concert" src="{{ asset('images/thumbnail/pyae_tu_conference.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Pyay Technology University Concert</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/yangon_barcamp.jpg') }}">
                        <img class="img-responsive" alt="Yangon Barcamp" src="{{ asset('images/thumbnail/yangon_barcamp.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Yangon Barcamp</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/yangon_barcamp_1.jpg') }}">
                        <img class="img-responsive" alt="Yangon Barcamp" src="{{ asset('images/thumbnail/yangon_barcamp_1.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Yangon Barcamp</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/yangon_barcamp_2.jpg') }}">
                        <img class="img-responsive" alt="Yangon Barcamp" src="{{ asset('images/thumbnail/yangon_barcamp_2.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Yangon Barcamp</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 grid-item'>
                    <a tabindex="1" class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/preview/yangon_barcamp_3.jpg') }}">
                        <img class="img-responsive" alt="Yangon Barcamp" src="{{ asset('images/thumbnail/yangon_barcamp_3.jpg') }}" />
                        <div class='text-right'>
                            <small class='text-muted'>Yangon Barcamp</small>
                        </div> <!-- text-right / end -->
                    </a>
                </div> <!-- col-6 / end -->

            </div> <!-- list-group / end -->
        {{--</div>--}} <!-- row / end -->

        </div> <!-- container / end -->

    </main>
    <div class="clearfix"></div>
@stop

@section('scripts')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.6/css/jquery.fancybox.min.css" media="screen">
    {{--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.6/js/jquery.fancybox.min.js"></script>
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>--}}

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.1/imagesloaded.min.js"></script>--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.1/masonry.pkgd.min.js"></script>



    <script>
        $(document).ready(function(){

            //FANCYBOX
            //https://github.com/fancyapps/fancyBox
            //$('.grid-item').on('focusin', function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
            //});


            setTimeout(function(){
                jQuery('.grid').masonry({
                    // options
                    columnWidth: '.grid-item',
                    itemSelector: '.grid-item',
                    percentPosition: true
                });
            }, 1800);

        });
    </script>

@stop
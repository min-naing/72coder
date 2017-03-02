@extends('layout.master')

@section('title', 'Tutorials')

@section('preloader')
    @include('partials._preloader')
@stop


@section('content')

    <main class="main-content">

        <div class="main-heading-holder tc-padding">
            <div class="main-heading style-1">
                <h2>Our<span class="theme-color"> Tutorial</span></h2>
            </div>
        </div>

        <div class="container">
            <div class="row">

                {{--<div class="col-md-6">
                    @foreach( $video_list as $video )
                        {{ print_r($video) }}

                    @endforeach
                </div>--}}

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">PHP with Laravel</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBb6EMuLpVBNnSkAxzA1kN7e" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Javascript (New)</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBYwCWAPYHMyVFvWyBzSpaVy" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">PHP Basic (New)</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBYwejqTcJe1CyiKGPeLCPY3" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Java Fx</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBbPIxFSSEIt5SGGOK7wS1j-" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Intermediate Java</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBaEYpYTQzmWFMVyYPKXXFQA" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">PHP OOP Tutorials</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBbp4e76w36n2mkPth-Q4boN" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">SASS</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBYJUM2_BqTKA0_s6vRazZCl" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">HTML5</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBbFOTBNzJKDKN6smFZQjIS1" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">CSS Tutorials</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBYK5b2qKTtu-3blJm2F4Zgb" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Java Servlet</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBY8wl2_EedwS2FsMAuYk4hv" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">HTML Tutorials (NEW)</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBbQsePuktz6TGZ4J0TSxSrS" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">CMS Website and Build Admin Panel Complete</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBb--xtjltqtSVr6cw6oVURw" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Android Basic</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBZf6mznDU_EqF464GVy3fat" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Networking Tutorial</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBbeXN9k4JWmdLKkMaztt4Oq" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Wordpress Tutorial</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBYLI9aSSFVh_Krm5SIl4xUa" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">PHP Practical Tutorial</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBZCWJLVceXbGxn4wWdsmcjJ" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">C Programming</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBbtsUJryT1SmboPuC5Pnbmt" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">HTML5 Game Development</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBYnmzH2WXam5Uen43CsmL2h" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Step By Step Java Development</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBbxF0IJgWH0SxMnNB6a4WGu" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">MS-DOS Commands</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBZpD50B344T2lDeI8PU4RYl" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">AJAX Tutorial</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBaEF1CHq4C1Hbcnt5Qvekam" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">PHP Friend Ship System Development</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBbduRK4MDW-YoZGXnvqbfjn" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">C# Basic</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBbK6Hj9HbxppjpYzkhmc5N6" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">JQuery Tutorials</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBYBsBzbUBKe5mF-f3l7RVv7" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Create PSD Website Design</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBY1KGIEPrfZDpJEOXDnZFic" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Space Fighter Game Development with Java</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBZODoYYlrTiIh8fNQvRRRBW" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">CSS3 Tutorial</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBYdT8keOvuY3h78J-bLgfxE" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Flash Animation Tutorial</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBbuWXY1c_pIyZyZOi58PH_5" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Complete PHP Membership System</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBakxPoyHaOIWzH7j1xux83t" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">C++ Console Game</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBZ9MXnIRMfzMlN1s0Uvs4VH" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Javascript Tutorials</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBZ860PpT5YXkSXD1Sct38B0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Java Programming Basic</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBZushEbmG2NbADVq-YEealA" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">C++ Basic</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBaYsiENWgtCybeCHfH8wPpa" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">PHP Basic</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBat02hJTnmiziFIxVtDYaBj" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Python Programming Basic</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBbwFVAW2_x6PBa7I4JNvter" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Python Game Development</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBY2MX3OJZI5sc3bwl952FBB" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Javascript & JQuery Practical</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBZlD6EKj4er8N-VJJYLh0Ru" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Java Game Development</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBZlji5dOcoPfK4KfLaphZdb" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">SQL with MySQL Tutorial</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBbyNU0mQygwR6sNVcoSa0TO" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">CSS Practical Tutorial</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBYAt6DnX6ZMYvqswIWRbE8b" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Web Design Basic</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBaCloYv_GEHn2sDmTh59awT" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong class="text-primary">Java Intermediate</strong>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive" src="https://www.youtube.com/embed/videoseries?list=PLG6U31JzuVBZL-BLN0voZil9V2Fb5cLXv" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </main>

@stop

<nav class="nav-holder style-2">

    <!-- Logo bar -->
    <div class="logo-bar">
        <div class="container">

            <!-- Logo -->
            <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('images/72coder_resize.png') }}" alt=""></a></div>
            <!-- Logo -->

            <!-- Address Lisr -->
            <div class="address-list style-2">
                <ul>
                    {{--<li><a href="" class="btn-lg-primary">Make Your Wishes</a></li>--}}
                    <li><i class="fa fa-phone"></i> call us: 09 259165884, 09 772906583, 09 773122760<span>Monday to Sunday 09:00 am to 8:00 pm</span></li>
                </ul>
            </div>
            <!-- Address Lisr -->

        </div>
    </div>
    <!-- Logo bar -->

    <!-- Nav Bar -->
    <div class="nav-bar">
        <div class="container">
            <div class="mega-dropdown-wrapper">

                <!-- Responsive Button -->
                <div class="responsive-btn">
                    <a href="#menu" class="menu-link circle-btn"><i class="fa fa-bars"></i></a>
                </div>
                <!-- Responsive Button -->

                <!-- Navigation -->
                <div class="navigation">
                    <ul>
                        <li class="{{ Request::is('/') ? 'active ' : '' }}dropdown-icon">
                            <a href="{{ url('/') }}"><i class="fa fa-home"></i>Home</a>

                        </li>
                        {{--<li class="{{ Request::is('course')? 'active ' : '' }}dropdown-icon">
                            <a href="{{ url('/course') }}"><i class="fa fa-tasks"></i>Courses</a>
                            <ul>
                                <li><a href="{{ url('/course/web_design') }}">Web Design</a></li>
                                <li><a href="{{ url('/course/web_dev') }}">Web Development</a></li>

                                <li><a href="{{ url('/course/android_dev') }}">Android Development</a></li>
                                <li><a href="{{ url('/course/java_dev') }}">Java Development</a></li>

                                <li><a href="{{ url('/course/db_admin') }}">Database Administration</a></li>


                            </ul>
                        </li>--}}
                        
                        <li class="{{ Request::is('books/*')? 'active ' : '' }}dropdown-icon">
                            <a href="{{ url('/books/home') }}"><i class="fa fa-book"></i>Books</a>
                            <ul>
                                <li><a href="{{ url('/books/laravel') }}">Laravel</a></li>
                                <li><a href="{{ url('books/android_dev') }}">Android Application Development</a></li>
                                <li><a href="{{ url('books/android_hack') }}">Android Hack</a></li>
                            </ul>
                        </li>


                        <li class="{{ Request::is('class/*')? 'active ' : '' }}dropdown-icon">
                            <a href="{{ url('class/home') }}"><i class="fa fa-file-text"></i>Class</a>
                            <ul>
                                <li><a href="{{ url('/class/web_design') }}">Web Design</a></li>
                                <li><a href="{{ url('/class/web_dev') }}">Web Development</a></li>
                                <li><a href="{{ url('/class/android_dev') }}">Android Development</a></li>
                                <li><a href="{{ url('/class/android_adv') }}">Android Advanced Development</a></li>
                                <li><a href="{{ url('/class/javase') }}">Java SE</a></li>
                                <li><a href="{{ url('/class/javaee') }}">J2EE</a></li>
                            </ul>
                        </li>

                        <li class="{{ Request::is('services/*') ? 'active' : '' }}">
                            <a href="{{ url('services/home') }}"><i class="fa fa-dedent"></i>Services</a>
                            <ul>
                                <li><a href="{{ url('/services/java') }}">Web</a></li>
                                <li><a href="{{ url('/services/web') }}">Android App Development</a></li>
                                <li><a href="{{ url('/services/android') }}">Java App Development</a></li>
                            </ul>
                        </li>
                        
                        {{--<li class="{{ Request::is('post') ? 'active ' : '' }}dropdown-icon">
                            <a href="{{ url('/post') }}"><i class="fa fa-pencil"></i>Blog</a>

                        </li>--}}


                       {{-- <li class="dropdown-icon">
                            <a href="author.html"><i class="fa fa-file-text"></i>Author</a>

                        </li>--}}
                        
                        <li class="{{ Request::is('contact')? 'active ' : '' }}">
                            <a href="{{ url('/contact') }}"><i class="fa fa-fax"></i>Contact</a>
                        </li>

                        <li class="{{ Request::is('activity/home') ? 'active' : '' }}">
                            <a href="{{ url('activity/home') }}"><i class="fa fa-tasks"></i>Activities</a>
                        </li>
                        <li class="{{ Request::is('tutorial/home') ? 'active' : '' }}">
                            <a href="{{ url('tutorial/home') }}"><i class="fa fa-file-video-o"></i>Tutorials</a>
                        </li>

                    </ul>
                </div>
                <!-- Navigation -->

                <!-- Search Nd Drop -->
                {{--<div class="search-nd-drop">
                    <ul>

                        <li>
                            <form class="search-bar style-2">
                                <input type="text" class="form-control" required="required" placeholder="Type a search here...">
                                <button class="sub-btn fa fa-search"></button>
                            </form>
                        </li>
                    </ul>
                </div>--}}
                <!-- Search Nd Drop -->

            </div>
        </div>
    </div>
    <!-- Nav Bar -->

</nav>
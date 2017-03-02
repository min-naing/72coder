<nav id="menu" class="responive-nav">
    <a class="r-nav-logo" href="{{ url('/') }}"><img src="{{ asset('images/72coder_resize.png') }}" alt=""></a>
    <ul class="respoinve-nav-list">
        <li>
            <a  href="{{ url('/') }}">Home</a>
        </li>
        {{--<li>
            <a class="triple-eff" data-toggle="collapse" href="#list-2"><i class="pull-right fa fa-angle-down"></i>Courses</a>
            <ul class="collapse" id="list-2">

                <li><a href="{{ url('/course/web_design') }}">Web Design</a></li>
                <li><a href="{{ url('/course/web_dev') }}">Web Development</a></li>
                <li><a href="{{ url('/course/android_dev') }}">Android Development</a></li>
                <li><a href="{{ url('/course/java_dev') }}">Java Development</a></li>

                <li><a href="{{ url('/course/db_admin') }}">Database Administration</a></li>
            </ul>
        </li>--}}
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-3"><i class="pull-right fa fa-angle-down"></i>Books</a>
            <ul class="collapse" id="list-3">
                <li><a href="{{ url('/books/laravel') }}">PHP with Laravel 5.3</a></li>
                <li><a href="{{ url('/books/android_dev') }}">Android App Development</a></li>
                <li><a href="{{ url('/books/android_hack') }}">Android Hack</a></li>
            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-4"><i class="pull-right fa fa-angle-down"></i>Class</a>
            <ul class="collapse" id="list-4">

                <li><a href="{{ url('/class/web_design') }}">Web Design</a></li>
                <li><a href="{{ url('/class/web_dev') }}">Web Development</a></li>
                <li><a href="{{ url('/class/android_dev') }}">Android Development</a></li>
                <li><a href="{{ url('/class/android_adv') }}">Android Advanced Development</a></li>
                <li><a href="{{ url('/class/javase') }}">Java SE</a></li>
                <li><a href="{{ url('/class/javaee') }}">Java EE</a></li>
            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-5"><i class="pull-right fa fa-angle-down"></i>Services</a>
            <ul class="collapse" id="list-5">
                <li><a href="{{ url('/services/web') }}">Web </a></li>
                <li><a href="{{ url('/services/android') }}">Android App Development </a></li>
                <li><a href="{{ url('/services/java') }}">Java App Development </a></li>
            </ul>
        </li>

        <li>
            <a href="{{ url('/contact') }}">contact</a>
        </li>
        <li>
            <a href="{{ url('activity/home') }}">Activities</a>
        </li>
        <li>
            <a href="{{ url('tutorial/home') }}">Tutorials</a>
        </li>
    </ul>
</nav>
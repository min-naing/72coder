<div class="topbar">
    <div class="container">

        <!-- Social Icons -->
        <div class="social-icons pull-right">
            <ul>
                <li><a target="_blank" class="fa fa-facebook" href="https://www.facebook.com/brighter.myanmar/"></a></li>
                <li><a target="_blank" class="fa fa-youtube-play" href="https://www.youtube.com/user/72CODER"></a></li>

                {{--<li><a class="fa fa-google-plus" href="#"></a></li>--}}

            </ul>
        </div>
        <!-- Social Icons -->

        <!-- Cart Option -->
        <div class="cart-option">
            <ul>

                @if( session('status') )
                    <li class="animated flash" id="success-msg">
                        <span style="color: #ff851d;">
                            {{ session('status') }}
                        </span>
                    </li>
                    @endif


                @if( session('error') )
                    <li class="animated flash" id="error-msg">
                        <span style="color: red;">
                            {{ session('error') }}
                        </span>
                    </li>
                @endif

                {{--<li><a href="#" data-toggle="modal" data-target="#wishes-modal"><i class="fa fa-heart-o"></i>Make Your Wishes</a></li>--}}
                @if( Auth::guest() )
                <li>
                    <a href="{{ url('/login') }}"><i class="fa fa-user"></i>Login / Register</a>
                </li>
                @else
                <li><a href="#">Welcome {{ Auth::user()->name }}</a></li>
                <li>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-user"></i>Logout</a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endif
            </ul>
        </div>
        <!-- Cart Option -->

    </div>
</div>
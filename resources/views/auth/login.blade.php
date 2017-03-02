@extends('layout.master')

@section('title', 'Login')

@section('styles')
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
@stop

@section('content')

    <main class="main-content">

        <div class="main-heading-holder">
            <div class="main-heading style-1">
                <h2><span class="theme-color">Login</span></h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">

                    <div class="login-form tc-padding">
                    <form class="sending-form" method="post" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input class="form-control" placeholder="Email Address" value="{{ old('email') }}" name="email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input class="form-control" type="password" required="required" placeholder="Password" name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <i class="fa fa-key"></i>
                        </div>

                        <div>

                            <input id="remember" type="checkbox" name="remember" style="height: auto; width: auto; display: inline;" checked>
                            <label style="margin: 0; display: inline-block;" for="remember">Remember Me</label>

                        </div>

                        <p></p>


                        <button type="submit" class="btn-1 shadow-0 full-width">Login</button>
                        <ul class="list-inline">
                            <li>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    <i class="fa fa-key"></i> &nbsp;Forgot Your Password?
                                </a>
                            </li>
                            <li>
                                <a class="btn-link" href="{{ url('/register') }}"> Don't have an account?</a>
                            </li>
                        </ul>


                    </form>
                    </div>

                </div>
            </div>
        </div>


    </main>


@endsection

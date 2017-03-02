@extends('layout.master')

@section('title', 'Register')

@section('styles')
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
@stop

@section('content')

    <main class="main-content">

        <div class="main-heading-holder">
            <div class="main-heading style-1">
                <h2><span class="theme-color">Register</span></h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">

                    <div class="register-form tc-padding">
                        <form class="sending-form" action="{{ url('/register') }}" method="post">
                            {{ csrf_field() }}

                            @if ( session('warning') )
                                <div class="alert alert-warning">
                                    <p>
                                        {{ session('warning') }}
                                    </p>
                                </div>
                            @endif

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input class="form-control" required="required" placeholder="Full name" name="name" value="{{ old('name') }}" autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input class="form-control" required="required" placeholder="Email Address" name="email" value="{{ old('email') }}">
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
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>

                                <i class="fa fa-key"></i>
                            </div>

                            {{--<p class="terms">You agree to the hldy.hr <a href="#">Terms &amp; Conditions</a></p>--}}
                            <button type="submit" class="btn-1 shadow-0 full-width">Register account</button>
                            <a class="btn btn-link" href="{{ url('/login') }}">Have a account login here</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </main>

@endsection

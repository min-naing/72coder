@extends('layout.master')

@section('title', 'Reset Password')

@section('styles')
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
@stop

@section('content')

    <main class="main-content">

        <div class="main-heading-holder">
            <div class="main-heading style-1">
                <h2>Reset <span class="theme-color">Password</span></h2>
            </div>
        </div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

                <div class="reset-password tc-padding">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="sending-form" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Email Address" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <i class="fa fa-envelope-o"></i>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <i class="fa fa-key"></i>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                            <i class="fa fa-key"></i>
                        </div>


                        <button type="submit" class="btn-1 shadow-0 full-width">
                            Reset Password
                        </button>

                    </form>
                </div>

        </div>
    </div>
</div>

    </main>
@endsection

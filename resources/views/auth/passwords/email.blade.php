@extends('layout.master')

@section('title', 'Reset Password Link')

@section('styles')
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
@stop

<!-- Main Content -->
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

                <div class="reset-password-form tc-padding">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="sending-form" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email Address">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <i class="fa fa-envelope-o"></i>

                        </div>


                        <button type="submit" class="btn-1 shadow-0 full-width">
                            Send Password Reset Link
                        </button>


                    </form>
                </div>

        </div>
    </div>
</div>

    </main>
@endsection

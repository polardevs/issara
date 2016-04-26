@extends('layouts.app')

@section('content')
<div class="container bg-gray" style="padding-top: 15px;">

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default" style="box-shadow: 0 0 15px rgba(0,0,0,0.1);">
                <!-- <div class="panel-heading">Login</div> -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h1>Login</h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <form class="form-horizontal form-login" role="form" method="POST" action="{{ url('/login') }}">
                                {!! csrf_field() !!}

                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="email" placeholder="example@mail.com" value="{{ old('email') }}">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <br>
                                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon1">
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <label style="padding: 15px 0px;">
                                    <input type="checkbox" name="remember"> <small>Remember Me</small>
                                </label>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a class="btn btn-info" href="auth/facebook" role="button">Login with Facebook</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success btn-block login">
                                            Login
                                        </button>
                                    </div>
                                </div>

                                <br>
                                <div class="text-center">
                                    <small>
                                        <a href="{{url('/register')}}">Register</a> Or <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                    </small>
                                </div>

                                <!-- <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/password/reset') }}" target="_blank">
                                    <i class="fa fa-facebook-official"></i>
                                </a> -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

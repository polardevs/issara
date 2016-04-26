@extends('layouts.app')

@section('content')
<div class="container bg-gray cate-topic">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="box-shadow: 0 0 15px rgba(0,0,0,0.1);">
                <!-- <div class="panel-heading">Register</div> -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h1>Register</h1>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {!! csrf_field() !!}

                                <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" value="{{ old('name') }}">
                                </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <br>

                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
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
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password">
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <br>

                                <div class="input-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                                <br>
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-6">
                                        <button type="submit" class="btn btn-success btn-block">
                                            Register
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container bg-gray" style="padding-top: 15px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Reset Password</div> -->
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h1>Reset Password</h1>
                            <hr>
                        </div>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                                {!! csrf_field() !!}

                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                    <input type="text" class="form-control" name="email" placeholder="example@mail.com" value="{{ old('email') }}">
                                </div>

                                <!-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> -->
                                <br>
                                <div class="form-group pull-right form-login">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-btn fa-envelope"></i>Send Password Reset Link
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

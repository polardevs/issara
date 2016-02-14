<div class="container bg-white">
	<img class="img-responsive" src="{{ asset('image/header.jpg') }}" style="padding-top: 15px;">

	<nav class="navbar navbar-default" style="margin-top: 10px;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    HOME
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                @if(isset($category_menus))
                    @foreach($category_menus as $menu)
                        <li><a class="text-uppercase" href="{{ route('category', $menu->name) }}">{{ $menu->name }}</a></li>
                    @endforeach
                @endif
                    <li><a href="#" id="login">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div id="form-login" class="bg-form-login" style="display: none;">
    <div class="form-login">
        <div class="close-login"><span class="badge">x</span></div>
        <div class="row">
            <div class="col-sm-12">
                <img src="{{ asset('image/circle.png') }}" style="width: 130px; position: absolute; top: -77px; left: 70px;">
            </div>
            <div class="col-sm-12 text-center" style="padding-bottom: 15px; padding-top: 40px;">
                <h2>Member Login</h2>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                </div>
            </div>

            <div class="col-sm-12">
                <button class="btn btn-danger">LOGIN</button>
            </div>
            <div class="col-sm-6" style="padding-top: 15px;">

                <small>Forgot Password?</small>
            </div>
            <div class="col-sm-6 text-right" style="padding-top: 15px;">
                <a style="cursor: pointer;"><small id="register">Register</small></a>
            </div>
        </div>
    </div>
    <div class="form-register" style="display: none; height: 365px;">
        <div class="close-login"><span class="badge">x</span></div>
        <div class="row">
            <div class="col-sm-12">
                <img src="{{ asset('image/circle.png') }}" style="width: 130px; position: absolute; top: -77px; left: 70px;">
            </div>
            <div class="col-sm-12 text-center" style="padding-bottom: 15px; padding-top: 40px;">
                <h2>Register</h2>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Confirm Password"/>
                </div>
            </div>

            <div class="col-sm-12">
                <button class="btn btn-danger">REGISTER</button>
            </div>
            <div class="col-sm-12 text-center" style="padding-top: 15px;">

                <a style="cursor: pointer;"><small id="member-login">Member Login</small></a>
            </div>

        </div>
    </div>
</div>

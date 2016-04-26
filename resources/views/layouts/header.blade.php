<div class="container bg-white">


    @if(Request::segment(1) == "webboard")
        <img class="img-responsive" src="{{ asset('image/slide1.jpg') }}" style="padding-top: 15px;">
        <nav class="navbar navbar-default " style="margin-top: 10px;">
            <div class="container">
                <div class="navbar-header visible-xs">

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
                        <li class="hidden-xs" ><a href="{{ url('') }}">HOME</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">เลือกห้อง <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{action('WebBoardController@allChannel')}}">กระทู้ล่าสุด</a></li>
                                @foreach(@$channels as $channel)
                                    <li><a href="{{route('webboard', ['channel' => $channel->name . '-' . $channel->id])}}">{{$channel->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>


                    </ul>
                    <form class="navbar-form navbar-right" role="search" method="GET" action="{{route('search-content')}}">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." id="sizing-addon2" name="key_word" value="{{$keyword or ''}}">
                            <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i></span>
                        </div>
                    </form>
                    @if(@$user)
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/profile') }}" class="wellcome">ยินดีต้อนรับคุณ {{ $user->name }}</a></li>
                        </ul>
                    @endif
                </div>
            </div>
        </nav>

    @else
        <img class="img-responsive" src="{{ asset('image/header.jpg') }}" style="padding-top: 15px;">
    	<nav class="navbar navbar-default" style="margin-top: 10px;">
            <div class="container">
                <div class="navbar-header visible-xs">

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
                        <li class="hidden-xs" ><a href="{{ url('') }}">HOME</a></li>
                        @if(isset($category_menus))
                            @foreach($category_menus->sortBy('order') as $menu)
                                @if($menu->contents->count())<li><a class="text-uppercase" href="{{ route('category', $menu->name) }}">{{ $menu->name }}</a></li>@endif
                            @endforeach
                        @endif
                        @if(@$user)
                            <li><a href="{{ url('/webboard') }}">WEBBOARD</a></li>
                            <li><a href="{{ url('logout') }}" id="logout">LOGOUT</a></li>
                        @else
                            <li><a href="{{ url('/login') }}">LOGIN</a></li>
                            <!-- <li><a href="#" id="login">LOGIN</a></li> -->
                        @endif
                        <form class="navbar-form navbar-right" role="search" method="GET" action="{{route('search-content')}}">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." id="sizing-addon2" name="key_word" value="{{$keyword or ''}}">
                                <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i></span>
                            </div>
                        </form>
                        @if(@$user)
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ url('/profile') }}" class="wellcome">ยินดีต้อนรับคุณ {{ $user->name }}</a></li>
                            </ul>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    @endif

</div>

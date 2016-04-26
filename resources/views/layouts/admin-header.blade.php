<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="{{ url('') }}/image/user.jpeg">
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                     </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{action('Admin\BackOfficeController@profile')}}">Profile</a></li>
                        <li><a href="{{url('logout')}}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="@if( Request::segment(1) == 'admin' && Request::segment(2) == '') {{'active'}} @endif">
                <a href="{{ url('/admin') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>

            <li class="@if( Request::segment(2) == 'catg-content' || Request::segment(2) == 'catg-ads' || Request::segment(2) == 'catg-webboard') {{'active'}} @endif"> 
                <a href="#" data-toggle="collapse" data-target="#userMenu" aria-expanded="false" class="collapsed"><i class="fa fa-cube"></i>Category <j class="fa pull-right @if( Request::segment(2) == 'catg-content' || Request::segment(2) == 'catg-ads' || Request::segment(2) == 'catg-webboard') {{'fa-angle-down'}} @else{{'fa-angle-left'}}  @endif"></j></a>
                <ul class="nav nav-stacked collapse nav-second-level @if( Request::segment(2) == 'catg-content' || Request::segment(2) == 'catg-ads' || Request::segment(2) == 'catg-webboard') {{'in'}} @endif" id="userMenu" aria-expanded="false" style="height: 0px;">
                    <li class="@if( Request::segment(2) == 'catg-content' ) {{'active'}} @endif">
                        <a href="{{ action('Admin\CatgContentController@index') }}">Content</a>
                    </li>
                    <li class="@if( Request::segment(2) == 'catg-ads' ) {{'active'}} @endif">
                        <a href="{{ action('Admin\CatgAdsController@index') }}">Advertise</a>
                    </li>
                    <li class="@if( Request::segment(2) == 'catg-webboard' ) {{'active'}} @endif">
                        <a href="{{ action('Admin\CatgWebboardController@index') }}">Webboard</a>
                    </li>
                </ul>
            </li>

            <li class="@if( Request::segment(2) == 'content' ) {{'active'}} @endif">
                <a href="{{ url('/admin/content') }}"><i class="fa fa-cube"></i> <span class="nav-label">Content</span></a>
            </li>
            <li class="@if( Request::segment(2) == 'advertise' ) {{'active'}} @endif">
                <a href="{{ url('/admin/advertise') }}"><i class="fa fa-cube"></i><span class="nav-label">Advertise</span></a>
            </li>
            <li class="@if( Request::segment(2) == 'banner' ) {{'active'}} @endif">
                <a href="{{ url('/admin/banner') }}"><i class="fa fa-cube"></i><span class="nav-label">Banner</span></a>
            </li>
            <li class="@if( Request::segment(2) == 'webboard' ) {{'active'}} @endif">
                <a href="{{ url('/admin/webboard') }}"><i class="fa fa-cube"></i><span class="nav-label">Webboard</span></a>
            </li>
            <li class="@if( Request::segment(2) == 'comment' ) {{'active'}} @endif">
                <a href="{{ url('/admin/comment') }}"><i class="fa fa-cube"></i><span class="nav-label">Comment</span></a>
            </li>
            <li class="@if( Request::segment(2) == 'member' ) {{'active'}} @endif">
                <a href="{{ url('/admin/member') }}"><i class="fa fa-cube"></i><span class="nav-label">Member</span></a>
            </li>
            

        </ul>

    </div>
</nav>
<script>
    $('[data-toggle=collapse]').click(function(){
        $(this).find("j").toggleClass("fa-angle-left fa-angle-down");
    });

</script>

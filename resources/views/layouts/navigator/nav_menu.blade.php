<?php
  if (!Cache::has('cacheMenuLeft'))
  {
    $cacheMenuLeft = Cache::remember('cacheMenuLeft', 60, function() {
      return App\Model\Admin\Location::get()->toArray() ;
    });
  }
  else
  {
    $cacheMenuLeft = Cache::get('cacheMenuLeft') ;
  }
?>
<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
            </div>
            <!-- /input-group -->
        </li>
        <li>
            <a href="{{ action('Admin\DashboardController@index') }}"><i class="fa fa-dashboard fa-fw"></i> {{ trans('Admin/text_message.dashboard') }}</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> {{ trans('Admin/text_message.login') }}<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ action('Admin\LocationController@create') }}">{{ trans('Admin/text_message.addLocation') }}</a>
                </li>
                @foreach($cacheMenuLeft as $key => $val)
                  <li>
                      <a href="{{ action(trim("Admin\ " ).$val['location_name']."Controller@index") }}">{{ trans('Admin/text_message.'.$val['location_name']) }}</a>
                  </li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="{{ action('Admin\UserController@index') }}"><i class="fa fa-table fa-fw"></i> {{ trans('Admin/text_message.user') }}</a>
        </li>
        <li>
            <a href="{{ action('Admin\GroupuserController@index') }}"><i class="fa fa-table fa-fw"></i> {{ trans('banner_messages.groupUser') }}</a>
        </li>
    </ul>
  </div>
  <!-- /.sidebar-collapse -->
</div>

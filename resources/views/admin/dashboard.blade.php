@extends('layouts.admin')
@section('content')

<div id="page-wrapper" class="gray-bg dashbard-1 " style="min-height: 630px;">
</div>

<div id="page-wrapper" class="gray-bg dashbard-1 hidden" style="min-height: 330px;">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="row  border-bottom white-bg dashboard-header">
        <div class="col-sm-3">
            <h2>Welcome Amelia</h2>
            <small>You have 42 messages and 6 notifications.</small>
            <ul class="list-group clear-list m-t">
                <li class="list-group-item fist-item">
                    <span class="pull-right">
                        09:00 pm
                    </span>
                    <span class="label label-success">1</span> Please contact me
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                        10:16 am
                    </span>
                    <span class="label label-info">2</span> Sign a contract
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                        08:22 pm
                    </span>
                    <span class="label label-primary">3</span> Open new shop
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                        11:06 pm
                    </span>
                    <span class="label label-default">4</span> Call back to Sylvia
                </li>
                <li class="list-group-item">
                    <span class="pull-right">
                        12:00 am
                    </span>
                    <span class="label label-primary">5</span> Write a letter to Sandra
                </li>
            </ul>
        </div>
        <div class="col-sm-6">
            <div class="flot-chart dashboard-chart">
                <div class="flot-chart-content" id="flot-dashboard-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="960" height="360" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 480px; height: 180px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 60px; top: 164px; left: 11px; text-align: center;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 60px; top: 164px; left: 81px; text-align: center;">2.5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 60px; top: 164px; left: 151px; text-align: center;">5.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 60px; top: 164px; left: 222px; text-align: center;">7.5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 60px; top: 164px; left: 289px; text-align: center;">10.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 60px; top: 164px; left: 360px; text-align: center;">12.5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 60px; top: 164px; left: 430px; text-align: center;">15.0</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 152px; left: 7px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 114px; left: 1px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 76px; left: 1px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 38px; left: 1px; text-align: right;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">40</div></div></div><canvas class="flot-overlay" width="960" height="360" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 480px; height: 180px;"></canvas></div>
            </div>
            <div class="row text-left">
                <div class="col-xs-4">
                    <div class=" m-l-md">
                    <span class="h4 font-bold m-t block">$ 406,100</span>
                    <small class="text-muted m-b block">Sales marketing report</small>
                    </div>
                </div>
                <div class="col-xs-4">
                    <span class="h4 font-bold m-t block">$ 150,401</span>
                    <small class="text-muted m-b block">Annual sales revenue</small>
                </div>
                <div class="col-xs-4">
                    <span class="h4 font-bold m-t block">$ 16,822</span>
                    <small class="text-muted m-b block">Half-year revenue margin</small>
                </div>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="statistic-box">
            <h4>
                Project Beta progress
            </h4>
            <p>
                You have two project with not compleated task.
            </p>
                <div class="row text-center">
                    <div class="col-lg-6">
                        <canvas id="polarChart" width="160" height="160" style="width: 80px; height: 80px;"></canvas>
                        <h5>Kolter</h5>
                    </div>
                    <div class="col-lg-6">
                        <canvas id="doughnutChart" width="156" height="156" style="width: 78px; height: 78px;"></canvas>
                        <h5>Maxtor</h5>
                    </div>
                </div>
                <div class="m-t">
                    <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>New data for the report</h5> <span class="label label-primary">IN+</span>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <li><a href="#">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div>

                                    <div class="pull-right text-right">

                                        <span class="bar_dashboard" style="display: none;">5,3,9,6,5,9,7,3,5,2,4,7,3,2,7,9,6,4,5,7,3,2,1,0,9,5,6,8,3,2,1</span><svg class="peity" height="16" width="100"><rect fill="#1ab394" x="0" y="7.111111111111111" width="2.2580645161290325" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="3.2580645161290325" y="10.666666666666668" width="2.2580645161290325" height="5.333333333333333"></rect><rect fill="#1ab394" x="6.516129032258065" y="0" width="2.2580645161290325" height="16"></rect><rect fill="#d7d7d7" x="9.774193548387098" y="5.333333333333334" width="2.2580645161290325" height="10.666666666666666"></rect><rect fill="#1ab394" x="13.03225806451613" y="7.111111111111111" width="2.2580645161290325" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="16.290322580645164" y="0" width="2.2580645161290325" height="16"></rect><rect fill="#1ab394" x="19.548387096774196" y="3.555555555555557" width="2.2580645161290325" height="12.444444444444443"></rect><rect fill="#d7d7d7" x="22.806451612903228" y="10.666666666666668" width="2.2580645161290325" height="5.333333333333333"></rect><rect fill="#1ab394" x="26.06451612903226" y="7.111111111111111" width="2.2580645161290325" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="29.322580645161292" y="12.444444444444445" width="2.2580645161290325" height="3.5555555555555554"></rect><rect fill="#1ab394" x="32.58064516129033" y="8.88888888888889" width="2.2580645161290325" height="7.111111111111111"></rect><rect fill="#d7d7d7" x="35.83870967741936" y="3.555555555555557" width="2.2580645161290325" height="12.444444444444443"></rect><rect fill="#1ab394" x="39.09677419354839" y="10.666666666666668" width="2.2580645161290325" height="5.333333333333333"></rect><rect fill="#d7d7d7" x="42.35483870967742" y="12.444444444444445" width="2.2580645161290325" height="3.5555555555555554"></rect><rect fill="#1ab394" x="45.612903225806456" y="3.555555555555557" width="2.2580645161290325" height="12.444444444444443"></rect><rect fill="#d7d7d7" x="48.87096774193549" y="0" width="2.2580645161290325" height="16"></rect><rect fill="#1ab394" x="52.12903225806452" y="5.333333333333334" width="2.2580645161290325" height="10.666666666666666"></rect><rect fill="#d7d7d7" x="55.38709677419355" y="8.88888888888889" width="2.2580645161290325" height="7.111111111111111"></rect><rect fill="#1ab394" x="58.645161290322584" y="7.111111111111111" width="2.2580645161290325" height="8.88888888888889"></rect><rect fill="#d7d7d7" x="61.903225806451616" y="3.555555555555557" width="2.2580645161290325" height="12.444444444444443"></rect><rect fill="#1ab394" x="65.16129032258065" y="10.666666666666668" width="2.2580645161290325" height="5.333333333333333"></rect><rect fill="#d7d7d7" x="68.41935483870968" y="12.444444444444445" width="2.2580645161290325" height="3.5555555555555554"></rect><rect fill="#1ab394" x="71.67741935483872" y="14.222222222222221" width="2.2580645161290325" height="1.7777777777777777"></rect><rect fill="#d7d7d7" x="74.93548387096774" y="15.5" width="2.2580645161290325" height="0.5"></rect><rect fill="#1ab394" x="78.19354838709678" y="0" width="2.2580645161290325" height="16"></rect><rect fill="#d7d7d7" x="81.45161290322581" y="7.111111111111111" width="2.2580645161290325" height="8.88888888888889"></rect><rect fill="#1ab394" x="84.70967741935485" y="5.333333333333334" width="2.2580645161290325" height="10.666666666666666"></rect><rect fill="#d7d7d7" x="87.96774193548387" y="1.7777777777777786" width="2.2580645161290325" height="14.222222222222221"></rect><rect fill="#1ab394" x="91.22580645161291" y="10.666666666666668" width="2.2580645161290325" height="5.333333333333333"></rect><rect fill="#d7d7d7" x="94.48387096774194" y="12.444444444444445" width="2.2580645161290325" height="3.5555555555555554"></rect><rect fill="#1ab394" x="97.74193548387098" y="14.222222222222221" width="2.2580645161290325" height="1.7777777777777777"></rect></svg>
                                        <br>
                                        <small class="font-bold">$ 20 054.43</small>
                                    </div>
                                    <h4>NYS report new data!
                                        <br>
                                        <small class="m-r"><a href="graph_flot.html"> Check the stock price! </a> </small>
                                    </h4>
                                    </div>
                                </div>
                            </div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Read below comments</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <li><a href="#">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content no-padding">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <p><a class="text-info" href="#">@Alan Marry</a> I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 minuts ago</small>
                                    </li>
                                    <li class="list-group-item">
                                        <p><a class="text-info" href="#">@Stock Man</a> Check this stock chart. This price is crazy! </p>
                                        <div class="text-center m">
                                            <span id="sparkline8"><canvas width="170" height="150" style="display: inline-block; width: 170px; height: 150px; vertical-align: top;"></canvas></span>
                                        </div>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small>
                                    </li>
                                    <li class="list-group-item">
                                        <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown printer took a galley </p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago</small>
                                    </li>
                                    <li class="list-group-item ">
                                        <p><a class="text-info" href="#">@Jonathan Febrick</a> The standard chunk of Lorem Ipsum</p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago</small>
                                    </li>
                                    <li class="list-group-item">
                                        <p><a class="text-info" href="#">@Alan Marry</a> I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 minuts ago</small>
                                    </li>
                                    <li class="list-group-item">
                                        <p><a class="text-info" href="#">@Kevin Smith</a> Lorem ipsum unknown printer took a galley </p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Your daily feed</h5>
                                    <div class="ibox-tools">
                                        <span class="label label-warning-light">10 Messages</span>
                                       </div>
                                </div>
                                <div class="ibox-content">

                                    <div>
                                        <div class="feed-activity-list">

                                            <div class="feed-element">
                                                <a href="profile.html" class="pull-left">
                                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                                </a>
                                                <div class="media-body ">
                                                    <small class="pull-right">5m ago</small>
                                                    <strong>Monica Smith</strong> posted a new blog. <br>
                                                    <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                                                </div>
                                            </div>

                                            <div class="feed-element">
                                                <a href="profile.html" class="pull-left">
                                                    <img alt="image" class="img-circle" src="img/a2.jpg">
                                                </a>
                                                <div class="media-body ">
                                                    <small class="pull-right">2h ago</small>
                                                    <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                                    <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                                </div>
                                            </div>
                                            <div class="feed-element">
                                                <a href="profile.html" class="pull-left">
                                                    <img alt="image" class="img-circle" src="img/a3.jpg">
                                                </a>
                                                <div class="media-body ">
                                                    <small class="pull-right">2h ago</small>
                                                    <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                                    <small class="text-muted">2 days ago at 8:30am</small>
                                                </div>
                                            </div>
                                            <div class="feed-element">
                                                <a href="profile.html" class="pull-left">
                                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                                </a>
                                                <div class="media-body ">
                                                    <small class="pull-right text-navy">5h ago</small>
                                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                                    <div class="actions">
                                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feed-element">
                                                <a href="profile.html" class="pull-left">
                                                    <img alt="image" class="img-circle" src="img/a5.jpg">
                                                </a>
                                                <div class="media-body ">
                                                    <small class="pull-right">2h ago</small>
                                                    <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                                    <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                                    <div class="well">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                        Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                    </div>
                                                    <div class="pull-right">
                                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feed-element">
                                                <a href="profile.html" class="pull-left">
                                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                                </a>
                                                <div class="media-body ">
                                                    <small class="pull-right">23h ago</small>
                                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                                </div>
                                            </div>
                                            <div class="feed-element">
                                                <a href="profile.html" class="pull-left">
                                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                                </a>
                                                <div class="media-body ">
                                                    <small class="pull-right">46h ago</small>
                                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary btn-block m-t"><i class="fa fa-arrow-down"></i> Show More</button>

                                    </div>

                                </div>
                            </div>

                        </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Alpha project</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <li><a href="#">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content ibox-heading">
                                <h3>You have meeting today!</h3>
                                <small><i class="fa fa-map-marker"></i> Meeting is on 6:00am. Check your schedule to see detail.</small>
                            </div>
                            <div class="ibox-content inspinia-timeline">

                                <div class="timeline-item">
                                    <div class="row">
                                        <div class="col-xs-3 date">
                                            <i class="fa fa-briefcase"></i>
                                            6:00 am
                                            <br>
                                            <small class="text-navy">2 hour ago</small>
                                        </div>
                                        <div class="col-xs-7 content no-top-border">
                                            <p class="m-b-xs"><strong>Meeting</strong></p>

                                            <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the
                                                sale.</p>

                                            <p><span data-diameter="40" class="updating-chart" style="display: none;">7,3,2,9,8,7,4,5,1,2,9,5,4,7,2,7,7,3,5,2,5,3,10,5,0,7,4,1,8,7,9,7,10,1,8,10,2</span><svg class="peity" height="16" width="64"><polygon fill="#1ab394" points="0 15 0 5 1.7777777777777777 11 3.5555555555555554 12.5 5.333333333333333 2 7.111111111111111 3.5 8.88888888888889 5 10.666666666666666 9.5 12.444444444444443 8 14.222222222222221 14 16 12.5 17.77777777777778 2 19.555555555555554 8 21.333333333333332 9.5 23.11111111111111 5 24.888888888888886 12.5 26.666666666666664 5 28.444444444444443 5 30.22222222222222 11 32 8 33.77777777777778 12.5 35.55555555555556 8 37.33333333333333 11 39.11111111111111 0.5 40.888888888888886 8 42.666666666666664 15.5 44.44444444444444 5 46.22222222222222 9.5 48 14 49.77777777777777 3.5 51.55555555555555 5 53.33333333333333 2 55.11111111111111 5 56.888888888888886 0.5 58.666666666666664 14 60.44444444444444 3.5 62.22222222222222 0.5 64 12.5 64 15"></polygon><polyline fill="transparent" points="0 5 1.7777777777777777 11 3.5555555555555554 12.5 5.333333333333333 2 7.111111111111111 3.5 8.88888888888889 5 10.666666666666666 9.5 12.444444444444443 8 14.222222222222221 14 16 12.5 17.77777777777778 2 19.555555555555554 8 21.333333333333332 9.5 23.11111111111111 5 24.888888888888886 12.5 26.666666666666664 5 28.444444444444443 5 30.22222222222222 11 32 8 33.77777777777778 12.5 35.55555555555556 8 37.33333333333333 11 39.11111111111111 0.5 40.888888888888886 8 42.666666666666664 15.5 44.44444444444444 5 46.22222222222222 9.5 48 14 49.77777777777777 3.5 51.55555555555555 5 53.33333333333333 2 55.11111111111111 5 56.888888888888886 0.5 58.666666666666664 14 60.44444444444444 3.5 62.22222222222222 0.5 64 12.5" stroke="#169c81" stroke-width="1" stroke-linecap="square"></polyline></svg></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="row">
                                        <div class="col-xs-3 date">
                                            <i class="fa fa-file-text"></i>
                                            7:00 am
                                            <br>
                                            <small class="text-navy">3 hour ago</small>
                                        </div>
                                        <div class="col-xs-7 content">
                                            <p class="m-b-xs"><strong>Send documents to Mike</strong></p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="row">
                                        <div class="col-xs-3 date">
                                            <i class="fa fa-coffee"></i>
                                            8:00 am
                                            <br>
                                        </div>
                                        <div class="col-xs-7 content">
                                            <p class="m-b-xs"><strong>Coffee Break</strong></p>
                                            <p>
                                                Go to shop and find some products.
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="row">
                                        <div class="col-xs-3 date">
                                            <i class="fa fa-phone"></i>
                                            11:00 am
                                            <br>
                                            <small class="text-navy">21 hour ago</small>
                                        </div>
                                        <div class="col-xs-7 content">
                                            <p class="m-b-xs"><strong>Phone with Jeronimo</strong></p>
                                            <p>
                                                Lorem Ipsum has been the industry's standard dummy text ever since.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="row">
                                        <div class="col-xs-3 date">
                                            <i class="fa fa-user-md"></i>
                                            09:00 pm
                                            <br>
                                            <small>21 hour ago</small>
                                        </div>
                                        <div class="col-xs-7 content">
                                            <p class="m-b-xs"><strong>Go to the doctor dr Smith</strong></p>
                                            <p>
                                                Find some issue and go to doctor.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="row">
                                        <div class="col-xs-3 date">
                                            <i class="fa fa-comments"></i>
                                            12:50 pm
                                            <br>
                                            <small class="text-navy">48 hour ago</small>
                                        </div>
                                        <div class="col-xs-7 content">
                                            <p class="m-b-xs"><strong>Chat with Monica and Sandra</strong></p>
                                            <p>
                                                Web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.footer')
        </div>
    </div>
</div>

@endsection

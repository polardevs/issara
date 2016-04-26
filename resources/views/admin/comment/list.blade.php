@extends('layouts.admin')
@section('content')

<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 630px;">
    <div class="row border-bottom">
	    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
	        <ul class="nav navbar-top-links navbar-right">
	            <li>
	                <span class="m-r-sm text-muted welcome-message">Welcome to Issara Admin</span>
	            </li>
	            <li>
	                <a href="login.html">
	                    <i class="fa fa-sign-out"></i> Log out
	                </a>
	            </li>
	        </ul>
	    </nav>
    </div>
    <div class="row wrapper border-bottom white-bg page-heading">
	    <div class="col-lg-12">
	        <h2>Comment</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="{{ url('/admin') }}">Home</a>
	            </li>
	            <li>
	                <a href="{{ url('/admin/comment') }}">Comment</a>
	            </li>
	            <li class="active">
	                <strong>Room1</strong>
	            </li>
	        </ol>
	        <div class="notification" data-toggle="tooltip" title="Spam Report">
	        	<a href="{{ url('/admin/comment/notification') }}">
		        	<i class="fa fa-exclamation-circle fa-2x"></i>
		        	<span class="label pull-right">62</span>
	        	</a>
	        </div>
	    </div>

	</div>
	<div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>room1</h5>
            </div>
            <div class="ibox-content">
            	<div class="row">
            		<div class="col-sm-12">
						<table class="table">
							<thead>
								<tr>
									<th class="col-sm-9">topic</th>
									<th class="col-sm-3"></th>
								</tr>
							</thead>
							<tbody>
								@for ($i = 0; $i < 3; $i++)

								<tr>
									<td>
										<div class="h-topic">[CR] "Japan Trip Once Again" อีกครั้งนึง...อินเจแปน &gt;&gt; Kumamoto</div>
										<div class="c-topic">
							        		เย้ๆๆ จบแล้ว...ปรบมือรัวๆ เข้ามารอทุกวันเลย ภาพสวย คนสวย(หล่อ) ครอบครัวน่ารัก ข้อมูลเป็นประโยชน์ที่สุด ^3^
	        							</div>
									</td>
									<td>
										18-01-2016 By Kyushu<br> 
										comment <br>
										18-01-2016 By JKkunjae 
										<i data-toggle="tooltip" title="Delete" class="fa fa-trash text-danger"></i>
									</td>
								</tr>
								@endfor
							</tbody>
						</table>
					</div>
            	</div>
            </div>
        </div>
    </div>
    @include('admin.footer')
</div>

@endsection


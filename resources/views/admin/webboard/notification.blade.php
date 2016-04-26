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
	    <div class="col-lg-10">
	        <h2>Webboard</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="{{ url('/admin') }}">Home</a>
	            </li>
	            <li>
	                <a href="{{ url('/admin/webboard') }}">Webboard</a>
	            </li>
	            <li class="active">
	                <strong>Notification</strong>
	            </li>
	        </ol>
	    </div>

	</div>
	<div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Notification</h5>
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
							        		สวัสดีค่า เพื่อนๆชาว pantip นานาสวัสดี
											ขออนุญาตเท้าความ...ถึงความเป็นมาของทริปนี้นิดนึงนะคะ
											โดยปกติเราและน้องสาวจะมีของขวัญเล็กน้อยให้พ่อแม่ และพี่น้อง เป็นปกติทุกปีหลังจากโบนัสออก ^^
											เรากับน้องสาวเลยตกลงกันว่าพาพ่อแม่ไปเที่ยวต่างประเทศ หาประสบการณ์ที่แปลกใหม่ น่าจะเป็นของขวัญที่คนรับคงภูมิใจแน่นอน จุ๊บๆ
											ประกอบกับช่วงที่เราไปเพิ่งผ่านวันเกิดน้องสาวตัวดีพอดีด้วยค่ะ ถือโอกาสฉลองวันเกิด และชาร์ตแบตเติมพลังสำหรับการทำงานปีนี้ด้วย
	        							</div>
									</td>
									<td>
										18-01-2016 By Kyushu<br> 
										<i data-toggle="tooltip" title="Like" class="fa fa-thumbs-o-up"></i> 10 
										<i data-toggle="tooltip" title="Comment" class="fa fa-comment-o"></i> 10<br>
										Report By jaejoong
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


@extends('layouts.app')

@section('content')
<div id="form-login" class="bg-form-login" style="display: none;">
    <div class="form-login">
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
                <small id="register">Register</small>
            </div>
        </div>
    </div>
    <div class="form-register" style="display: none; height: 365px;">
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
            
                <small id="member-login">Member Login</small>
            </div>
            
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ asset('image/slide1.jpg') }}" alt="Chania" >
                    </div>

                      <div class="item">
                        <img src="{{ asset('image/slide2.jpg') }}" alt="Chania" >
                      </div>
                    
                      <div class="item">
                        <img src="{{ asset('image/slide3.jpg') }}" alt="Flower" >
                      </div>

                      <div class="item">
                        <img src="{{ asset('image/slide4.jpg') }}" alt="Flower" >
                      </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>JOURNEY BEYEOND</h3>
                            <img src="{{ asset('image/slide2.jpg') }}" class="img-responsive">
                            <p style="padding-top: 10px;">
                                วาเลนไทน์นี้-ชวนคนรักไปชิล สัมผัสบรรยากาศสุดโรแมนติก บนบอลลูนยักษ์ลอยฟ้า ที่ สิงห์ ปาร์ค เชียงราย
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <span class="btn btn-default"> READ MORE </span>
                        </div>
                        <div class="col-sm-8 share-bar">
                            <small>
                                <i class="fa fa-comment-o"></i> 50 
                                <i class="fa fa-heart-o"></i> 50 
                                <i class="fa fa-share-alt"></i> 
                            </small>
                        </div>
                        <div class="col-sm-12">
                            <span class="btn btn-primary" style="margin-top: 10px; padding:6px 30px; border: none;"> MORE STORE HERE </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>JOURNEY BEYEOND</h3>
                            <img src="{{ asset('image/slide2.jpg') }}" class="img-responsive">
                            <p style="padding-top: 10px;">
                                วาเลนไทน์นี้-ชวนคนรักไปชิล สัมผัสบรรยากาศสุดโรแมนติก บนบอลลูนยักษ์ลอยฟ้า ที่ สิงห์ ปาร์ค เชียงราย
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <span class="btn btn-default"> READ MORE </span>
                        </div>
                        <div class="col-sm-8 share-bar">
                            <small>
                                <i class="fa fa-comment-o"></i> 50 
                                <i class="fa fa-heart-o"></i> 50 
                                <i class="fa fa-share-alt"></i> 
                            </small>
                        </div>
                        <div class="col-sm-12">
                            <span class="btn btn-primary" style="margin-top: 10px; padding:6px 30px; border: none;"> MORE STORE HERE </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>JOURNEY BEYEOND</h3>
                            <img src="{{ asset('image/slide2.jpg') }}" class="img-responsive">
                            <p style="padding-top: 10px;">
                                วาเลนไทน์นี้-ชวนคนรักไปชิล สัมผัสบรรยากาศสุดโรแมนติก บนบอลลูนยักษ์ลอยฟ้า ที่ สิงห์ ปาร์ค เชียงราย
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <span class="btn btn-default"> READ MORE </span>
                        </div>
                        <div class="col-sm-8 share-bar">
                            <small>
                                <i class="fa fa-comment-o"></i> 50 
                                <i class="fa fa-heart-o"></i> 50 
                                <i class="fa fa-share-alt"></i> 
                            </small>
                        </div>
                        <div class="col-sm-12">
                            <span class="btn btn-primary" style="margin-top: 10px; padding:6px 30px; border: none;"> MORE STORE HERE </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>JOURNEY BEYEOND</h3>
                            <img src="{{ asset('image/slide2.jpg') }}" class="img-responsive">
                            <p style="padding-top: 10px;">
                                วาเลนไทน์นี้-ชวนคนรักไปชิล สัมผัสบรรยากาศสุดโรแมนติก บนบอลลูนยักษ์ลอยฟ้า ที่ สิงห์ ปาร์ค เชียงราย
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <span class="btn btn-default"> READ MORE </span>
                        </div>
                        <div class="col-sm-8 share-bar">
                            <small>
                                <i class="fa fa-comment-o"></i> 50 
                                <i class="fa fa-heart-o"></i> 50 
                                <i class="fa fa-share-alt"></i> 
                            </small>
                        </div>
                        <div class="col-sm-12">
                            <span class="btn btn-primary" style="margin-top: 10px; padding:6px 30px; border: none;"> MORE STORE HERE </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>JOURNEY BEYEOND</h3>
                            <img src="{{ asset('image/slide2.jpg') }}" class="img-responsive">
                            <p style="padding-top: 10px;">
                                วาเลนไทน์นี้-ชวนคนรักไปชิล สัมผัสบรรยากาศสุดโรแมนติก บนบอลลูนยักษ์ลอยฟ้า ที่ สิงห์ ปาร์ค เชียงราย
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <span class="btn btn-default"> READ MORE </span>
                        </div>
                        <div class="col-sm-8 share-bar">
                            <small>
                                <i class="fa fa-comment-o"></i> 50 
                                <i class="fa fa-heart-o"></i> 50 
                                <i class="fa fa-share-alt"></i> 
                            </small>
                        </div>
                        <div class="col-sm-12">
                            <span class="btn btn-primary" style="margin-top: 10px; padding:6px 30px; border: none;"> MORE STORE HERE </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>JOURNEY BEYEOND</h3>
                            <img src="{{ asset('image/slide2.jpg') }}" class="img-responsive">
                            <p style="padding-top: 10px;">
                                วาเลนไทน์นี้-ชวนคนรักไปชิล สัมผัสบรรยากาศสุดโรแมนติก บนบอลลูนยักษ์ลอยฟ้า ที่ สิงห์ ปาร์ค เชียงราย
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <span class="btn btn-default"> READ MORE </span>
                        </div>
                        <div class="col-sm-8 share-bar">
                            <small>
                                <i class="fa fa-comment-o"></i> 50 
                                <i class="fa fa-heart-o"></i> 50 
                                <i class="fa fa-share-alt"></i> 
                            </small>
                        </div>
                        <div class="col-sm-12">
                            <span class="btn btn-primary" style="margin-top: 10px; padding:6px 30px; border: none;"> MORE STORE HERE </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>JOURNEY BEYEOND</h3>
                            <img src="{{ asset('image/slide2.jpg') }}" class="img-responsive">
                            <p style="padding-top: 10px;">
                                วาเลนไทน์นี้-ชวนคนรักไปชิล สัมผัสบรรยากาศสุดโรแมนติก บนบอลลูนยักษ์ลอยฟ้า ที่ สิงห์ ปาร์ค เชียงราย
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <span class="btn btn-default"> READ MORE </span>
                        </div>
                        <div class="col-sm-8 share-bar">
                            <small>
                                <i class="fa fa-comment-o"></i> 50 
                                <i class="fa fa-heart-o"></i> 50 
                                <i class="fa fa-share-alt"></i> 
                            </small>
                        </div>
                        <div class="col-sm-12">
                            <span class="btn btn-primary" style="margin-top: 10px; padding:6px 30px; border: none;"> MORE STORE HERE </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>JOURNEY BEYEOND</h3>
                            <img src="{{ asset('image/slide2.jpg') }}" class="img-responsive">
                            <p style="padding-top: 10px;">
                                วาเลนไทน์นี้-ชวนคนรักไปชิล สัมผัสบรรยากาศสุดโรแมนติก บนบอลลูนยักษ์ลอยฟ้า ที่ สิงห์ ปาร์ค เชียงราย
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <span class="btn btn-default"> READ MORE </span>
                        </div>
                        <div class="col-sm-8 share-bar">
                            <small>
                                <i class="fa fa-comment-o"></i> 50 
                                <i class="fa fa-heart-o"></i> 50 
                                <i class="fa fa-share-alt"></i> 
                            </small>
                        </div>
                        <div class="col-sm-12">
                            <span class="btn btn-primary" style="margin-top: 10px; padding:6px 30px; border: none;"> MORE STORE HERE </span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-sm-4">
            <h3>FOLLOW US FACEBOOK</h3>
            <div class="fb-page"
            data-href="https://www.facebook.com/imdb" 
            data-width="340"
            data-hide-cover="false"
            data-show-facepile="true"></div>
            
            <h3>ISSARA FASTIVAL</h3>
            <p>สงกรานต์</p>
            <p>สงกรานต์</p>
            <p>สงกรานต์</p>
            <p>สงกรานต์</p>
            <h3>OTHER LINk</h3>
            <p>link 1</p>
            <p>link 2</p>
            <p>link 3</p>
            <p>link 4</p>
            <p>link 5</p>
            <h3>SPONSERS</h3>
            <img src="{{ asset('image/slide4.jpg') }}" class="img-responsive" style="padding-bottom: 15px;">
            <img src="{{ asset('image/slide4.jpg') }}" class="img-responsive" style="padding-bottom: 15px;">
        </div>
    </div>
</div>



<script>

$( "#login" ).click(function() {
  $('#form-login').show();
});
$( "#register" ).click(function() {
  $('.form-login').hide();
  $('.form-register').show();
});
$( "#member-login" ).click(function() {
  $('.form-register').hide();
  $('.form-login').show();
});





(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=708835312562084";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>


@endsection

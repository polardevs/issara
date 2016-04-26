<footer>
	<div class="container">
        <div class="row">
            <div class="col-sm-4">
                CONTACT US
                <p class="contact">
                    Issara Journey
                </p>
            </div>
            <div class="col-sm-4">
                SOCIAL NETWORK
                <div class="contact">
                    <a href="https://www.facebook.com/IssaraJourney/" class="link">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://www.facebook.com/IssaraJourney/" class="link">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/IssaraJourney/" class="link">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/IssaraJourney/" class="link">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                    <a href="https://www.facebook.com/IssaraJourney/" class="link">
                        <i class="fa fa-comment-o"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">

            </div>
        </div>
		<!-- <p style="padding-top: 15px;">© Issara Journey, All Rights Reserved 2016</p> -->
	</div>
</footer>

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
$('.close-login ').click(function() {
  $('.form-register').hide();
  $('.form-login').show();
  $('#form-login').hide();
});
</script>
<!-- Facebook -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=708835312562084";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Google+ -->
<script src="https://apis.google.com/js/platform.js" async defer></script>
<!-- Tweeter -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

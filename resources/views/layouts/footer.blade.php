<footer>
	<div class="container">
		<p style="padding-top: 15px;">© Issara Journey, All Rights Reserved 2016</p>
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




(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=708835312562084";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
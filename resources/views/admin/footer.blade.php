<div class="footer">
    <div>
    	Powered by Laravel 5
        <!-- <strong>Copyright</strong> Example Company © 2014-2015 -->
    </div>
</div>
<script>
  function readURL(input, showPlace) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#' + showPlace).attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
  }
</script>

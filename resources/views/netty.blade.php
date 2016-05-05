<html>
	<input type="text" id="value">
	<button id ="send" onclick="myFunction()">send</button>
</html>



<script type="text/javascript">
	function walk(txt) {
    var x = 0;
    var y = 0;
    var i = 0;
    while(i < txt.length) {
        if(txt[i] == 'N') y++;
        if(txt[i] == 'S') y--;

        if(txt[i] == 'E') x++;
        if(txt[i] == 'W') x--;
      i++
    }
    return Math.sqrt(x*x + y*y);
  }

  function sum(a) {
  	var i = 0;
  	var sum= 0;
    while(i < a.length) {
    	sum += a[i];
    	i++;
    }
    console.log("function sum  sum=" + sum);
  }

  function maximum(a){
  	var i = 0;
  	var max = a[0]
    while(i < a.length) {
    	if( max < a[i]) max = a[i];
    	i++;
    }
    console.log(max);
  }

  function divider(n){
  	var i = 0;
  	var divider = [];
  	while (i <= n){
  		if(n%i == 0) divider.push(i);
  		i++;
  	}
  	console.log(divider);
  }

  function commonDivider(m,n){
  	var i = 0;
  	var divider = [];
  	n = (n)? n : m;
  	while (i <= n && i<= m){
  		if(n%i == 0 && m%i == 0) divider.push(i);
  		i++;
  	}
  	console.log(divider);
  }

  function getCode(city){
  	var data = {
			'เมืองนนทบุรี' : '11000',
			'บางบัวทอง'  : '11110',
			'ปากเกร็ด'   : '11120',
			'บางกรวย'   : '11130',
			'บางใหญ่'    : '11140',
			'ไทรน้อย'    : '11150'
		};
		cityCode = (data[city])? (data[city]) : 'not found';
		return cityCode;
  }
  function maximumOil(){

  }


  function myFunction(){
	  var value = document.getElementById('value').value
	  console.log(getCode(value));
  }
</script>
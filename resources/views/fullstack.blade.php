<script type="text/javascript">
  // value = [1,2];
  // values.push('a')     ==> [1, 2, a];
  // values.pop('a')      ==> [1, 2];
  // values.shift('a')    ==> [2];
  // values.unshift('a')  ==> ['a', 2];

  function meterToFoot(meter) {
    return 3.28 * meter;
  }

  function area(width, height) {
    return width * height;
  }

  function cost(hour, minute, seccond) {

  }

  function maxInThree(a, b, c) {
    var max = a;
    if(max < b) max = b;
    if(max < c) max = c;

    return max;
  }

  function reverse(text) {
    var txt = "";
    var num = text.length;
    while (num>0) {
        txt += text.substring(num-1,num);
        num--;
        console.log(text[num]);
    }
    return txt;
}

  function reversea(text) {
    var r = '';
    var i=0;
    while(i<text.length){
      r =text[i]+r;
      i = i+1;
    }
    return r
  }

  function walk(txt) {
    var x = 0;
    var y = 0;
    var i = 0;
    while(i < txt.length) {
        if(txt[i] == 'N') x++;
        if(txt[i] == 'S') x--;

        if(txt[i] == 'E') y++;
        if(txt[i] == 'W') y--;
      i++
    }
    return Math.sqrt(x*x + y*y);
  }

  function sum(integers) {
    var int = 0;
    var i = 0;
    while(i < integers.length) {
      int += integers[i];
      i++;
    }

    return int;
  }

  function max(integers) {
    var i = 0;
    var max = integers[0];
    while(i < integers.length){
      if(max < integers[i]) max = integers[i];
      i++;
    }

    return max;
  }

  function divider(n) {
    var i = 1;
    var numbers = [];
    while(i <= n) {
      if(n%i == 0) numbers.push(i);
      i++;
    }

    return numbers;
  }

  function commonDivider(a, b) {
    var i = 1;
    var numbers = [];
    var max = a > b ? a : b;
    while(i <= max) {
      if( a%i == 0 && b%i == 0 ) numbers.push(i);
      i++;
    }

    return numbers;
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
    return data[city] ? data[city] : 'not found';
  }

  function skipNext(numbers){
    var i = 0;
    var integer = 0;
    while(i < numbers.length){
      integer += numbers[i];
      i += 2;
    }

    return integer;
  }

  console.log(skipNext([3, 2, 4, 8, 5]));
</script>

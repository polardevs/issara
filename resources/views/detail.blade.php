@extends('layouts.app')

@section('content')

<div class="container bg-white">
    <div class="row">
        <div class="col-sm-8">
        	<div class="row">
                <div class="col-sm-12" style="padding-top: 15px;">
                    <p>est</p>
                    <hr>
                </div>
                <div class="col-sm-12">
                    <h3>{{ $content->name }}</h3>
                    <small>7 FEB, 2016 By <span style="color: #4B67A0">Admin</span></small>
                    <h3>Casa De Montana - เขาใหญ่ จ.นครราชสีมา</h3>
                    <p>
                        คาซ่า เดอ มอนทาน่า เขาใหญ่ ที่พักสุดเก๋ไก๋ ออกแบบดีไซน์รถบ้านให้กลายเป็นที่พักสุดชิค ภายในห้องพักเน้นเฟอร์นิเจอร์งานไม้จริง ที่ให้ความรู้สึกอบอุ่น ส่วนบรรยากาศรอบๆ ก็สดชื่น มีต้นไม้น้อยใหญ่ให้ร่มเงาพอสมควร นอกจากนี้ตอนกลางคืนใครที่ชวนเพื่อนมาเป็นกลุ่มอยากจะก่อกองไฟ ล้อมวงกันปิ้งย่างก็มีมุมที่นั่งชิคๆ ที่ออกแบบมาเพื่อกลุ่มเพื่อน กลุ่มครอบครัว และคนที่ชื่นชอบบรรยากาศแบบชาวค่ายให้ล้อมวงกันสังสรรค์ยามดึก แม้จะไม่ใช่ที่พักสไตล์เต้นท์นอนแต่ก็ให้ความรู้สึกเหมือนไปแคมป์ปิ้งแบบ Road Trip ต่างประเทศสุดๆ

                    </p>
                    <img src="{{ asset('image/detail0.jpg') }}" class="img-responsive" style="padding-bottom: 20px;">

                    <h3>Ozono Resort & Restaurant - สวนผึ้ง จ.ราชบุรี</h3>
                    <p>
                        โอโซโน่ ที่พักบรรยากาศสุดฮิปในสวนผึ้ง เมืองท่องเที่ยวอย่างราชบุรีแห่งนี้ ถูกออกแบบมาในสไตล์ยุโรป และวินเทจ โดดเด่นด้วยสีสันน่ารักสดใส ท่ามกลางธรรมชาติที่ร่มรื่น เน้นความเป็นส่วนตั๊วส่วนตัวสำหรับการพักผ่อน ภายในรีสอร์ทมีบ้านพักถึง 11 หลังด้วยกัน ซึ่งแต่ละหลังก็มีความเก๋อยู่ในตัวแตกต่างกันไป โดยเฉพาะที่พักแบบ vw camper van ที่จะให้คุณเปลี่ยนบรรยากาศไปนอนชิลอยู่ในรถโฟล์ค เสมือนกำลังออกไปตั้งแคมป์ด้วยรถบ้าน แต่ก็เพรียบพร้อมด้วยสิ่งอำนวยความสะดวกที่จำเป็นแบบครบถ้วน นี่ถ้ามีกีต้าร์โปร่งสำหรับร้องเพลงสักตัว ท้องฟ้ามีหมู่ดาวสวยๆให้ชม ความฟินก็กินขาดแล้วจ้า
                    </p>
                    <img src="{{ asset('image/detail1.jpg') }}" class="img-responsive" style="padding-bottom: 20px;">
                    <img src="{{ asset('image/detail2.jpg') }}" class="img-responsive" style="padding-bottom: 20px;">

                    <h3>เถ้าแก่ลาว - เชียงคาน จ.เลย</h3>
                    <p>
                        เถ้าแก่ลาว โรงเตี๊ยมจีนกลางเมืองเชียงคาน ที่ผสมผสานระหว่างความเป็นจีนและลาวเอาไว้ได้อย่างลงตัว ลองนั่งจิบกาแฟเวียดนามบนเก้าอี้ไม้ ชมของสะสมเก่าแก่หายาก มองผู้คนสัญจรไปมาแล้วก็รู้สึกว่าการพักผ่อนที่นี่ช่างแสนสบายอารมณ์ ไม่มีอะไรหวือหวาให้ผิดแผกไปจากธรรมชาติของเชียงคานเลยสักนิด ทว่าหากคุณกําลังมองหาความแปลกใจ ที่เถ้าแก่ลาวก็มีซุกซ่อนอยู่เช่นกัน เพราะแม้ห้องพัก "เถ้าแก่ลาว การาจ" จะไม่ได้อยู่ติดริมโขงแต่บรรยากาศก็ชิคได้ใจไปเต็มๆ กับการออกแบบมาให้เป็นเหมือนอู่รถ เล็ก กะทัดรัด เหมาะสําหรับคู่รักมาสวีทหวานแหวว โดยมีห้องนอนเป็นรถโฟล์คสุดคลาสสิค และการตกแต่งแบบวินเทจ เรียกได้ว่าชิคสมกับเป็นเมืองเชียงคานจริงๆ
                    </p>
                    <img src="{{ asset('image/detail3.jpg') }}" class="img-responsive" style="padding-bottom: 20px;">

                    <h3>มาริปาย - ปาย จ.แม่ฮ่องสอน</h3>
                    <p>
                        "มาริ" เป็นภาษาชวาแปลว่า "มาหา" มาริปายจึงแปลว่า "มาหาปาย" พอได้มาเห็นแล้วถึงรู้ว่า ทำไมใครๆ ถึงได้ตกหลุมรักรีสอร์ทแห่งนี้ บ้านพักที่นี่แบ่งออกเป็น 3 สไตล์ ลดหลั่นกันลงไปตามเนินเขา แต่ละห้องจึงไม่บดบังวิวกันและกัน ทำให้สามารถมองเห็นวิวสวยๆได้ครบทุกหลัง ทั้งบ้านกลมสไตล์แอฟริกัน, บ้านเต้นท์น่ารักอย่างบ้านรังนก ที่ผนังภายในใช้ไม้รีไซเคิลจากกล่องคอนเทนเนอร์เก่าเอามากรุกั้นหัวเตียงเก๋ๆ และรถบ้านที่เอามาทำเป็นห้องพักให้อารมณ์คล้ายๆ เดินทางโดยรถเทรลเลอร์แบบเมืองนอก แหม เห็นบรรยากาศแล้วอยากเก็บกระเป๋าไปปายซะเดี๋ยวนี้เลยอะ
                    </p>
                    <img src="{{ asset('image/detail4.jpg') }}" class="img-responsive" style="padding-bottom: 20px;">

                    <h3>บ้านราชาวดี - เกาะล้าน จ.ชลบุรี</h3>
                    <p>
                        ราชาวดี เกาะล้าน บ้านพักสไตล์การ์ตูนสีลูกกวาด สดใสน่ารักไม่เหมือนใคร ภายในรีสอร์ทแบ่งเป็นสองโซน โซนแรกเป็นโซนบ้านแฝดเห็นหลังๆ ติดกัน ที่มีทั้งห้องเล็กและห้องใหญ่ภายในตกแต่งสีสันไม่แพ้กับด้านนอก มีการประดับประดาด้วยเฟอร์นิเจอร์เก๋ๆ น่ารักกุ๊กกิ๊ก ต่างกันไปตามแต่ละห้อง ส่วนอีกโซน เป็นโซนบ้านรถบรรทุก โซนนี้นักท่องเที่ยวต่างคุ้นเคยกันดีเพราะหลายคนที่มาพักที่นี่ต้องพากันถ่ายรูปคู่กับรถบรรทุกบ้านพักสุดเก๋ แล้วอัพลงเฟสบุ๊คเพื่ออวดเพื่อนๆให้อิจฉาเล่น ที่สำคัญคือพักได้มากถึง 5 คนเชียวล่ะ หากมาเป็นแก๊งแล้วอยากสนุกกันได้เต็มที่ก็ต้องพักที่บ้านรถบรรทุกหลังนี้เล้ยยย
                    </p>
                    <img src="{{ asset('image/detail5.jpg') }}" class="img-responsive" style="padding-bottom: 20px;">
                    <img src="{{ asset('image/detail6.jpg') }}" class="img-responsive" style="padding-bottom: 20px;">
                </div>
                <div class="col-sm-12 share">
                    <span><i class="fa fa-facebook-official"></i></span>
                    <span><i class="fa fa-twitter-square"></i></span>
                    <span><i class="fa fa-google-plus-square"></i></span>
                    <hr>
                </div>
                <div class="col-sm-12">
                    <h3>Recommend</h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{ asset('image/rec1.jpg') }}" class="img-responsive" style="padding-bottom: 20px;">
                            <p>10 รองเท้าผ้าใบปี 2015 ที่รู้ราคาแล้วต้องอุทานว่า OMG! พี่จะแพงไปไหน!!</p>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('image/rec2.jpg') }}" class="img-responsive" style="padding-bottom: 20px;">
                            <p>COOL GREY แฟชั่นโทนสีเทา ใส่ได้ตลอดปี ไม่มีเอ้าท์!</p>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('image/rec3.jpg') }}" class="img-responsive" style="padding-bottom: 20px;">
                            <p>Rustic & Blue  จิบชา ฟังเพลงเบาๆ ชีวิตดี๊ดี ที่นิมมาน เชียงใหม่</p>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-sm-12" style="padding-bottom: 20px;">
                    <h3>Comments</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <div class="commented">
                                <div class="row arrow-up">
                                    <div class="col-sm-2">
                                        <img src="{{ asset('image/user.jpeg') }}" class="img-responsive" style="border: 2px solid; border-radius: 6px;">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4>Nuttaya จุ้บจุ้บ</h4>
                                        <p>ไปพักที่วังน้ำเขียวมาค่ะ ถามทางที่พักว่า ก่อนกลับ กทม.เนี่ย มีที่เที่ยวที่ไหนน่าสนใจบ้าง ทางรีสอร์ทเค้าก็แนะนำมาที่นี่ แต่เค้าก็บอกล่วงหน้าแล้วนะ ว่าเป็นที่เที่ยวเปิดใหม่ ความสวยน่ะโอเค แต่แกะอาจจะตัวผอมๆอยู่บ้าง แต่คนไม่พลุกพล่าน แก๊งค์เราชอบถ่ายรูปน่าจะชอบกัน เราก็เอาเลยค่ะ ไปกันทันที </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="commented">
                                <div class="row arrow-up">
                                    <div class="col-sm-2">
                                        <img src="{{ asset('image/user.jpeg') }}" class="img-responsive" style="border: 2px solid; border-radius: 6px;">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4>Nuttaya จุ้บจุ้บ</h4>
                                        <p>ไปพักที่วังน้ำเขียวมาค่ะ ถามทางที่พักว่า ก่อนกลับ กทม.เนี่ย มีที่เที่ยวที่ไหนน่าสนใจบ้าง ทางรีสอร์ทเค้าก็แนะนำมาที่นี่ แต่เค้าก็บอกล่วงหน้าแล้วนะ ว่าเป็นที่เที่ยวเปิดใหม่ ความสวยน่ะโอเค แต่แกะอาจจะตัวผอมๆอยู่บ้าง แต่คนไม่พลุกพล่าน แก๊งค์เราชอบถ่ายรูปน่าจะชอบกัน เราก็เอาเลยค่ะ ไปกันทันที </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-sm-4" style="border-left: 1px solid #eee;">
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

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=708835312562084";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@endsection

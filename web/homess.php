<!DOCTYPE html>
<html lang="en">

<head>
    <title>paiduaykan</title>
    <!-- ลิ้งค์เอามาจาก Responsive Columns-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--ลิ้งค์Responsive Bar-->
    <style>
        .mySlides {
            display: none;
        }
    </style>
    <!-- slideshow caption-->
</head>

<body>

    <div class="container">
        <!-- เริ่มต้น class Container -->
        <div class="row">
            <!-- เริ่มต้น Banner -->
            <div class="col-md-12 loco" style=" background-color:pink;"><img src="../admin/flower/img/rosealiya.png"></div>
        </div>
        <!-- สิ้นสุด Banner -->

        <div class="row">
            <!-- เริ่มต้น Menu -->
            <div class="col-md-9" style="border-style: groove;background-color:pink;">
                <div class="w3-bar w3-black">
                    <a href="#" class="w3-bar-item w3-button w3-mobile">หน้าแรก</a>
                    <a href="#" class="w3-bar-item w3-button w3-mobile">ข้อมูลื่องเที่ยวจังหวัด</a>
                    <a href="#" class="w3-bar-item w3-button w3-mobile">รีวิวท่องเที่ยว</a>
                    <a href="#" class="w3-bar-item w3-button w3-mobile">ที่พักทั่วไทย</a>
                    <a href="#" class="w3-bar-item w3-button w3-mobile">รีวิวคาเฟ่ ร้านอาหาร</a>
                    <a href="#" class="w3-bar-item w3-button w3-mobile">ติดต่อโฆษณา</a>
                </div>
            </div>
            <div class="col-md-3" style="border-style: groove;">ปุ่มค้นหา</div>
        </div>
        <!-- สิ้นสุด menu -->

        <div class="row">
            <!-- เริ่มต้น Slide Image -->
            <div class="col-md-12" style="border-style: groove;background-color:pink;">
                <div class="w3-content w3-display-container">
                    <div class="w3-display-container mySlides">
                        <img src="img/slide1.jpg" style="width:100%">
                        <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
                            อ่านต่อ...
                        </div>
                    </div>

                    <div class="w3-display-container mySlides">
                        <img src="img/slide2.jpg" style="width:100%">
                        <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
                            อ่านต่อ...
                        </div>
                    </div>

                    <div class="w3-display-container mySlides">
                        <img src="img/slide3.jpg" style="width:100%">
                        <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
                            อ่านต่อ...
                        </div>
                    </div>

                    <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
                </div>
            </div>
            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = x.length
                    }
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex - 1].style.display = "block";
                }
            </script>

        </div>
        <!-- สิ้นสุด Slide Image -->

        <div class="row">
            <!-- เริ่มต้น รีวิว อัพเดท -->
            <div class="col-md-12" style="border-style: groove;background-color: pink;">รีวิว อัพเดท <br>
                <div class="row">
                    <!--เริ่มรูปภาพเเถวที่ 1-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <div class="card" style="width:250px">
                            <!--เริ่มต้น card รูปที่ 1-->
                            <img class="card-img-top" src="img/รีวิว1.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ที่พักแม่แตง ถูกใจสายรักธรรมชาติ</h6>
                                <a href="review/review.html" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                        <!--สิ้นสุด Card รูปที่ 1-->
                    </div>

                    <div class="col-md-3" style="border-style: dashed;">
                        <div class="card" style="width:250px">
                            <!--เริ่มต้น card รูปที่ 2-->
                            <img class="card-img-top" src="img/รีวิว2.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">10 ปราสาทหินน่าเที่ยว ทรงคุณค่าสถาปัตยกรรม</h6>
                                <a href="review/review2.html" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                        <!--สิ้นสุด Card รูปที่ 2-->
                    </div>

                    <div class="col-md-3" style="border-style: dashed;">
                        <div class="card" style="width:250px">
                            <!--เริ่มต้น card รูปที่ 3-->
                            <img class="card-img-top" src="img/รีวิว3.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ที่พัก เมืองแม่ฮ่องสอน</h6>
                                <a href="review/review3.html" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                        <!--สิ้นสุด Card รูปที่ 3-->
                    </div>

                    <div class="col-md-3" style="border-style: dashed;">
                        <div class="card" style="width:250px">
                            <!--เริ่มต้น card รูปที่ 4-->
                            <img class="card-img-top" src="img/รีวิว4.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ที่พักพะเยา มองวิวกว๊าน เที่ยวชมเมือง</h6>
                                <a href="review/review4.html" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                        <!--สิ้นสุด Card รูปที่ -->
                    </div>
                </div>
                <!--สิ้นสุดรูปภาพเเถวที่ 1-->


                <div class="row">
                    <!--เริ่มรูปภาพเเถวที่ 2-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <div class="card" style="width:250px">
                            <!--เริ่มต้น card รูปที่ 5-->
                            <img class="card-img-top" src="img/รีวิว5.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 วัดสวย น่าเที่ยว เมืองน่าน</h6>
                                <a href="review/review5.html" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                        <!--สิ้นสุด Card รูปที่ 5-->
                    </div>
                    <div class="col-md-3" style="border-style: dashed;">
                        <div class="card" style="width:250px">
                            <!--เริ่มต้น card รูปที่ 6-->
                            <img class="card-img-top" src="img/รีวิว6.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">8 ป่าสนเมืองไทย วิวสวยชวนฝัน</h6>
                                <a href="review/review6.html" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                        <!--สิ้นสุด Card รูปที่ 6-->
                    </div>
                    <div class="col-md-3" style="border-style: dashed;">
                        <div class="card" style="width:250px">
                            <!--เริ่มต้น card รูปที่ 7-->
                            <img class="card-img-top" src="img/รีวิว7.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">20 ที่พักเขาหลัก พักสบายริมทะเล</h6>
                                <a href="review/review7.html" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                        <!--สิ้นสุด Card รูปที่ 7-->
                    </div>
                    <div class="col-md-3" style="border-style: dashed;">
                        <div class="card" style="width:250px">
                            <!--เริ่มต้น card รูปที่ 8-->
                            <img class="card-img-top" src="img/รีวิว8.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 คาเฟ่แม่ฮ่องสอน ดื่มด่ำรสกาแฟ วิวธรรมชาติ ขุนเขา</h6>
                                <a href="review/review8.html" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                        <!--สิ้นสุด Card รูปที่ 8-->
                    </div>
                </div>
                <!--สิ้นสุดรูปภาพเเถวที่ 2-->

            </div>
        </div>
        <!-- สิ้นสุด รีวิวอัพเดท -->

        <div class="row">
            <!-- เริ่มต้น วันเดียว เที่ยวใกล้กรุง -->
            <div class="col-md-12" style="border-style: groove;background-color: pink;">วันเดียว เที่ยวใกล้กรุง
                <div class="row">
                    <!--เริ่มต้นรูปเเถวที่ 1-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 1-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/เที่ยว1.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">รวมจุดแชะ แวะ กิน เที่ยว ตลาดน้อย</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 1-->

                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 2-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/เที่ยว2.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">ลำลูกกา ย่านเด็ดที่ซ่อนในปทุมธานี</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 2-->

                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 3-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/เที่ยว3.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">1 วันว่าง ชวนไป…ลาดพร้าว</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 3-->

                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 4-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/เที่ยว4.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">เตร็ดเตร่…ซอยอารีย์</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 4-->
                </div>
                <!--สิ้นสุด รูปเเถวที่ 1-->
                <div class="row">
                    <!--เริ่มต้นรูปเเถวที่ 2-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 5-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/เที่ยว5.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">สวนเนื้อนาบุญ ทุ่งดอกไม้ราชบุรี</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 5-->

                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 6-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/เที่ยว6.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">เก็บพิกัดเที่ยวเด็ด สวนผึ้ง ราชบุรี วันเดียวก็ชิลได้</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 6-->

                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 7-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/เที่ยว7.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">Funny Day นครปฐม ราชบุรี หามุมถ่ายรูป 3 สไตล์</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 7-->

                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 8-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/เที่ยว8.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">Slow day นครนายก ตื่นตาถ้ำพญานาค แวะคาเฟ่ลับ</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 8-->
                </div>
                <!--สิ้นสุด รูปเเถวที่ 2-->

            </div>
        </div>
        <!-- สิ้นสุด วันเดียวเที่ยวใกล้กรุง -->

        <div class="row">
            <!-- เริ่มต้น รวมเรื่องเด่น -->
            <div class="col-md-12" style="border-style: groove;background-color: pink;">รวมเรื่องเด่น
                <div class="row">
                    <!--เริ่มรูปภาพเเถวที่1-->
                    <div class="col-md-2" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 1-->
                        <div class="card" style="width:150px">
                            <img class="card-img-top" src="img/เด่น1.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">13 ที่พักดอยผาฮี้ มองภูเขา เคล้าสายหมอก</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 1-->

                    <div class="col-md-2" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 2-->
                        <div class="card" style="width:150px">
                            <img class="card-img-top" src="img/เด่น2.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">30 วัดสวย สุด Unseen ทั่วไทย</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 2-->

                    <div class="col-md-2" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 3-->
                        <div class="card" style="width:150px">
                            <img class="card-img-top" src="img/เด่น3.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ตลาดน่าเที่ยว ผ่อนคลายใกล้กรุง </h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 3-->

                    <div class="col-md-2" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 4-->
                        <div class="card" style="width:150px">
                            <img class="card-img-top" src="img/เด่น4.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">12 จังหวัดนอกกระแสท่องเที่ยว แต่มีดี</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 4-->

                    <div class="col-md-2" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 5-->
                        <div class="card" style="width:150px">
                            <img class="card-img-top" src="img/เด่น5.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">6 ที่เที่ยวสไตล์รังนกบาหลี ในเมืองไทย</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 5-->

                    <div class="col-md-2" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 6-->
                        <div class="card" style="width:150px">
                            <img class="card-img-top" src="img/เด่น6.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">35 ที่เที่ยวเด็ด 3 จังหวัดชายแดนใต้ เที่ยวได้ ไม่น่ากลัวอย่างที่คิด</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 6-->

                </div>
                <!--สิ้นสุดรูปภาพเเถวที่1-->
            </div>
        </div>
        <!-- สิ้นสุด รวมเรื่องเด่น -->

        <div class="row">
            <!-- เริ่มต้น รวมสถานที่ท่องเที่ยวจังหวัด -->
            <div class="col-md-12" style="border-style: groove;background-color: pink;">รวมสถานที่ท่องเที่ยวจังหวัด
                <div class="row">
                    <!--เริ่มรูปภาพเเถวที่1-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 1-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/สถานที่1.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">25 จุดแวะเที่ยว กิน คาเฟ่สวยตัวเมืองตาก</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่1-->

                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 2-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/สถานที่2.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ที่เที่ยวสระแก้ว สุดแดนบูรพาตะวันออก</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 2-->

                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 3-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/สถานที่3.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">40 ที่เที่ยวกรุงเทพ ท่องกรุงให้เพลิน ไม่ต้องเดินทางไกล</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่3-->

                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 4-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/สถานที่4.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">12 ที่เที่ยว บุรีรัมย์ เมืองแห่งความรื่นรมย์</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่4-->

                </div>
                <!--สิ้นสุดรูปภาพเเถวที่1-->
            </div>

        </div>
        <!-- สิ้นสุด รวมสถานที่ท่องเที่ยวจังหวัด -->

        <div class="row">
            <!-- เริ่มต้น เเนะนำที่ท่องเที่ยว -->
            <div class="col-md-12" style="border-style: groove; background-color: pink;">เเนะนำที่ท่องเที่ยว
                <div class="row">
                    <!--เริ่มรูปภาพเเถวที่1-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 1-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/สถานที่1.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">25 จุดแวะเที่ยว กิน คาเฟ่สวยตัวเมืองตาก</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่1-->

                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 2-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/สถานที่2.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ที่เที่ยวสระแก้ว สุดแดนบูรพาตะวันออก</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่ 2-->

                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 3-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/สถานที่3.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">40 ที่เที่ยวกรุงเทพ ท่องกรุงให้เพลิน ไม่ต้องเดินทางไกล</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่3-->

                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 4-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/สถานที่4.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">12 ที่เที่ยว บุรีรัมย์ เมืองแห่งความรื่นรมย์</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่4-->

                </div>
                <!--สิ้นสุดรูปภาพเเถวที่1-->
            </div>
        </div>
        <!-- สิ้นสุด เเนะนำที่ท่องเที่ยว -->

        <div class="row">
            <!-- เริ่มต้น ประชาสัมพันธ์ เเละ โฆษณา-->
            <div class="col-md-6" style="border-style: groove;background-color: pink;">ข่าวประชาสัมพันธ์
                <br><a href="https://travel.kapook.com/view156705.html" target="_blank">ที่พักชะอำติดทะเล </a> มีให้เลือกมากมายราคาหลักร้อยถึงพัน
                <br><a href="https://travel.kapook.com/view156705.html" target="_blank">ที่พักวังน้ำเขียว </a> พักผ่อนสูดโอโซนบริสุทธิ์
                <br><a href="https://travel.kapook.com/view156705.html" target="_blank">เที่พักประจวบติดทะเล ใกล้อ่าวมะนาว </a> ราคาโดน เอาใจขาเที่ยว
                <br><a href="https://travel.kapook.com/view156705.html" target="_blank">ที่พักอยุธยา </a> สัมผัสกลิ่นอายเมืองเก่า
                <br><a href="https://travel.kapook.com/view156705.html" target="_blank">ที่พักตาก </a> แวะเที่ยว แวะพัก ก่อนขึ้นเหนือ
            </div>

            <div class="col-md-6" style="border-style: groove;">โฆษณา
                <img src="img/โฆษณา1.jpg" width="530px" height="150">
            </div>
        </div>
        <!-- สิ้นสุด ประชาสัมพันธ์ เเละ โฆษณา -->

        <div class="row">
            <!-- เริ่มต้น รีวิวร้านอาหาร -->
            <div class="col-md-12" style="border-style: groove;background-color: pink;">รีวิวร้านอาหาร
                <div class="row">
                    <!--เริ่มรูปภาพเเถวที่1-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 1-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/คาเฟ่1.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">20 คาเฟ่ชุมพร ชมเขา มองทะเล</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่1-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 2-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/คาเฟ่2.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">Mother Roaster ตลาดน้อย</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่2-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 3-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/คาเฟ่3.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">Patina Bangkok คาเฟ่ลับที่ซ่อนตัวในบ้านเก่า</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่3-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 4-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/คาเฟ่4.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 คาเฟ่บางนา สายคาเฟ่ตัวจริงต้องห้ามพลาด</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่4-->
                </div>
                <!--สิ้นสุดรูปภาพเเถวที่1-->
                <div class="row">
                    <!--เริ่มรูปภาพเเถวที่ 2-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 5-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/คาเฟ่5.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">ภูดอยคาเฟ่ ยกบรรยากาศเมืองเหนือมาไว้ชานเมืองกรุง</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่5-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 6-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/คาเฟ่6.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">Hong Sieng Kong คาเฟ่สไตล์จีนโบราณ</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่6-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 7-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/คาเฟ่7.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 คาเฟ่พุทธมณฑล แวะ แชะ ชิล ย่านชานเมืองกรุง</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่7-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--เริ่มต้น card รูปที่ 8-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/คาเฟ่8.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">Plam spring คาเฟ่สีขาวสุดมินิมอล ริมปากน้ำปราณ</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <!--สิ้นสุด Card รูปที่8-->
                </div>
                <!--สิ้นสุดรูปภาพเเถวที่ 2-->
            </div>
        </div>
        <!-- สิ้นสุด รีวิวร้านอาหาร -->

        <div class="row">
            <!-- เริ่มต้น ที่พักทั่วไทย -->
            <div class="col-md-12" style="border-style: groove;background-color: pink;">ที่พักทั่วไทย
                <div class="row">
                    <!--เริ่มรูปภาพเเถวที่1-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--pic7.1-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/ที่พัก1.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ที่พักแม่แตง ถูกใจสายรักธรรมชาติ</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--pic7.2-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/ที่พัก2.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ที่พักเมืองแม่ฮ่องสอน</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--pic7.3-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/ที่พัก3.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ที่พักพะเยา เที่ยวชมเมือง</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--pic7.4-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/ที่พัก4.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ที่พักลพบุรี</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--สิ้นสุดรูปภาพเเถวที่1-->
                <div class="row">
                    <!--เริ่มรูปภาพเเถวที่ 2-->
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--pic7.5-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/ที่พัก5.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ที่พักเกาะสมุย หาดเฉวง</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--pic7.6-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/ที่พัก6.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ที่พักหาดเจ้าสำราญ</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--pic7.7-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/ที่พัก7.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">20 ที่พักราชบุรี เด็ด โดน ทุกอำเภอ</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="border-style: dashed;">
                        <!--pic7.8-->
                        <div class="card" style="width:250px">
                            <img class="card-img-top" src="img/ที่พัก8.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h6 class="card-title">15 ที่พักนครปฐม เที่ยวใกล้ในวันหยุด</h6>
                                <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--สิ้นสุดรูปภาพเเถวที่ 2-->
            </div>
        </div>
        <!-- สิ้นสุด ที่พักทั่วไทย -->

        <div class="row">
            <!--เริ่มต้น วืดีโอ-->
            <div class="col-md-12" style="border: groove; background-color: cornsilk;">วิดีโอ</div>
        </div>
        <!--สิ้นสุด วิดีโอ-->

        <div class="row">
            <!-- เริ่มต้น footer -->
            <div class="col-md-12" style="border-style: groove;">footer</div>
        </div>
        <!-- สิ้นสุด footer -->

    </div>
    <!-- สิ้นสุด class Container -->

</body>

</html>
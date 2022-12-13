<?php include "../connect/connect_db.php"; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!--link ของbootsrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .mySlides {
            display: none;
    }
    .card-body{
      position: relative;
    }
    .btn-primarys{
      position: absolute;
      bottom: -60px;
      left:100px;
      border-radius: 25px;
      background-color:pink;
      color:white;
    }
</style>

</head> 
<body>
<?php include "bar.php"?>
<div class="row">
            <!-- เริ่มต้น Slide Image -->
            <div class="col-md-12" style="background-color:pink;">
                <div class="w3-content w3-display-container">
                    <div class="w3-display-container mySlides">
                        <img src="../admin/flower/img/slide.png" style="width:1500px; height=100px; ">
                        <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
                            อ่านต่อ...
                        </div>
                    </div>

                    <div class="w3-display-container mySlides">
                        <img src="../admin/flower/img/slide1.png" style="width:1500px; height=100px;">
                        <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
                            อ่านต่อ...
                        </div>
                    </div>

                    <div class="w3-display-container mySlides">
                        <img src="../admin/flower/img/slide2.png" style="width:1500px ; height=100px;">
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
<div class="container mt-5">
<center><h3>NEW</h3>
  <div class="row">
  <?php //จอย
                  try{
                    $sql_select_new= $conn->prepare("SELECT *  
                    FROM flower_tb
                    LEFT JOIN flower_type_tb
                    ON flower_tb.flower_type = flower_type_tb.flower_type_id 
                     order by flower_id desc  limit 4  ");
                    $sql_select_new->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select_new = $sql_select_new->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
      <div class="col-sm-3">
        <div class="card" style="width:300px ; height:420px;">
          <img class="card-img-top" src="../admin/flower/img/<?php echo $row_select_new['flower_img']; ?>" alt="Card image" width="300" height="300">
          <div class="card-body">
            <h4 class="card-title"><?php echo $row_select_new['flower_name']; ?></h4>
            <p class="card-text">ประเภทสินค้า :: <?php echo $row_select_new['flower_type_name']; ?></p>
            <a href="#" class="btn btn-primarys"><?php echo $row_select_new['flower_price']; ?>/กก.</a>
          </div>
        </div>
    </div>
    <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                
 
                ?>
  </div>
</center>
</div>

<div class="container mt-5">
<center><h3>BOUQUET</h3>
  <div class="row">
  <?php //จอย
                  try{
                    $sql_select_fresh= $conn->prepare("SELECT *  
                    FROM flower_tb
                    LEFT JOIN flower_type_tb
                    ON flower_tb.flower_type = flower_type_tb.flower_type_id 
                    Where flower_type_id='1' order by flower_id desc  limit 4  ");
                    $sql_select_fresh->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select_fresh = $sql_select_fresh->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
      <div class="col-sm-3">
        <div class="card" style="width:300px">
          <img class="card-img-top" src="../admin/flower/img/<?php echo $row_select_fresh['flower_img']; ?>" alt="Card image" width="300" height="250">
          <div class="card-body">
            <h4 class="card-title"><?php echo $row_select_fresh['flower_name']; ?></h4>
            <a href="#" class="btn btn-primary"><?php echo $row_select_fresh['flower_price']; ?>/กก.</a>
          </div>
        </div>
    </div>
    <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                
 
                ?>
  </div>
</center>
</div>

<div class="container mt-5">
<center><h3>BOX</h3>
  <div class="row">
  <?php //จอย
                 try{
                  $sql_select_fresh= $conn->prepare("SELECT *  
                  FROM flower_tb
                  LEFT JOIN flower_type_tb
                  ON flower_tb.flower_type = flower_type_tb.flower_type_id 
                  Where flower_type_id='2' order by flower_id desc  limit 4  ");
                  $sql_select_fresh->execute();//สั่งให้ sql_select ทำงาน
                  while($row_select_fresh = $sql_select_fresh->fetch(PDO::FETCH_ASSOC)){
                      //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
      <div class="col-sm-3">
        <div class="card" style="width:300px">
          <img class="card-img-top" src="../admin/flower/img/<?php echo $row_select_fresh['flower_img']; ?>" alt="Card image" width="300" height="250">
          <div class="card-body">
            <h4 class="card-title"><?php echo $row_select_fresh['flower_name']; ?></h4>
            <a href="#" class="btn btn-primary"><?php echo $row_select_fresh['flower_price']; ?>/กก.</a>
          </div>
        </div>
    </div>
    <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                
 
                ?>
  </div>
</center>
</div>

<div class="container mt-5">
<center><h3>ARTIFICIAL</h3>
  <div class="row">
  <?php //จอย
                  try{
                    $sql_select_fresh= $conn->prepare("SELECT *  
                    FROM flower_tb
                    LEFT JOIN flower_type_tb
                    ON flower_tb.flower_type = flower_type_tb.flower_type_id 
                    Where flower_type_id='3' order by flower_id desc  limit 4  ");
                    $sql_select_fresh->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select_fresh = $sql_select_fresh->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
      <div class="col-sm-3">
        <div class="card" style="width:300px">
          <img class="card-img-top" src="../admin/flower/img/<?php echo $row_select_fresh['flower_img']; ?>" alt="Card image" width="300" height="250">
          <div class="card-body">
            <h4 class="card-title"><?php echo $row_select_fresh['flower_name']; ?></h4>
            <a href="#" class="btn btn-primary"><?php echo $row_select_fresh['flower_price']; ?>/กก.</a>
          </div>
        </div>
    </div>
    <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                
 
                ?>
  </div>
</center>
</div>
<div class="container mt-5">
<center><h3>BASKET</h3>
  <div class="row">
  <?php //จอย
                  try{
                    $sql_select_fresh= $conn->prepare("SELECT *  
                    FROM flower_tb
                    LEFT JOIN flower_type_tb
                    ON flower_tb.flower_type = flower_type_tb.flower_type_id 
                    Where flower_type_id='4' order by flower_id desc  limit 4  ");
                    $sql_select_fresh->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select_fresh = $sql_select_fresh->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
      <div class="col-sm-3">
        <div class="card" style="width:300px">
          <img class="card-img-top" src="../admin/flower/img/<?php echo $row_select_fresh['flower_img']; ?>" alt="Card image" width="300" height="250">
          <div class="card-body">
            <h4 class="card-title"><?php echo $row_select_fresh['flower_name']; ?></h4>
            <a href="#" class="btn btn-primary"><?php echo $row_select_fresh['flower_price']; ?>/กก.</a>
          </div>
        </div>
    </div>
    <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
  </div>
</center>
</div>
</body>
</html>

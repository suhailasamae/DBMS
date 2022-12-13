<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .bar-menu{
      background-color: pink;
      height: 200px;
    }
    .menu{
      background-color: red;
      height: 30px;
      display: flex;
      justify-content: right;
    }
    .menu div{
      background-color: rgb(210, 188, 188);
      height: 100%;
      width: 100px;
      border: 1px solid black;
    }
    .loco-surch{
      display: flex;
      height: 170px;
      background-color: rgb(156, 69, 69);
      width: 100%;
    }
    .loco-surch .loco{
      height: 170px;
      background-color: rgb(33, 89, 115);
      width: 170px;
      border-radius: 250px;
      overflow:hidden;
    }
    .loco-surch .loco img {
      width: 100%;
      height: 100%;
      
    }
    .loco-surch .surch{
      height: 170px;
      background-color: rgb(149, 48, 174);
      width: 1100px;
      justify-content: center;
    }
    </style>
</head>
<body>
<div class="menu">
    <a href="#"><div>HOME</div></a>
    <a href="#"><div>BOUQUET</div></a>
    <a href="#"><div>BOX</div></a>
    <a href="#"><div>ARTIFICIAL</div></a>
    <a href="#"><div>BASKE</div></a>
    <a href="#"><div>VASE</div></a>
    <a href="#"><div>CONTACT US</div></a>
    
  </div>
  <div class="bar-menu">
  
    <div class="loco-surch">
      <div class="loco">
        <img src="../admin/flower/img/loco.png" >
      </div>
      <div class="surch">
      <p style="font-family:'Courier New'">ร้าน Rose Aliya พร้อมส่งดอกไม้สื่อรักแด่คนพิเศษของคุณ</p>
      </div>
    </div>
</div>
</body>
</html>
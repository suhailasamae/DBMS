<?php
include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_flower_type_name=$_REQUEST['ftype'];
 
 
 
try{
$sql_insert = "insert into flower_type_tb (flower_type_id,flower_type_name)
values ('','$get_flower_type_name')";
 
    $conn->exec($sql_insert);
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
    //echo "<script>window.location.href='product_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>

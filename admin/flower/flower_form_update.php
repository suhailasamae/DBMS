<?php include "../../connect/connect_db.php"; 
$get_update_id=$_REQUEST['update_id'];

try{
  $sql_select= $conn->prepare("SELECT *  
  FROM flower_tb
  LEFT JOIN flower_type_tb
  ON flower_tb.flower_type = flower_type_tb.flower_type_id 
  where flower_id = $get_update_id;");
  $sql_select->execute();//สั่งให้ sql_select ทำงาน
  $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);
      //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ  
 
 
    }
    catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
//$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
?>
 
 
<html>
    <head>
        <title>เเบบฟอร์มเเก้ไขข้อมูลสินค้า</title>
    </head>
    <body>
        <center>
        <form action="flower_update.php?update_id=<?php echo $get_update_id; ?> " method="post"enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลสินค้า</h1></td>
                </tr>
                <tr>
                    <td>ชื่อสินค้า</td>
                    <td><input type="text" name="fname" value="<?php echo $row_select['flower_name'];?>"></td>
                </tr>
                <tr>
                    <td>ประเภทสินค้า</td>
                    <td>
                    <select name="ftype">  
                    <option value="<?php echo $row_select['flower_type_id']; ?>"><?php echo $row_select['flower_type_name'];?></option> 
                        <?php
                            try{
                                $sql_selects= $conn->prepare("SELECT * FROM flower_type_tb"); 
                                $sql_selects->execute();//สั่งให้ sql_select ทำงาน
                                while($row_selects = $sql_selects->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_selects['flower_type_id']; ?>"><?php echo $row_selects['flower_type_name'];?></option> 
                        <?php 
                                }
                            }
                        catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                        $conn = null;//เคลีย์ค่าในการดึงข้อมูล     
                        ?>
 
                    </select>    
                    </td>
                </tr>
                
                <tr>
                    <td>ราคา</td>
                    <td><input type="text" name="fprice" value="<?php echo $row_select['flower_price'];?>"></td>
                </tr>
                <tr>
                    <td>รูปสินค้า</td>
                    <td><input type="file" name="fimg" value="<?php echo $row_select['flower_img'];?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสินค้า"></td>
                </tr>
            </table>
        </form>
    </center>
    </body> 
</html>
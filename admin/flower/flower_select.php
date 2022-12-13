<?php include "../../connect/connect_db.php"; ?> 
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <div class="container mt-3">
        <center> 
        <a href="flower_form_insert.php"> < >-เพิ่มข้อมูลสินค้า </b> </a>
        <table class="table table-striped">
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>ประเภทสินค้า</th>
                <th>ราคา</th>
                <th>รูปสินค้า</th>
                <th>เเก้ไข</th>
                <th>ลบ</th>
                
            </tr>

            <?php //จอย
                  try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM flower_tb
                    LEFT JOIN flower_type_tb
                    ON flower_tb.flower_type = flower_type_tb.flower_type_id ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>

        
            <tr>
                <td><?php echo $row_select['flower_id'];  ?></td>
                <td><?php echo $row_select['flower_name']; ?></td> 
                <td><?php echo $row_select['flower_type_name']; ?></td> 
                <td><?php echo $row_select['flower_price']; ?></td>
                <td><img src="img/<?php echo $row_select['flower_img']; ?>"  style="width:120px" ></td>  
                <td><a href="flower_form_update.php?update_id=<?php echo $row_select['flower_id'];?>" onclick="return confirm('คุณต้องการที่จะอัพเดดหรือไม่');">เเก้ไข</a></td>
                <td><a href="flower_delete.php?del_id=<?php echo $row_select['flower_id'];?>" onclick="return confirm('แน่ใจไม่ว่าต้องการจะลบ');">ลบ</a></td>             
            </tr>
                <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
            
        </table>
        </center>
    </div>
    </body>
</html>
<?php
  // สร้างการเชื่อมต่อกับฐานข้อมูล MySQL
 $servername = "localhost";   // กำหนดชื่อ Server
 $username = "root";          //ชื่อ Username
 $password = "";              //ส่วนของการกำหนด Password
 $dbname ="data";             // กำหนดชื่อฐานข้อมูลที่ต้องการใช้งาน
 $conn = mysqli_connect($servername,$username,$password,$dbname);
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>เพิ่มข้อมูลสินค้า</title>
     <!-- เรียกใช้งานไฟล์ CSS ของ bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet"> 
 </head>
 <body>
 <div class="container">
  <div class="row">
    <div class="col-md-6">
<form method="POST" action="insert_product.php" enctype="multipart/form-data" >
        <br>
        <h3>เพิ่มข้อมูลสินค้า</h3> <br><br>
รหัสสินค้า <input type="text" class="form-control"  
name="txt_id" required> 
        ชื่อสินค้า 
        <input type="text" class="form-control"  name="txt_name"  required> 
        ประเภทสินค้า 
        <select class="form-select" name="txt_typeId">
        <?php
        $sql="SELECT * FROM type order by type_name";
        $hand=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($hand)){
        ?>
<option value="<?=$row['type_id']?>">
<?=$row['type_name']?>
</option> 
        <?php
        }
        mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
        ?>
 </select> 
       ราคา <input type="number" class="form-control" name="txt_price"  required> 
        จำนวน <input type="number" class="form-control" name="txt_amount"  required> <br>
        รูปภาพ <input type="file" name="file"  required> <br><br>
<input type="submit" class="btn btn-primary" name="submit" 
value="บันทึก"  >
<input type="reset" class="btn btn-primary" name="cancel"
value="ยกเลิก" >
        </form>
       </div>
     </div>
  </div>   
 </body>
 </html>
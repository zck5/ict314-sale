<?php
include "condb.php";
?>



<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>เพิ่มข้อมูลประเภทสินค้า</title>
<!-- เรียกใช้งานไฟล์ bootstrap.min.css ของ Bootstrap -->     
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<script src="js/bootstrap.bundle.min.js"></script>
<link href="form/style.css" rel="stylesheet"> 
 </head>
 <body>
 <div class="container">
 <div class="box_from">
  
   <form method="POST" action="insert_product.php"  enctype="multipart/form-data" >
   <p>
   <h3>เพิ่มข้อมูลสินค้า</h3> <p><p>
    <label>รหัสสินค้า</label> <br>
    <input type="text" class="form-control" maxlength="6" name="proID" required> <p>
    <label>สินค้า</label> <br>
    <input type="text" class="form-control" name="proName" required> <p>
    <label>ประเภทสินค้า</label> <br>
    <select class="form-select"  name="typeID">
       
   <?php
   //คำสั่งเลือกข้อมูลจากตาราง type ขึ้นมาแสดงผล
$sql = "SELECT * FROM type";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){

   ?>

    <option value="<?=$row['type_Id']?>"><?=$row['type_Name']?></option>
 
   <?php
}
mysqli_close ($conn);

   ?>

</select>
 

    <label>ราคา</label> <br>
    <input type="text" class="form-control" name="price" required> <p>
    <label>จำนวน</label> <br>
    <input type="number" class="form-control" name="num" required> <p>
    <label>รูปภาพ</label> <br>
    <input type="file" class="form-control" name="file1" required> <p>
    



    <button type="submit" class="btn btn-outline-success" name="submit">บันทึก
    </button>
    <a class="btn btn-outline-danger " href="show_product.php" role="button">ยกเลิก</a>
 </form>










 </div>	 
 </div>	 
 </div>   	 
 </body>
 </html>
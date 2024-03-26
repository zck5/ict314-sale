<?php
include "condb.php";


//รับค่าตัวแปร id มาจากไฟล์ show_product.php ผ่าน ลิงค์ Edit
$id=$_GET['id'];
//คําสั่งดึงข้อมูลจากตาราง product มาแสดงผลโดยเช็คเงื่อนไขจากรหัสพนักงานท่ีส่งค่ามากับตัวแปร id
$sql="SELECT * FROM product WHERE pro_id='$id' "; 
$result=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($result);
$typeID=$row['type_id'];
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
<link href="from/style.css" rel="stylesheet"> 
 </head>
 <body>
 <div class="container">
 <div class="box_from">
  
   <form method="POST" action="update_product.php"  enctype="multipart/form-data" >
   <p>
   <h3>เพิ่มข้อมูลสินค้า</h3> <p><p>
    <label>รหัสสินค้า</label> <br>
    <input type="text" class="form-control" maxlength="6" name="proID" readonly value=<?=$row['pro_id']?>><br>
    <label>สินค้า</label> <br>
    <input type="text" class="form-control" name="proName" required value=<?=$row['pro_name']?>><br>
    
    <label>ประเภทสินค้า</label> <br>
    <select class="form-select"  name="typeID">
       
   <?php
   //คำสั่งเลือกข้อมูลจากตาราง type ขึ้นมาแสดงผล
$sql = "SELECT * FROM type";
$result=mysqli_query($conn,$sql);
while($row1=mysqli_fetch_array($result)){
   $typeIDs=$row1['type_id'];

   ?>

    <option value="<?=$row1['type_Id']?>"<?php if($typeID==$typeIDs) {echo "selected=selected";} ?>  >
    <?=$row1['type_Name']?></option>
 
   <?php
}


   ?>

</select>
 

    <label>ราคา</label> <br>
    <input type="text" class="form-control" name="price" value=<?=$row['price']?>> <br>
    <label>จำนวน</label> <br>
    <input type="number" class="form-control" name="num" value=<?=$row['num']?>> <br>
    <label>รูปภาพ</label> <br>
    <input type="file" class="form-control" name="file1" reqired ><br>
    <input type="hidden" name="txtimg" value=<?=$row['pro_img']?>> <br>



    <button type="submit" class="btn btn-outline-success" name="submit">บันทึก
    </button>
    <a class="btn btn-outline-danger " href="show_type.php" role="button">ยกเลิก</a>
 </form>










 </div>	 
 </div>	 
 </div>   	 
 </body>
 </html>
 <?php mysqli_close ($conn); ?>
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
  
   <form method="POST" action="update_employee.php"  enctype="multipart/form-data" >
   <p>
   <h3>เพิ่มข้อมูลพนักงาน</h3> <p><p>
    <label>รหัสพนักงาน</label> <br>
    <input type="text" class="form-control" maxlength="6" name="empID" readonly value=<?=$row['emp_id']?>><br>
    <label>ชื่อ</label> <br>
    <input type="text" class="form-control" name="empName" required value=<?=$row['emp_name']?>><br>
    <label>นามสกุล</label> <br>
    <input type="text" class="form-control" name="emplastname" required value=<?=$row['emp_lastname']?>><br>
      


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
    <a class="btn btn-outline-danger " href="show_employee.php" role="button">ยกเลิก</a>
 </form>










 </div>	 
 </div>	 
 </div>   	 
 </body>
 </html>
 <?php mysqli_close ($conn); ?>
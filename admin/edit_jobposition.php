<?php
include "condb.php";


//รับค่าตัวแปร id มาจากไฟล์ show_position.php ผ่าน ลิงค์ Edit
$id=$_GET['id'];
//คําสั่งดึงข้อมูลจากตาราง product มาแสดงผลโดยเช็คเงื่อนไขจากรหัสพนักงานท่ีส่งค่ามากับตัวแปร id
$sql="SELECT * FROM jobposition WHERE pos_id='$id' "; 
$result=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($result);
?>



<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>แก้ไขตำแหน่งงาน</title>
<!-- เรียกใช้งานไฟล์ bootstrap.min.css ของ Bootstrap -->     
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<link href="from/style.css" rel="stylesheet"> 
 </head>
 <body>
 <div class="container">
 <div class="box_from">
  
   <form method="POST" action="update_jobposition.php"  enctype="multipart/form-data" >
   <p>
   <h3>เพิ่มตำแหน่งงาน</h3> <p><p>
    <label>รหัสพนักงาน</label> <br>
    <input type="text" class="form-control" maxlength="6" name="posID" readonly value=<?=$row['pos_id']?>><br>
    <label>ชื่อพนักงาน</label> <br>
    <input type="text" class="form-control" name="posName" required value=<?=$row['pos_name']?>><br>
    
   


    <button type="submit" class="btn btn-outline-success" name="submit">บันทึก
    </button>
    <a class="btn btn-outline-danger " href="show_jobposition.php" role="button">ยกเลิก</a>
 </form>










 </div>	 
 </div>	 
 </div>   	 
 </body>
 </html>
 <?php mysqli_close ($conn); ?>
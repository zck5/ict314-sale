<?php
include "condb.php" ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" >
<link href="form/style.css" rel="stylesheet"> 

</head>
<body>
<div class="container">

<div class="box_form">
 <div class=" h4 text-center alert alert-success mb-4 mt-4 "
 role="alert"> เพิ่มข้อมูลพนักงาน </div>

 <!-- เรียกใช้งานไฟล์insert_employee.php -->
<form method="POST" action="insert_employee.php" enctype="multipart/form-data">
<label>ชื่อ:</label>
<input type="text" name="empName" class="form-control" placeholder="ชื่อ" required > <br>
<label>นามสกุล:</label>
<input type="text" name="empLastname" class="form-control" placeholder="นามสกุล" required ><br>
<label>เบอร์โทรศัพท์:</label>
<input type="text" class="form-control" maxlength="10" name="Telephone" placeholder="เบอร์โทรศัพท์"required > <br>
<label>รูปภาพ:</label>
<input type="file"  name="file1" required ><br><br>


<button type="submit" class="btn btn-outline-warning"> บันทึก</button>
<a class="btn btn-outline-danger" href="show_employee.php" role="button">ยกเลิก</a>


</form>

</div>
</body>
</html>
<?php
include "condb.php" ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add jobposition</title>
<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" >
<link href="form/style.css" rel="stylesheet"> 

</head>
<body>
<div class="container">

<div class="box_form">
 <div class=" h4 text-center alert alert-success mb-4 mt-4 "
 role="alert"> เพิ่มตำแหน่งงาน </div>

 <!-- เรียกใช้งานไฟล์insert_employee.php -->
<form method="POST" action="insert_jobposition.php" enctype="multipart/form-data">
<label>ชื่อตำแหน่งงาน:</label>
<input type="text" name="pos_name" class="form-control" placeholder="ชื่อ" required > <br>




<button type="submit" class="btn btn-outline-warning"> บันทึก</button>
<a class="btn btn-outline-danger" href="show_jobposition.php" role="button">ยกเลิก</a>


</form>

</div>
</body>
</html>
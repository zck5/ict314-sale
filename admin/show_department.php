<?php
include "condb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show type</title>
    <!-- เรียกใช้งานไฟล์ bootstrap.min.css ของ Bootstrap -->     
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'menu.php'?>
<div class="container">
<div class="alert alert-primary h4 text-center mt-4 " role="alert">
  ข้อมูลแผนก
</div>

<table class="table table-hover">
  


<tr>
    <th>รหัสประเภท</th>
    <th>ชื่อประเภทสินค้า</th>
</tr>

<?php
//คำสั่งเลือกข้อมูลจากตาราง type ขึ้นมาแสดงผล
$sql = "SELECT * FROM department";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>

<tr>
    <td><?=$row['dep_id']?></td>
    <td><?=$row['depName']?></td>
</tr>
<?php
}
mysqli_close ($conn);
?>

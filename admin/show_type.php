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
  แสดงข้อมูลประเภทสินค้า
</div>

<table class="table table-hover">
  


<tr>
    <th>รหัสประเภท</th>
    <th>ชื่อประเภทสินค้า</th>
</tr>

<?php
//คำสั่งเลือกข้อมูลจากตาราง type ขึ้นมาแสดงผล
$sql = "SELECT * FROM type";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>

<tr>
    <td><?=$row['type_id']?></td>
    <td><?=$row['type_name']?></td>
</tr>
<?php
}
mysqli_close ($conn);
?>






</table>
<a class="btn btn-outline-info mt-4" href="fr_type.php" role="button">Add</a>
</body>
</html>
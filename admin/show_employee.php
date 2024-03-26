<?php
include "condb.php" ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" >
<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php include 'menu.php'?>
<div class="container">
<div class="alert alert-primary h4 text-center mt-4 " role="alert">
   แสดงข้อมูลพนักงาน
</div>
<table class="table table-bordered border-primary">

<tr>
    <th>รหัส</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>เบอร์โทรศัทพ์</th>
    <th>รูปภาพ</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<?php
//คำสั่งเลือกข้อมูลจากตาราง employee ขึ้นมาแสดงผล
$sql = "SELECT * FROM employee";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>

<tr>
   <td><?=$row["emp_id"]?></td>
   <td><?=$row["emp_name"]?></td>
   <td><?=$row["emp_lastname"]?></td>
   <td><?=$row["emp_telephone"]?></td>
<td>
<img src="image/<?=$row['emp_img']?>" width="90px" height="100px" >
</td>
<td><a class="btn btn-outline-warning" href="edit_employee.php?id=<?=$row['pos_id']?>" role="button">Edit</a> </td>
<td><a class="btn btn-outline-danger" href="del_employee.php?id=<?=$row['pos_id']?>"   onclick="Del(this.href);return false;"  role="button">Delete</a> </td>
</tr>
<?php
}
mysqli_close($conn); //ปิดการเชื่อต่อฐานข้อมูล
?>


</table>
<a class="btn btn-primary mt-4" href="fr_employee.php" role="button">Add</a>
</tr>

</body>
</html>
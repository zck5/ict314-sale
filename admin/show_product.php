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
  แสดงข้อมูลสินค้า
</div>

<table class="table table-hover">



<tr>
    <th>รหัสสินค้า</th>
    <th>ชื่อสินค้า</th>
    <th>ประเภทสินค้า</th>
    <th>ราคา</th>
    <th>จำนวน</th>
    <th>รูปภาพ</th>
    <th>Edit</th>
    <th>Delete</th>
    
</tr>
</thead>

<?php
//คำสั่งเลือกข้อมูลจากตาราง type ขึ้นมาแสดงผล
$sql = "SELECT * FROM product p, type t WHERE p.type_id = t.type_id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>

<tr>
    <td><?=$row['pro_id']?></td>
    <td><?=$row['pro_name']?></td>
    <td><?=$row['type_Name']?></td>
    <td><?=$row['price']?></td>
    <td><?=$row['num']?></td>
    <td><img src="image/<?=$row['pro_img']?>" width="90px" height="100px"> </td>

<td><a class="btn btn-outline-warning" href="edit_product.php?id=<?=$row['pro_id']?>" role="button">Edit</a> </td>
<td><a class="btn btn-outline-danger" href="del_product.php?id=<?=$row['pro_id']?>"   onclick="Del(this.href);return false;"  role="button">Delete</a> </td>

</tr>
<?php
}
mysqli_close ($conn);
?>






</table>
<a class="btn btn-outline-info mt-4" href="fr_product.php" role="button">Add</a>
</body>
</html>

<script>  function Del(mypage){     
    var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");     
    if(agree){         
        window.location=mypage;     
        } } 
</script>
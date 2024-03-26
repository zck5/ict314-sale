<?php
include "./admin/condb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show product</title>

        <!-- เรียกใช้งานไฟล์ bootstrap.min.css ของ Bootstrap -->     
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'menu1.php'?>

<div class="container">
<div class="row">

<?php
//คำสั่งเลือกข้อมูลจากตาราง type ขึ้นมาแสดงผล
$sql = "SELECT * FROM product ORDER BY pro_id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>

    <div class="col-sm-3">
    <div class="text-center">
    <img src="admin/image/<?=$row['pro_img']?>" width="200px" height="250px"
    class="mt4 p-3 mb-4 border" > <br>

    ID:<?=$row['pro_id']?><br>
    <h5 class="text-primary"><?=$row['pro_name']?></h5>
    ราคา <b class="text-danger"> <?=$row['price']?> </b> บาท <br>
    <a class="btn btn-outline-success mt-3 mb-4" href="#" role="button">รายละเอียด</a>

    </div>

    </div> <!--End col -->
    
<?php
}
mysqli_close ($conn);
?>

</div>
    <br><br>
    </div>


</body>
</html>
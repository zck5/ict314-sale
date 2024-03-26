<?php
include "condb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show jobposition</title>
    <!-- เรียกใช้งานไฟล์ bootstrap.min.css ของ Bootstrap -->     
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
<div class="alert alert-warning h4 text-center mt-4 " role="alert">
  แสดงแผนกพนักงาน
</div>

<table class="table table-hover">
  


<tr>
    <th>รหัสพนักงาน</th>
    <th>ชื่อพนักงาน</th>
    <th>Edit</th>
    <th>Delete</th>
    
</tr>
</thead>

<?php
//คำสั่งเลือกข้อมูลจากตาราง type ขึ้นมาแสดงผล
$sql = "SELECT * FROM jobposition" ;
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>

<tr>
    <td><?=$row['pos_id']?></td>
    <td><?=$row['pos_name']?></td>
    

<td><a class="btn btn-outline-warning" href="edit_jobposition.php?id=<?=$row['pos_id']?>" role="button">Edit</a> </td>
<td><a class="btn btn-outline-danger" href="del_jobposition.php?id=<?=$row['pos_id']?>"   onclick="Del(this.href);return false;"  role="button">Delete</a> </td>

</tr>
<?php
}
mysqli_close ($conn);
?>






</table>
<a class="btn btn-outline-info mt-4" href="fr_jobposition.php" role="button">Add</a>
</body>
</html>

<script>  function Del(mypage){     
    var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");     
    if(agree){         
        window.location=mypage;     
        } } 
</script>
<?php
 session_start();
include 'condb.php';
 if(!isset($_SESSION["emp_userid"]))
 {
 $show=header("location:login.php");
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" >
<link href="form/style.css" rel="stylesheet"> 

</head>
<body>
<?php include 'menu.php'?>
<div class="container">
    <div class="box_form">
        <div class=" h4 text-center alert alert-success mb-4 mt-4 " role="alert"> Profile </div>

 <!-- เรียกใช้งานไฟล์insert_employee.php -->
<form method="POST" action="insert_employee.php" enctype="multipart/form-data">
<label>รหัสพนักงาน:</label>
<input type="text" name="emp_ID" class="form-control" placeholder="รหัสพนักงาน" required  readonly value="<?=$_SESSION["emp_userid"]?>" >
<label>ชื่อ:</label>
<input type="text" name="empName" class="form-control" placeholder="ชื่อ" required readonly value="<?=$_SESSION["emp_name"]?>" >
<label>นามสกุล:</label>
<input type="text" name="empLastname" class="form-control" placeholder="นามสกุล" required readonly value="<?=$_SESSION["emp_surName"]?>" >
<label>ตำแหน่งงาน:</label>
<select class="form-select"  name="pos_name">
       
       <?php
       //คำสั่งเลือกข้อมูลจากตาราง type ขึ้นมาแสดงผล
    $sql = "SELECT * FROM job_position";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
    
       ?>
    
        <option value="<?=$row['pos_id']?>"><?=$row['pos_name']?></option>
     
       <?php
    }
    mysqli_close ($conn);
    
       ?>
    
    </select>


<label>เบอร์โทรศัพท์:</label>
<input type="text" class="form-control" maxlength="10" name="Telephone" placeholder="เบอร์โทรศัพท์"required > <br>
<label>username</label>
<input type="text" name="username" class="form-control" required > <br>
<label>password</label>
<input type="password" name="password" class="form-control" required > <br>
<label>รูปภาพ:</label>
<input type="file"  name="file1" required ><br><br>


<button type="submit" class="btn btn-outline-warning"> บันทึก</button>
<a class="btn btn-outline-danger" href="show_employee.php" role="button">ยกเลิก</a>


</form>

</div>
</body>
</html>
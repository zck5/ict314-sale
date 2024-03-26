<?php
  //เชื่อมต่อฐานข้อมูล
include 'condb.php';
session_start();
$user=$_POST["username"];
$password=$_POST["password"];

  //เข้ารหัส Password ด้วย sha512
 //$password = hash('sha512',$password);

$sql="SELECT * FROM employee where username='$user' and password='$password' ";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row  > 0){
$_SESSION["emp_username"]=$row["username"];  
$_SESSION["emp_password"]=$row["password"];  
$_SESSION["emp_userid"]=$row['emp_id'];
$_SESSION["emp_name"]=$row['emp_name'];
$_SESSION["emp_surName"]=$row['emp_lastname'];

$show=header("location:index.php");
}else{
  $_SESSION["Error"] = "<p> Your username or password is invalid </p>";  
  $show=header("location:login.php");
}
echo $show;

?>
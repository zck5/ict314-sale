<?php
include 'condb.php';
$id=$_GET['id'];
$sql="DELETE FROM  WHERE emp_id='$id' "; 

if(mysqli_query($conn,$sql)){
echo"<script>alert('ลขข้อมูลเรียบร้อย');</script>";
echo "<script>window.location='show_employee.php';</script>"; 
}else{
echo "Error : " . $sql . "<br>" . mysqli_error($conn);
echo"<script>alert('ไม่สามารถลบข้อมูลได้'้);</script>"; }
mysqli_close($conn);
?>
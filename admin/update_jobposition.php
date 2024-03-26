<?php
include 'condb.php';

//เรียกใช้งานไฟล์ condb.php เช่ือมต่อฐานข้อมูล include 'condb.php'; //รับค่าตัวแปรมาจากไฟล์ fr_jobposition.php
$id=$_POST['posID'];
$posName=$_POST['posName'];



// คําส่ังแก้ไข้ข้อมูลลงในตาราง
$sql = "update jobposition set
pos_name='$posName'
where pos_id = '$id' ";

$result = mysqli_query($conn, $sql);

if($result) {
echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว'); </script>";
echo "<script>window.location='show_jobposition.php';</script>"; 
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);
?>
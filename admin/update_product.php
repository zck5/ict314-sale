<?php
include 'condb.php';

//เรียกใช้งานไฟล์ condb.php เช่ือมต่อฐานข้อมูล include 'condb.php'; //รับค่าตัวแปรมาจากไฟล์ fr_editEmployee.php
$id=$_POST['proID'];
$proname=$_POST['proName'];
$typeID=$_POST['typeID'];
$price=$_POST['price'];
$num=$_POST['num'];
$image=$_POST['txtimg'];

//อัพโหลดรูปภาพ ถ้ามกี ารอัปโหลดรูปใหม่จะทํางานในบล็อคคําสั่ง if แต่ถ้าไม่อัปโหลดรูปจะทํางานบล็อคคําสั่ง else คือรับค่าชื่อ ไฟล์รูปภาพเดิมผ่านตัวแปร $image ไปบันทึกในตาราง*/
if (is_uploaded_file($_FILES['file1']['tmp_name'])) { 
$new_image_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION); 
$image_upload_path = "./image/".$new_image_name;
move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path); 
} else {
$new_image_name = "$image";
}

// คําส่ังแก้ไข้ข้อมูลลงในตาราง
$sql = "update product set
pro_name='$proname',
type_id='$typeID',
price='$price' ,
num='$num ',
pro_img='$new_image_name'
where pro_id = '$id' ";

$result = mysqli_query($conn, $sql);

if($result) {
echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว'); </script>";
echo "<script>window.location='show_product.php';</script>"; 
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);
?>
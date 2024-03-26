<?php
include 'condb.php';  

$name=$_POST['empName'];
$lastname=$_POST['empLastname'];
$telephone=$_POST['Telephone'];

// เช็คถ้าข้อมูลซ้ำ ให้ทำการอัพเดตจำนวนสินค้าในตาราง employee แทนการเพิ่มสินค้าลงตาราง employee
$check = "select * from employee where emp_name = '$name' and emp_lastname = '$lastname'";
$result1 = mysqli_query($conn, $check);
$num = mysqli_num_rows($result1); 
  if($num > 0) {
    //แสดงข้อความแจ้งเตือน แล้วแสดงข้อมูลหน้าเพจ fr_employee.php
    echo "<script>";
    echo "alert('ไม่สามารถเพิ่มข้ิมูลได้!');";
    echo "window.location='fr_employee.php';";
    echo "</script>";
  } else {

    //อัพโหลดรูปภาพ
    if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
      $new_image_name = 'emp_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']),PATHINFO_EXTENSION);
      $image_upload_path = "./image/".$new_image_name;
      move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
    } else {
      $new_image_name = "";
    }

    //คำสั่งเพิ่มข้อมูลลงตาราง empoyee
    $sql = "INSERT INTO employee(emp_name, emp_lastname, emp_telephone, emp_img) 
    VALUES('$name', '$lastname', '$telephone', '$new_image_name')";

    if (mysqli_query($conn,$sql)) {
      echo "<script>";
      echo "alert('บันทึกข้อมูลเรียบร้อย');";
      echo "window.location='fr_employee.php';";
      echo "</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    }
}
mysqli_close($conn);   //ปิดการเชื่อมต่อฐานข้อมูล
?>
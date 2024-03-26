<?php
include 'condb.php';

$id_pro=$_POST['proID'];
$name=$_POST['proName'];
$typeId=$_POST['typeID'];
$price=$_POST['price'];
$amount1=$_POST['num'];

// เช็คถ้าข้อมูลซ้ำ ให้ทำการอัพเดตจำนวนสินค้าในตาราง product แทนการเพิ่มสินค้าลงตาราง product
$check = "select * from product  where pro_id = '$id_pro' ";
$result1 = mysqli_query($conn,$check);
$num=mysqli_num_rows($result1); 
  if($num > 0)   		
  {
$sqlupdate ="UPDATE product set num=num + $amount1  WHERE pro_id ='$id_pro' ";
mysqli_query($conn,$sqlupdate);

  //แสดงข้อความแจ้งเตือน แล้วแสดงข้อมูลหน้าเพจ fr_product.php
       echo "<script>";
       echo "alert('อัพเดตสต็อกเรียบร้อย!');";
       echo "window.location='fr_product.php';";
       echo "</script>";

  }else{

    //อัพโหลดรูปภาพ
    if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']),PATHINFO_EXTENSION);
    $image_upload_path = "./image/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "";
    }

    //คำสั่งเพิ่มข้อมูลลงตาราง product
    $sql = "INSERT INTO product(pro_id,pro_name,type_id,price,num,pro_img) 
    VALUES('$id_pro','$name','$typeId','$price','$amount1','$new_image_name')";

    if (mysqli_query($conn,$sql)) {
      echo "<script>";
      echo "alert('บันทึกข้อมูลเรียบร้อย');";
      echo "window.location='fr_product.php';";
      echo "</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    }
}
mysqli_close($conn);   //ปิดการเชื่อมต่อฐานข้อมูล
?>
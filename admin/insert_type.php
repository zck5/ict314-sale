<?php
include 'condb.php';

     //รับค่าตัวแปรมาจากไฟล์ fr_type.php
    $typeName = $_POST['type_name'];  
              
    //คำสั่งเพิ่มข้อมูลลงในตาราง type
    $sql = "insert into type(type_name) values('$typeName')" ;
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
        echo "<script>window.location='fr_type.php';</script>";
        
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    }
    mysqli_close($conn);   //ปิดการเชื่อมต่อฐานข้อมูล
?>
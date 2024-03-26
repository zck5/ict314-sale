<?php
include 'condb.php';

     //รับค่าตัวแปรมาจากไฟล์ fr_department.php
    $pos_name = $_POST['pos_name'];  
              
    //คำสั่งเพิ่มข้อมูลลงในตาราง type
    $sql = "insert into jobposition (pos_name) values('$pos_name')" ;
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
        echo "<script>window.location='show_jobposition.php';</script>";
        
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    }
    mysqli_close($conn);   //ปิดการเชื่อมต่อฐานข้อมูล
?>
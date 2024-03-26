<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>เพิ่มข้อมูลประเภทสินค้า</title>
<!-- เรียกใช้งานไฟล์ bootstrap.min.css ของ Bootstrap -->     
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<link href="from/style.css" rel="stylesheet"> 
 </head>
 <body>
 <div class="container">
 <div class="box_from">
  
   <form method="POST" action="insert_type.php" >
   <p>
   <h3>เพิ่มข้อมูลประเภทสินค้า</h3> <p><p>
ประเภทสินค้า<input type="text" class="form-control" name="type_name" required> <p>
 <button type="submit" class="btn btn-outline-success" name="submit">บันทึก
 </button>
 <a class="btn btn-outline-danger " href="show_type.php" role="button">ยกเลิก</a>
 </form>
 </div>	 
 </div>	 
 </div>   	 
 </body>
 </html>
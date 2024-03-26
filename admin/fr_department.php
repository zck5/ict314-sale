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

   <form method="POST" action="insert_department.php" >
   <h2>เพิ่มข้อมูลแผนก</h2><br>
   <label>แผนก</label>
   <input type="text" class="form-control" name="dep_name" required> <p>
    <button type="submit" class="btn btn-outline-success" name="submit">บันทึก
 </button>
 <a class="btn btn-outline-danger " href="show_department.php" role="button">ยกเลิก</a>
 </form>

 </div>	 
 </div>	 
 </div>   	 
 </body>
 </html>
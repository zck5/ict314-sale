<?php
 session_start();
include 'condb.php';
 if(!isset($_SESSION["emp_userid"]))
 {
 $show=header("location:login.php");
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include 'menu.php'?>


  
</body>
</html>
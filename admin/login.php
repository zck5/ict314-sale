<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="form/style.css" rel="stylesheet"> 
</head>
<body>
<div class="container">
  <br><br>
        
    <div class="box_login">

    
      <form method="POST" action="login_check.php" >
            <p>
            <h3 class="text-center" >Login</h3> <p><p>
                   
            <input type="text" class="form-control" maxlength="10" name="username" placeholder="username" required> <p>
            <input type="password" class="form-control" maxlength="10" name="password" placeholder="password" required> <p>    

           <button type="submit"  class="btn btn-primary form-control" name="submit">Login</button> 
           <?php
                 if(!isset($_SESSION["Error"]))
                 {
                  session_destroy();
                 }else{
                  echo " <div class='text-danger'> ";
                    echo $_SESSION["Error"];
                  echo "</div> ";

                 }
                 $_SESSION['Error'] ="";
             ?>

        </form>
        
       </div>
    
     </div>
  </div>   
</body>
</html>
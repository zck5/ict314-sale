<header class="p-3 text-dark" style="background-color: lightblue ;">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Customer</a></li>
                <li><a href="fr_profile.php" class="nav-link px-2 text-white">Profile</a></li>
                


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Product</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="show_product.php">Product</a></li>
                        <li><a class="dropdown-item" href="show_type.php">Type</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Employee</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="show_employee.php">Employee</a></li>
                        <li><a class="dropdown-item" href="show_department.php">Department</a></li>
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Report</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </li>

            </ul>
            </li>

            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <?php
            if(isset($_SESSION["emp_name"]))
                 {
                echo " <div class='text-primary'> ";
                echo $_SESSION ["emp_name"] ."   ". $_SESSION ["emp_surName"];
                echo "</div> ";
                 }
            ?>
            </form>

            <div class="text-end">
                <button type="button" class="btn btn-outline-success">Login</button>
                <a href="logout.php"><button type="button" class="btn btn-outline-danger">Logout</button> </a>
            </div>
        </div>
    </div>
</header>
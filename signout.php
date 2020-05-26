<?php

    $conn = mysqli_connect('localhost','elite','','cs344_project');

    
   // if(isset($_POST['code'])){
     //   $code =$_POST['code'];

       // include 'reset.php';
        //echo $var;
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elite - A Good Social Site</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <!-- Our stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <nav id="navbar">
        <a href="#" class="nav-logo">
            <img src="img/logo.svg" alt="">
        </a>
    </nav>


    <div id="main-content">

        <section class="section-form">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3">

                        <ul class="form-nav">
                            <li>
                                <a class="active" href="#">Sign out</a>
                            </li>


                        </ul>
                        <?php
                            session_start();
                            $conn = mysqli_connect('localhost','elite','','cs344_project');
                            $mail = $_SESSION['mail'];
                            
                            $s='offline';
                            $query4 = "UPDATE login SET stat = '$s' where e_mail = '$mail'";
                            mysqli_query($conn,$query4);
                            

                        ?>
                        <div class="form-outer">

                            <form action="">
                            <div id="erroralert" class="error-alert">
                                    <nbsp>You have signed out successfully!
                            </div>
                                <div class="input-group mb-0">
                                    <a  href="signin.php" class="w-100 btn">
                                        Sign in to another account
                                    </a>
                                </div>
                                <br>
                                <div class="input-group mb-0">
                                   <a  href="signup.php" class="w-100 btn"> 
                                        Create a new Account
                                    </a>
                                </div>


                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>



    
</body>
</html>
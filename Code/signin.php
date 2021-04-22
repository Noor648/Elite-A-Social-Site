
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

    <script type="text/javascript">
        function changeImg(imgNumber) {
            var myImages = ["img/Background-Image1.jpg", "img/bgimg-2.jpg", "img/bgimg-3.jpeg", "img/bgimg-4.jpg", "img/bgimg-5.jpg","img/bgimg-6.jpg","img/bgimg-7.jpg","img/bgimg-8.jpg","img/bgimg-9.jpg"];
            var imgShown = document.body.style.backgroundImage;
            var newImgNumber = Math.floor(Math.random() * myImages.length);
            document.body.style.backgroundImage = 'url(' + myImages[newImgNumber] + ')';
        }
        window.onload = changeImg;

    </script>
</head>

<body class="bg">

    <div id="background">
        <div id="main-content">

            <section class="section-form">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 offset-lg-2 col-md-3 offset-md-2 col-sm-8 offset-sm-2 ">
                            <div class="titlediv">
                                <div class="title">
                                    elite
                                </div>
                                <div class="descrip1">
                                    A Social Site.
                                    <br>
                                    By Nustians,
                                    <br>
                                    Not for Nustians.
                                </div>
                                <div class="descrip2">
                                    ..….some text here. lorem ipsum dolor sit amet is a dummy text. This is a dummy
                                    site.
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-4 offset-lg-1 col-md-5 offset-md-1 col-sm-8 offset-sm-2 ">
                            <div class="form-outer">
                                
                                <form method="POST" action="#">
                                    <ul class="form-nav">
                                        <li>
                                            <a class="active" href="signin.php">Sign In</a>
                                        </li>

                                        <li>
                                            <a href="signup.php">Sign Up</a>
                                        </li>

                                    </ul>
                                    <?php
                                    $conn = mysqli_connect('localhost','elite','','cs344_project');
                                            
                                    session_start();
                                        if(isset($_POST['email'])){
                                            $mail = $_POST['email'];
                                            $pass= $_POST['password'];

                                            $_SESSION['email'] = $mail;

                                            $sql="SELECT * from login where e_mail='".$mail."' and password='".$pass."' limit 1";
                                            $s = 'online';
                                            $result = mysqli_query($conn,$sql) or die( mysqli_error($conn));

                                            if(mysqli_num_rows($result)==1)
                                            {
                                                $query4 = "UPDATE login SET stat = '$s' where e_mail = '$mail'";
                                                mysqli_query($conn,$query4);

                                                $url = "home.php";                            
                                                header("Location: ". $url);
                                                exit();
                      
                                            }
                                            else{
                                                //Reload the page
                                   
                                    ?>
                                    
                                    <div id="erroralert" class="error-alert">
                                    <?php echo "Incorrect username or password, please try again." ?>
                                    </div>
                                   
                                    <?php       
                                            }

       
                                        }
       
                                    ?>

                                    

                                    <div class="input-group">
                                        <input type="text" class="txt" name="email" id="email" placeholder="Email">
                                    </div>

                                    <div class="input-group">
                                        <input type="password" class="txt" name="password" id="password"
                                            placeholder="Password">
                                        <a href="reset.php" class="forgot">forgot password?</a>
                                    </div>

                                    <div class="input-group mb-0">
                                        <button class="btn w-100">
                                            Sign in
                                        </button>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>

    </div>

</body>

</html>
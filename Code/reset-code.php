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
                                <ul class="form-nav">
                                    <li>
                                        <a class="active" href="#">Reset Password</a>
                                    </li>
        
                                </ul>
                               

                                <form method="POST" action="">
    
                                    <div class="info-alert">
                                        Press submit button if the code appears on the screen.
                                    </div>
    
                                    <div class="input-group">


                                    <!-- php code -->
                                    <?php
                                        $conn = mysqli_connect('localhost','elite','','cs344_project');
                                        $mail_c = $_GET["mail"];
                                        
                                        
                                        
                                        $getcode = "SELECT code from login where e_mail = '".$mail_c."' ";
                                        $result = mysqli_query($conn,$getcode) or die( mysqli_error($conn));
                                       

                                        while($row=mysqli_fetch_array($result)){
                                           

                                    ?>

                                    <input type="text" class="txt" name="code" id="code" placeholder="Enter Code" value= "<?php echo $row['code']; ?>">
                                    
                                    <?php
                                        if(isset($_POST['code'])){
                                            $url = "reset-new.php?mail=". $mail_c;                            
                                            header("Location: ". $url);
                                        }
                                        
                                        }
                                    ?>
                                    <!-- End of php code -->


                                    <a href="reset.php" class="forgot">Didn't receive code? Resend Email</a>
                                    </div>
                                    

    
                                    <div class="input-group mb-0">
                                        <button class="btn w-100">
                                            Submit
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

    <script type="text/javascript">
        function changeImg(imgNumber)	{
            var myImages = ["img/Background-Image1.jpg", "img/bgimg-2.jpg", "img/bgimg-3.jpeg", "img/bgimg-4.jpg", "img/bgimg-5.jpg","img/bgimg-6.jpg","img/bgimg-7.jpg","img/bgimg-8.jpg","img/bgimg-9.jpg"];
            var imgShown = document.body.style.backgroundImage;
			var newImgNumber =Math.floor(Math.random()*myImages.length);
			document.body.style.backgroundImage = 'url('+myImages[newImgNumber]+')';
		}
		window.onload=changeImg;
    </script>
</body>

</html>
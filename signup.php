

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
                            <?php
        $conn = mysqli_connect('localhost','elite','','cs344_project');
        session_start();

        if(isset($_POST['name'])){
            $name =$_POST['name'];
            $mail =$_POST['email'];
            $pass= $_POST['password'];

            $_SESSION['email'] = $mail;

            $unique = "SELECT * from login where e_mail='".$mail."' ";
            $check= mysqli_query($conn, $unique) or die( mysqli_error($conn));
            if(mysqli_num_rows($check)==0)
            {   

                $query = "INSERT INTO  login (userName, e_mail, password, code) value ('$name', '$mail', '$pass', '$name.code#2648')";
                
                
                if(mysqli_query($conn, $query)){
                    $query1 = "SELECT * FROM login WHERE e_mail = '$mail' ";
                    $result1 = mysqli_query($conn,$query1) or die( mysqli_error($conn)); 
                    $row1=mysqli_fetch_array($result1);
                    $value=$row1['user_id'];

                    $query2 = "INSERT INTO  profile (user_id, cover_url, profile_url) value ('$value', 'img/default.jpg', 'img/default2.jpg')";
                    mysqli_query($conn,$query2);

                    $query3 = "INSERT INTO  user_post (user_id, status, post) value ('$value', 'WECLOME TO ELITE-A GOOD SOCIAL SITE', 'posts/welcome.jpg')";
                    mysqli_query($conn,$query3);

                    $query4 = "INSERT INTO  user_post (user_id, status, empty) value ('$value', 'elite is happy to see you here:) ', 'yes')";
                    mysqli_query($conn,$query4);

                    $s = 'online';
                    $query4 = "UPDATE login SET stat = '$s' where e_mail = '$mail'";
                    mysqli_query($conn,$query4);

                    $quer = "INSERT INTO about (user_id) value ('$value')";
                    mysqli_query($conn,$quer);

                    $url= "home.php?mail=". $mail;
        
                    header("location:". $url);
                    exit();
                    
                }
            }

            else{

                header("location: signup.php");
                /*function function_alert($msg) {
                    echo "<script type='text/javascript'>alert('$msg');
                    </script>";}

                    function_alert("E-mail already used. Enter another!");
*/
           
                

                }}

?>
                                <form method="POST" action="">
                                    <ul class="form-nav">
                                        <li>
                                            <a href="signin.php">Sign In</a>
                                        </li>

                                        <li>
                                            <a class="active" href="signup.php">Sign Up</a>
                                        </li>

                                    </ul>


                                    <div class="input-group">
                                        <input type="text" class="txt" name="name" id="name" placeholder="Your Name">
                                    </div>

                                    <div class="input-group">
                                        <input type="text" class="txt" name="email" id="email" placeholder="Email">
                                    </div>

                                    <div class="input-group">
                                        <input type="password" class="txt" name="password" id="password"
                                            placeholder="Password">
                                    </div>



                                    <div class="input-group mb-0">
                                        <button class="btn w-100">
                                            Sign up
                                        </button>
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
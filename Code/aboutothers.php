<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elite - A Good Social Site</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Our stylesheet -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>

<body>
    <nav id="navbar">
        <a href="#" class="nav-logo">
            <img src="img/logo.svg" alt="">
        </a>
        <a href="#"  class="f-right clearl">
            <img src="assets/icons-settings.svg" alt="" id="menu-pop" class="settings" onclick="appear();">
        </a>
    </nav>
    <div id="profile-content">
        <section class="section-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                        <div class="form-profile">
                        <?php
                            session_start();
                            $conn = mysqli_connect('localhost','elite','','cs344_project');
                            $mail_a = $_SESSION['mail'];
                            $_SESSION["mail"]= $mail_a ;

                            $mail_p =$_GET['mail'];
                            $patha= "profile.php";

                            $sql1 = "SELECT userName,e_mail FROM login where e_mail='".$mail_p."' ";
                            $result1 = mysqli_query($conn,$sql1) or die( mysqli_error($conn));
                            $row1 = mysqli_fetch_array($result1);

                            $sql2 = "SELECT * FROM profile JOIN login using (user_id) where  e_mail='".$mail_p."' ";
                            $result2 = mysqli_query($conn,$sql2) or die( mysqli_error($conn));
                            $row2 = mysqli_fetch_array($result2);
                            
                            $sql3 = "SELECT * FROM about JOIN login using (user_id) where  e_mail='".$mail_p."' ";
                            $result3 = mysqli_query($conn,$sql3) or die( mysqli_error($conn));
                            $row3 = mysqli_fetch_array($result3);
                            
                            $image1 = $row2['cover_url'];
                            if (empty($image1)) $image1 = "default.jpg";
                            $image2 = $row2['profile_url'];
                            if (empty($image2)) $image2 = "default2.jpg";

                            $url1= "aboutothers.php?mail=" . $mail_p;
                            $url2= "friendsothers.php?mail=" . $mail_p;
                            $url3= "galleryothers.php?mail=" . $mail_p;

                            ?> 
                                <div class="cover">
                                   
                                <img src= <?php echo $image1 ?> class="ProfilePic1">
                                   
                                </div>

                                <div class="profile2-div ">
                                    <div class="profile2-div2">

                                        <a href="#">
                                        <img src= <?php echo $image2 ?> alt="Avatar" class="ProfilePic2">
                                        </a>
                                    </div>
                                </div>

                                <div class="user clearl">
                                    <a href="profile.html">
                                    <b><?php echo $row1['userName'] ?></b> 
                                    </a>
                                </div>

                                <div class="username  clearl" id="use">
                                    <a href="profile.html">
                                    <?php echo $row1['e_mail'] ?>
                                    </a>
                                </div>

                                <div class="Profilelist-div">
                                    <br>
                                    <ul class="Profilelist">
                                        <li class="left">
                                        <a href="<?php echo $url1 ?>">About</a>
                                        </li>
                                        <li class="left">
                                        <a href="<?php echo $url2 ?>">Friends</a>
                                        </li>
                                        <li class="left">
                                        <a href="<?php echo $url3 ?>">Gallery</a>
                                        </li>
                                       
                                    </ul>
                                   
                                </div>
                               
                        </div>
                       
                    </div>
                   
                    <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                       
                        <p class="tags" >
                            About
                        </p>
   
                        <div class="form-postn marginup">
                            
                            <div class="aboutEngine">
                                <ul>
                                    <P class="aboutTitle">
                                        <b>
                                            Personal Information
                                        </b>
                                    </p>    
                                    <li class="clear">
                                        <div class="Qtype ">
                                            <p>
                                                Name:
                                            </p>    
                                        </div>
                                    
                                        <div class="Atype ">
                                            <p>
                                            <?php echo $row1['userName'] ?>
                                            </p>
                                        </div> 
                            
                                    </li>
                                    
                                        <li class="clear">
                                            <div class="Qtype ">
                                                <p>
                                                    Age:
                                                </p>    
                                            </div>
                                        
                                            <div class="Atype ">
                                                <a>
                                                <?php echo $row3['age'] ?>
                                                </a>
                                            </div>  
                       
                                        </li>

                                        <li class="clear">
                                            <div class="Qtype ">
                                                <p>
                                                    Gender
                                                </p>    
                                            </div>
                                        
                                            <div class="Atype ">
                                                <a>
                                                <?php echo $row3['gender'] ?>
                                                </a>
                                            </div> 
                                        
                                        </li>

                                        <li class="clear">
                                            <div class="Qtype ">
                                                <p>
                                                    Works as:
                                                </p>    
                                            </div>
                                        
                                            <div class="Atype ">
                                                <a>
                                                <?php echo $row3['work_as'] ?>
                                                </a>
                                            </div>   
                       
                                        </li>

                                        <li class="clear">
                                            <div class="Qtype ">
                                                <p>
                                                   Works At:
                                                </p>    
                                            </div>
                                        
                                            <div class="Atype ">
                                                <a>
                                                <?php echo $row3['works_at'] ?>
                                                </a>
                                            </div>   
                       
                                        </li>

                                        <li class="clear">
                                            <div class="Qtype ">
                                                <p>
                                                    Date of Birth:
                                                </p>    
                                            </div>
                                        
                                            <div class="Atype ">
                                                <a>
                                                <?php echo $row3['dob'] ?>
                                                </a>
                                            </div>   
                                        
                                        </li>
                                        
                                        <li class="clear">
                                            <div class="Qtype ">
                                                <p>
                                                    Status:
                                                </p>    
                                            </div>
                                        
                                            <div class="Atype ">
                                                <a>
                                                <?php echo $row3['status'] ?>
                                                </a>
                                            </div>   
                       
                                        </li>
                                       
                                </ul>
                                <br> 
                        </div>
                    </div>
                
                </div>

                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1">

                    <div class="form-postn marginup">
                        
                        <div class="aboutEngine">
                            <ul>
                                <P class="aboutTitle">
                                    <b>
                                        Contact Information
                                    </b>
                                </p>    
                                <li class="clear">
                                    <div class="Qtype ">
                                        <p>
                                            Number:
                                        </p>    
                                    </div>
                                
                                    <div class="Atype ">
                                        <p>
                                        <?php echo $row3['number'] ?>
                                        </p>
                                    </div> 
                        
                                </li>
                                
                                    <li class="clear">
                                        <div class="Qtype ">
                                            <p>
                                                Email:
                                            </p>    
                                        </div>
                                    
                                        <div class="Atype ">
                                            <a>
                                            <?php echo $row1['e_mail'] ?>
                                            </a>
                                        </div>  
                   
                                    </li>

                                    
                                   
                            </ul>
                            <br> 
                        </div>
                 </div>
            
                </div>

                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1">

                    <div class="form-postn marginup">
                        
                        <div class="aboutEngine">
                            <ul>
                                <P class="aboutTitle">
                                    <b>
                                        Residance Information
                                    </b>
                                </p>    
                                <li class="clear">
                                    <div class="Qtype ">
                                        <p>
                                            Country:
                                        </p>    
                                    </div>
                                
                                    <div class="Atype ">
                                        <p>
                                        <?php echo $row3['country'] ?>
                                        </p>
                                    </div> 
                        
                                </li>
                                
                                    <li class="clear">
                                        <div class="Qtype ">
                                            <p>
                                                City:
                                            </p>    
                                        </div>
                                    
                                        <div class="Atype ">
                                            <a>
                                            <?php echo $row3['city'] ?>
                                            </a>
                                        </div>  
                   
                                    </li>

                                    <li class="clear">
                                        <div class="Qtype ">
                                            <p>
                                                Address:
                                            </p>    
                                        </div>
                                    
                                        <div class="Atype ">
                                            <a>
                                            <?php echo $row3['address'] ?>
                                            </a>
                                        </div> 
                                    
                                    </li>
                                   
                            </ul>
                            <br> 
                    </div>
                </div>
            
            </div>


            </div>
        </section>
        <div onclick="close1();" class="bg-modal1" id="myDiv">
            <div class="menu">
                <ul>
                    <li class="clear"><a href="profile.php">Profile</a></li>
                    <li class="clear"><a href='home.php'>Home</a></li>
                    <li class="clear"><a href="Notifications.php">Notifications</a></li>
                    <li class="clear"><a href="signout.php">Signout</a></li>
                    <li onclick="close1();"  ><a href="" id="close">Cancel</a></li>      
                </ul>
            </div> 
        </div>
    </div>


   
<script type="text/javascript">
    
    function appear(){

        document.getElementById("myDiv").classList.toggle("bg-modal2");
       
    }

    function close1(){
        document.getElementById("myDiv").classList.toggle("bg-modal2");;
    }
</script>
</body>

</html>    
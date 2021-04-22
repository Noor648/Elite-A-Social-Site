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

                            $mail_p = $_GET["mail"];
                            $sql1 = "SELECT userName,e_mail FROM login where e_mail='".$mail_p."' ";
                            $result1 = mysqli_query($conn,$sql1) or die( mysqli_error($conn));
                            $row1 = mysqli_fetch_array($result1);

                            $sql2 = "SELECT * FROM profile JOIN login using (user_id) where  e_mail='".$mail_p."' ";
                            $result2 = mysqli_query($conn,$sql2) or die( mysqli_error($conn));
                            $row2 = mysqli_fetch_array($result2);

                            $image1 = $row2['cover_url'];
                            if (empty($image1)) $image1 = "default.jpg";
                            $image2 = $row2['profile_url'];
                            if (empty($image2)) $image2 = "default2.jpg";

                            $url1= "aboutothers.php?mail=" .$mail_p;
                            $url2= "friendsothers.php?mail=" .$mail_p;
                            $url3= "galleryothers.php?mail=" .$mail_p;

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
                                    <a href="#">
                                       <b><?php echo $row1['userName'] ?></b> 
                                    </a>
                                </div>

                                <div class="username  clearl" id="use">
                                    <a href="">
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
                                <?php
                                        $conn = mysqli_connect('localhost','elite','','cs344_project');
                                        $mail = $_GET["mail"];
                                        $mymail = $_SESSION["mail"];
                                        

                                        //fetching user names from login table
                                        $name = "SELECT * from login where e_mail='".$mail."' ";
                                        $result1 = mysqli_query($conn,$name) or die( mysqli_error($conn)); 
                                        $row1=mysqli_fetch_array($result1);
                                        $required_id = $row1['user_id'];
                                        //fetching data from profile table
                                        $path = "SELECT profile_url from profile JOIN login using(user_id) where user_id='".$required_id."'";
                                        $result3 = mysqli_query($conn,$path) or die( mysqli_error($conn)); 
                                        $row3=mysqli_fetch_array($result3);      
                                ?>
                        </div>
                    </div>
                                
                    <div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1">
                                    <?php
                                        
                                        //Fetching all data from user_post table
                                        $sql = "SELECT * from user_post JOIN login using(user_id) where user_id='".$required_id."' and post != 'NULL'  order by post_id DESC ";
                                        $result2 = mysqli_query($conn,$sql) or die( mysqli_error($conn)); 
                                       
                                        while($row2=mysqli_fetch_array($result2)){
                                            $pass = $row2['post_id'];
                                            $likes = $row2['likes'];
                                        
                                    ?>
                        <div class="form-postn">

                                <div class= "account">
                                        
                                    <div class="profile">
                                        <a href="">
                                            <img src=<?php echo $row3['profile_url'] ?> alt="Avatar" class="avatarprofile">
                                        </a>
                                    </div>
                                   
                                    <div class="avatarname">
                                        <?php echo $row1['userName'] ?>
                                    </div>    
                               
                                    <br>

                                    <div class="timings">
                                        <?php echo $row2['date'] ?>
                                    </div> 
                                
                                    <div class="status">
                                        <?php echo $row2['status'] ?>
                                    </div>
                                </div>

                               
                                <div class="post" >
                                    <img src=<?php echo $row2['post'] ?> alt="" class="post" >
                                </div>
                                
                                <div class= "account">   
                                    <div id="connect">
                                        <div>
                                            <a href='' class="like">
                                                <img src="assets/like.svg" alt=""><?php echo " $likes" ?>
                                            </a>
                                        </div>

                                        <div >
                                            <a href='phplinks/sharepost.php?mail=<?php echo($mail) ?>&postid=<?php echo $pass ?>&mail=<?php echo($mymail) ?>' class="send">
                                                <img src="assets/send-outline.svg" alt="">
                                            </a>
                                        </div>
                                    
                                    </div>

                                    
                                
                                </div>  

                        </div>
                        <br>
                            <!--End of php tag-->
                                <?php
                                    }
                                ?>

                        <br>
                    </div>

                    <div class="col-lg-5 offset-lg-0 col-md-5 offset-md-0">
                    
                   
                     <!--php part 3-->
                     <?php
                        
                    $sql2 = "SELECT * from user_post JOIN login using(user_id) where user_id='".$required_id."' and empty != 'NULL' order by post_id DESC";
                    $result4 = mysqli_query($conn,$sql2) or die( mysqli_error($conn)); 
                   
                    while($row=mysqli_fetch_array($result4))
                    {
                        $pass = $row['post_id'];
                        $likes = $row['likes'];
                        
                    ?>
                     <div class="form-postn">

                                <div class= "account">    
                                    <div class="profile">
                                        <a href="">
                                            <img src=<?php echo $row3['profile_url'] ?> alt="Avatar" class="avatarprofile">
                                        </a>
                                    </div>
                               
                                    <div class="avatarname">
                                        <?php echo $row1['userName'] ?>
                                    </div>    
                               
                                    <br>

                                    <div class="timings">
                                    <?php echo $row['date'] ?>
                                    </div>  

                                    <div class="status">
                                        <?php echo $row['status'] ?>
                                    </div>

                               
                                    <div id="connect">
                                        <div>
                                            
                                            <a href=''   class="like"  >
                                                <img src="assets/like.svg" alt=""><?php echo " $likes" ?>
                                            </a>
                                        </div>

                                        <div >
                                            <a href='share-linkingfile.php?mail=<?php echo($mail) ?>' class="send">
                                                <img src="assets/send-outline.svg" alt="">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                          

                        </div>

                       
                     <br>

                     <!--php part3 ended-->
                     <?php
                           
                        
                        }
                        ?>
                  
                    
                   
                    

         </div>

                    </div>
                </div>
                
            </div>
            <div onclick="close1();" class="bg-modal1" id="myDiv">
                <div class="menu">
                    <ul>
                        <li class="clear"><a href='profile.php'>Profile</a></li>
                        <li class="clear"><a href='home.php'>Home</a></li>
                        <li class="clear"><a href="notifications.php">Notifications</a></li>
                        <li class="clear"><a href="signout.php">Signout</a></li>
                        <li onclick="close1();" class="clear" ><a href="" id="close">Cancel</a></li>      
                    </ul>
                </div> 
            </div>
        </section>
       
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
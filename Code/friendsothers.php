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

                            $mail_p = $_SESSION["mail"];
                            

                            $mymail = $_GET['mail']; 
                            $_SESSION["mail"] = $mail_p;
                              

                            $sql1 = "SELECT userName,e_mail FROM login where e_mail='".$mymail."' ";
                            $result1 = mysqli_query($conn,$sql1) or die( mysqli_error($conn));
                            $row1 = mysqli_fetch_array($result1);

                            $sql2 = "SELECT * FROM profile JOIN login using (user_id) where  e_mail='".$mymail."' ";
                            $result2 = mysqli_query($conn,$sql2) or die( mysqli_error($conn));
                            $row2 = mysqli_fetch_array($result2);

                            $image1 = $row2['cover_url'];
                            if (empty($image1)) $image1 = "default.jpg";
                            $image2 = $row2['profile_url'];
                            if (empty($image2)) $image2 = "default2.jpg";

                            $url1= "aboutothers.php?mail=" . $mymail;
                            $url2= "friendsothers.php?mail=" . $mymail;
                            $url3= "galleryothers.php?mail=" . $mymail;

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
                            
                        </div>
                    </div>
                   
                    <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1">

                        <p class="tags" >Friends</p>
                         

                            <div class="form-postn marginup">
                                <div class="engine">
                                    <ul class="row12">
                                    <?php
                                        $conn = mysqli_connect('localhost','elite','','cs344_project');

                                        // fetching user_id
                                        $query1 = "SELECT * FROM login WHERE e_mail = '$mymail' ";
                                        $result1 = mysqli_query($conn,$query1) or die( mysqli_error($conn)); 
                                        $row1= mysqli_fetch_array($result1);
                                        $value= $row1['user_id'];

                                        //fetching Friends
                                        $query2 = "SELECT * FROM friends WHERE user_id = '$value'";
                                        $result2 = mysqli_query($conn,$query2) or die( mysqli_error($conn)); 
                                        

                                        while($row2=mysqli_fetch_array($result2)){
                                        

                                        //Showing Different Friends
                                        $id=$row2['friends'];

                                        $query3 = "SELECT * FROM login  where user_id = '$id'"; 
                                        $result3 = mysqli_query($conn,$query3) or die( mysqli_error($conn)); 
                                        $row3=mysqli_fetch_array($result3);
                                        $req = $row3['user_id'];
                                        $fmail  = $row3['e_mail'];
                                        
                                         
                                        // Fetching my id
                                        $me = "SELECT user_id from login where e_mail= '$mymail'";
                                        $mego = mysqli_query($conn,$me) or die( mysqli_error($conn)); 
                                        $medo=mysqli_fetch_array($mego);
                                        $i = $medo['user_id'];

                                        $me1 = "SELECT * from profile where user_id= '$req'";
                                        $mego1 = mysqli_query($conn,$me1) or die( mysqli_error($conn)); 
                                        $medo1=mysqli_fetch_array($mego1);

                                         // Fetching friendsis 
                                        $unfriend = "SELECT user_id from login where e_mail= '$fmail'";
                                        $unfriendgo = mysqli_query($conn,$unfriend) or die( mysqli_error($conn)); 
                                        $unfrienddo=mysqli_fetch_array($unfriendgo);
                                        $you = $unfrienddo['user_id'];
                                        ?>
                                        <li class="clear">
                                                <div class="profile ">
                                                    <a href='profileothers.php?mail=<?php echo($fmail) ?>'>
                                                        <img src="<?php echo $medo1['profile_url']; ?>" alt="Avatar" class="avatarprofile">
                                                    </a>
                                                </div>
                                                
                                                <div class="avatarname ">
                                                    <a>
                                                        <?php echo $row3['userName']; ?>
                                                    </a>
                                                </div>  
                               
                                                <br>
    
                                                <div class="searchstatus f-left">
                                                    <a>
                                                    <?php echo $row3['e_mail']; ?>
                                                    </a>
                                                </div> 
                                    
                                               
                                                <div class="f-right">
                                                <button class="follow-btn">
                                                    Friend
                                                </button>
                                            </div> 
                                                
                                            </li>

                                            <!--ennd of while loop-->
                                            <?php 
                                                }
                                            ?>

                                        
                                    </ul>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <div onclick="close1();" class="bg-modal1" id="myDiv">
                    <div class="menu">
                        <ul>
                        <li class="clear"><a href='profile.php'>Profile</a></li>
                        <li class="clear"><a href='home.php'>Home</a></li>
                        <li class="clear"><a href='notifications.php'>Notifications</a></li>
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
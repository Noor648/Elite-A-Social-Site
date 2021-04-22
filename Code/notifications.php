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
<style>


</style>    
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
   
    <div id="post-content">

        <section class="section-form">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3">

                        <p class="notification" >Notifications<p>

                        <div class="form-postn marginup">
                            <div class="engine">
                                <ul>
                                <?php
                                    session_start();
                                    $conn = mysqli_connect('localhost','elite','','cs344_project');
                                    $mail = $_SESSION['mail'];
                                    $_SESSION["mail"] = $mail;
                                    $queryz = "SELECT * FROM login WHERE e_mail = '$mail' ";
                                    $resultz = mysqli_query($conn,$queryz) or die( mysqli_error($conn));
                                    $rowz=mysqli_fetch_array($resultz);
                                    $value = $rowz['user_id'];

                                    $query1 = "SELECT * FROM shareNotify WHERE user_id = '$value' order by share_id DESC ";
                                    $result1 = mysqli_query($conn,$query1) or die( mysqli_error($conn)); 
                                    while($val=mysqli_fetch_array($result1)){
                                    
                                    $posr = $val['post_id'];    
                                    $share = $val['sharedby'];
                                    $like = $val['likedby'];

                                    if(!empty($share)){
                                        $query2 = "SELECT * FROM login WHERE user_id = '$share' ";
                                        $result2 = mysqli_query($conn,$query2) or die( mysqli_error($conn));
                                        $row=mysqli_fetch_array($result2);
    
                                        $query3 = "SELECT * FROM profile WHERE user_id = '$share' ";
                                        $result3 = mysqli_query($conn,$query3) or die( mysqli_error($conn));
                                        $row3=mysqli_fetch_array($result3);
    
                                        $q = "SELECT * FROM user_post WHERE post_id = '$posr' ";
                                        $r = mysqli_query($conn,$q) or die( mysqli_error($conn));
                                        $ro=mysqli_fetch_array($r);

                                        $output="shared";
                                    }
                                    else{

                                        $query2 = "SELECT * FROM login WHERE user_id = '$like' ";
                                        $result2 = mysqli_query($conn,$query2) or die( mysqli_error($conn));
                                        $row=mysqli_fetch_array($result2);
    
                                        $query3 = "SELECT * FROM profile WHERE user_id = '$like' ";
                                        $result3 = mysqli_query($conn,$query3) or die( mysqli_error($conn));
                                        $row3=mysqli_fetch_array($result3);
    
                                        $q = "SELECT * FROM user_post WHERE post_id = '$posr' ";
                                        $r = mysqli_query($conn,$q) or die( mysqli_error($conn));
                                        $ro=mysqli_fetch_array($r);

                                        $output="liked";

                                    }

                                    ?>      
                                    <li class="clear">
                                            <div class="profile left">
                                                <a href="">
                                                    <img src=<?php echo $row3['profile_url'] ?> alt="Avatar" class="avatarprofile">
                                                </a>
                                            </div>
                                            
                                            <div class="notify ">
                                                <a>
                                            <b><?php echo  $row['userName']; ?></b> <?php echo  $output ?> your post.<br>"<?php echo  $ro['status']; ?>"
                                                </a>
                                            </div>  
                            
                                        </li>
                                    
                                        <?php 
                                        }
                                        ?>
                                           </ul>
                                         
                                 
                        </div>
                    </div>
                    <div class="status"><b>End of Notifications</b></div>   
                             

                
                </div>
               
            </section>
            <div onclick="close1();" class="bg-modal1" id="myDiv">
                <div class="menu">
                    <ul>
                    <li class="clear"><a href='profile.php'>Profile</a></li>
                        <li class="clear"><a href='home.php'>Home</a></li>
                        <li class="clear"><a href='notifications.php'>Notifications</a></li>
                        <li class="clear"><a href="signout.php">Signout</a></li>
                        <li onclick="close1();" ><a href="" id="close">Cancel</a></li>      
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
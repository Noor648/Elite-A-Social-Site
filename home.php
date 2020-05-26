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
<?php

     session_start();
     $conn = mysqli_connect('localhost','elite','','cs344_project');
     $mail_p = $_GET["mail"];
     
     $output = '';
     if(isset($_POST['search'])){
         $searchq = $_POST["search"];
         $url= "search-index.php?search=" . $searchq;
         $searchq = preg_replace("#[^0-9a-z]#i","","$searchq");
         $query = "SELECT * FROM login where userName LIKE '%$searchq%' ";
         $result = mysqli_query($conn,$query) or die( mysqli_error($conn));
         $count = mysqli_num_rows($result);
         if($count==0){
            header("Location: ". $url);
         }
         else{
             while($row=mysqli_fetch_array($result)){
                 
                 header("Location: ". $url);
                 
             }
             
         }
     }
?>

<body>

<form method="POST" action="">
    <nav id="navbar">
        <a href="#" class="nav-logo">
            <img src="img/logo.svg" alt="">
        </a>
        <a class="none">
            <input type="txt" name="search" placeholder="Search Here..." class="searchbar">
        </a>
         
        <a href="#"  class="f-right clearl">
            <img src="assets/icons-settings.svg" alt="" id="menu-pop" class="settings" onclick="appear();">
        </a>
        
    </nav>
    </form>
   
    <div id="post-content">

        <section class="section-form">

            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1">
                                <?php

                                        
                                        $conn = mysqli_connect('localhost','elite','','cs344_project');
                                        $mail = $_SESSION['email'];
                                        $_SESSION['mail'] = $mail;
                                        
                                        // fetching user_id
                                        $query1 = "SELECT user_id FROM login WHERE e_mail = '$mail' ";
                                        $result1 = mysqli_query($conn,$query1) or die( mysqli_error($conn)); 
                                        $row1=mysqli_fetch_array($result1);
                                        $value=$row1['user_id'];

                        
                                        //fetching Friends
                                        $query2 = "SELECT * FROM friends WHERE user_id = '$value'";
                                        $result2 = mysqli_query($conn,$query2) or die( mysqli_error($conn)); 
                        

                                        while($row2=mysqli_fetch_array($result2)){
                                        //Showing Different Friends
                                            $id=$row2['friends'];

                                            $query3 = "SELECT * FROM user_post  where user_id = '$id' and post != '' order by post_id DESC"; 
                                            $result3 = mysqli_query($conn,$query3) or die( mysqli_error($conn)); 
                        
                                            while($row3=mysqli_fetch_array($result3)){
                        
                                                $likes = $row3['likes']; 
                        
                                                $query = "SELECT * FROM login WHERE user_id = '$id'";
                                                $result = mysqli_query($conn,$query) or die( mysqli_error($conn));
                                                $row=mysqli_fetch_array($result);

                                                $que = "SELECT * FROM profile WHERE user_id = '$id'";
                                                $res = mysqli_query($conn,$que) or die( mysqli_error($conn));
                                                $r=mysqli_fetch_array($res);
                                        
                                                $pass = $row3['post_id'];
                                                $passmail = $row['e_mail'];
                                        
                                        
                                ?>
                        <div class="form-postn">

                                <div class= "account">
                                        
                                    <div class="profile">
                                        <a href="profileothers.php?mail=<?php echo($passmail) ?>">
                                            <img src= <?php echo $r['profile_url'] ?> alt="Avatar" class="avatarprofile">
                                        </a>
                                    </div>
                                   
                                    <div class="avatarname">
                                        <?php echo $row['userName'] ?>
                                    </div>    
                                
                                    
                               
                                    <br>

                                    <div class="timings">
                                        <?php echo $row3['date'] ?>
                                    </div> 
                                
                                    <div class="status">
                                        <?php echo $row3['status'] ?>
                                    </div>
                                </div>

                               
                                <div class="post" >
                                    <img src="<?php echo $row3['post'] ?>" alt="" class="post" >
                                </div>
                                
                                <div class= "account">   
                                    <div id="connect">
                                        <div>
                                            <a href='phplinks/like-linkinghome.php?id=<?php echo($pass) ?>&mail=<?php echo($mail) ?>' class="like">
                                                <img src="assets/like.svg" alt=""><?php echo " $likes" ?>
                                            </a>
                                        </div>

                                        <div >
                                            <a href='phplinks/sharepost.php?mail=<?php echo($mail) ?>&postid=<?php echo $pass ?>' class="send">
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

                                    }
                                ?>
                                <div class="status"><b>Add friends to see posts</b></div>
                        <br>
                    </div>

                    <div class="col-lg-5 offset-lg-0 col-md-5 offset-md-0">
                    
                    
                        
                     <!--php part 3-->
                     <?php
                        
                        $query1 = "SELECT user_id FROM login WHERE e_mail = '$mail' ";
                        $result1 = mysqli_query($conn,$query1) or die( mysqli_error($conn)); 
                        $row1=mysqli_fetch_array($result1);
                        $value=$row1['user_id'];

                        
                        //fetching Friends
                        $query2 = "SELECT * FROM friends WHERE user_id = '$value'";
                        $result2 = mysqli_query($conn,$query2) or die( mysqli_error($conn)); 
                        

                        while($row2=mysqli_fetch_array($result2)){
                        //Showing Different Friends
                        $id=$row2['friends'];

                        $query3 = "SELECT * FROM user_post  where user_id = '$id' and empty = 'yes' order by post_id DESC"; 
                        $result3 = mysqli_query($conn,$query3) or die( mysqli_error($conn)); 
                        
                        while($row3=mysqli_fetch_array($result3)){
                        
                        $likes = $row3['likes']; 
                        
                        $query = "SELECT * FROM login WHERE user_id = '$id'";
                        $result = mysqli_query($conn,$query) or die( mysqli_error($conn));
                        $row=mysqli_fetch_array($result);

                        $que = "SELECT * FROM profile WHERE user_id = '$id'";
                        $res = mysqli_query($conn,$que) or die( mysqli_error($conn));
                        $r=mysqli_fetch_array($res);

                        $pass = $row3['post_id'];
                        $passmail = $row['e_mail'];
                        
                    ?>
                     <div class="form-postn">

                                <div class= "account">    
                                    <div class="profile">
                                        <a href="profileothers.php?mail=<?php echo($passmail) ?>" >
                                            <img src=<?php echo $r['profile_url'] ?> alt="Avatar" class="avatarprofile">
                                        </a>
                                    </div>
                               
                                    <div class="avatarname">
                                        <?php echo $row['userName'] ?> 
                                    </div>    
                                
                                   
                               
                                    <br>

                                    <div class="timings">
                                    <?php echo $row3['date'] ?>
                                    </div>  

                                    <div class="status">
                                        <?php echo $row3['status'] ?>
                                    </div>

                               
                                    <div id="connect">
                                        <div>
                                            
                                            <a href='phplinks/like-linkinghome.php?id=<?php echo($pass) ?>'   class="like"  >
                                                <img src="assets/like.svg" alt=""><?php echo " $likes" ?>
                                            </a>
                                        </div>

                                        <div >
                                            <a href='phplinks/sharepost.php?mail=<?php echo($mail) ?>&postid=<?php echo $pass ?>' class="send">
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
                        <li class="clear"><a href='notifications.php'>Notifications</a></li>
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
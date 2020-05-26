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
   
    <div id="post-content">

        <section class="section-form">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3">
                    <?php
                    
                     $conn = mysqli_connect('localhost','elite','','cs344_project');
                     $mail = $_SESSION['mail'];
                    

                     $search = $_GET["search"];
                     $query = "SELECT userName FROM login where userName LIKE '%$search%' ";
                     $result = mysqli_query($conn,$query) or die( mysqli_error($conn));
                     $count = mysqli_num_rows($result);
                   ?>

                 <p class="Searchcount" >Showing <?php echo $count?> Result(s)<p>    
                     <div class="form-postn marginup">
                            <div class="engine">
                                <ul>
                                <?php
                                             $me = "SELECT user_id from login where e_mail= '$mail'";
                                             $mego = mysqli_query($conn,$me) or die( mysqli_error($conn)); 
                                             $medo=mysqli_fetch_array($mego);
                                             $i = $medo['user_id'];

                                  $search = $_GET["search"];
                                  $query1 = "SELECT * FROM profile join login using (user_id) where userName LIKE '%$search%' ";
                                  $result1 = mysqli_query($conn,$query1) or die( mysqli_error($conn));
                                  $count1 = mysqli_num_rows($result1);
                                  if($count1==0){
                                    echo "<b>"."There were no search results!"."</b>";
                                  }
                                  else{
                                    while($row=mysqli_fetch_array($result1)){
                                        $user_id = $row['user_id'];
                                        $q= "SELECT * from friends where user_id='$i' and friends= $user_id ";
                                        $res = mysqli_query($conn,$q) or die( mysqli_error($conn));
                                        $r=mysqli_fetch_array($res);
                                       
                                       $user = $row['userName'];
                                       $mail_s = $row['e_mail'];
                                       $profile = $row['profile_url'];
                                       $url= "profileothers.php?mail=" . $mail_s;
                                       if(!empty($r['user_id']) ){ 
                                       
                               ?>   
                                    <li class="clear">
                                            <div class="profile ">
                                                <a href="<?php echo $url?>">
                                                    <img src="<?php echo $profile ?>" alt="Avatar" class="avatarprofile">
                                                </a>
                                            </div>
                                            
                                            <div class="avatarname ">
                                                <a>
                                                <?php echo $user ?>
                                                </a>
                                            </div>  
                           
                                            <br>

                                            <div class="searchstatus f-left">
                                                <a>
                                                <?php echo $mail_s ?>
                                                </a>
                                            </div> 
                                
                                            <div class="f-right tags">
                                                
                                            
                                            
                                             Friend
                                                  
                                                
                                            </div>
                                        
                                                 
                                        </li>
                                        <?php 
                                           }
                                           else if (empty($r['user_id']) && $user_id != $i ){
                                        ?>
                                            <li class="clear">
                                            <div class="profile ">
                                                <a href="<?php echo $url?>">
                                                    <img src="<?php echo $profile ?>" alt="Avatar" class="avatarprofile">
                                                </a>
                                            </div>
                                            
                                            <div class="avatarname ">
                                                <a>
                                                <?php echo $user ?>
                                                </a>
                                            </div>  
                           
                                            <br>

                                            <div class="searchstatus f-left">
                                                <a>
                                                <?php echo $mail_s ?>
                                                </a>
                                            </div> 
                                 
                                                
                                            <a href="addfriend.php?mail=<?php echo $mail_s ?>&myid=<?php echo $i ?>" class=" follow-btn f-right">
                                            
                                             Add Friend
                                                    
                                            </a>
                                        </li>
                                        <?php 
                                           }
                                           else if (empty($r['user_id']) && $user_id == $i ){
                                        ?>
                                            <li class="clear">
                                            <div class="profile ">
                                                <a href="<?php echo $url?>">
                                                    <img src="<?php echo $profile ?>" alt="Avatar" class="avatarprofile">
                                                </a>
                                            </div>
                                            
                                            <div class="avatarname ">
                                                <a>
                                                <?php echo $user ?>
                                                </a>
                                            </div>  
                           
                                            <br>

                                            <div class="searchstatus f-left">
                                                <a>
                                                <?php echo $mail_s ?>
                                                </a>
                                            </div> 
                                 
                                                
                                            
                                        </li>
                                        
                                        
                                 
                                       
                                        
                                        <?php
                                           }
                                           }
                                           }
                                        ?>                                              
                                </ul>
                     </div>
                    </div>
                
                </div>
               
            </section>
            <div onclick="close1();" class="bg-modal1" id="myDiv">
                <div class="menu">
                    <ul>
                        <li class="clear"><a href="profile.php">Profile</a></li>
                        <li class="clear"><a href="home.php">Home</a></li>
                        <li class="clear"><a href="notifications.php">Notifications</a></li>
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
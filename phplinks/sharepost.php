<?php 
$conn = mysqli_connect('localhost','elite','','cs344_project');
$conn = mysqli_connect('localhost','elite','','cs344_project');
$mail = $_GET['mail'];
$postid= $_GET['postid'];

$query = "SELECT * FROM login WHERE e_mail = '$mail' ";
$result = mysqli_query($conn,$query) or die( mysqli_error($conn)); 
$row=mysqli_fetch_array($result);
$userid = $row['user_id'];

$query1 = "SELECT * FROM user_post WHERE post_id = '$postid' ";
$result1 = mysqli_query($conn,$query1) or die( mysqli_error($conn)); 
$row1=mysqli_fetch_array($result1);
$status = $row1['status'];
$post = $row1['post'];
$share = $row1['user_id'];

if($post != NULL){
$query2 = "INSERT INTO  user_post (user_id, status, post) value ('$userid', '$status', '$post')";
mysqli_query($conn,$query2);

$query = "INSERT INTO  shareNotify (user_id, post_id, sharedby) value ('$share', '$postid','$userid')";
mysqli_query($conn,$query);

$url = "../profile.php?mail=". $mail;                            
header("Location: ". $url);
exit();

}
else{
    $query2 = "INSERT INTO  user_post (user_id, status, empty) value ('$userid', '$status', 'yes')";
    mysqli_query($conn,$query2);

    $query = "INSERT INTO  shareNotify (user_id, post_id, sharedby) value ('$share', '$postid','$userid')";
    mysqli_query($conn,$query);
    
    $url = "../profile.php?mail=". $mail;  
    header("Location: ". $url);
    exit();
}
?>
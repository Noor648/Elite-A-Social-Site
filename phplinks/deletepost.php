<?php
$conn = mysqli_connect('localhost','elite','','cs344_project');

$mail = $_GET["mail"];
$id = $_GET["postid"];

echo("$mail");

$query1 = "DELETE FROM user_post WHERE post_id = '$id' ";
mysqli_query($conn,$query1) or die( mysqli_error($conn)); 

$url= "../profile.php?mail=". $mail;
        
header("location:". $url);
exit();


?> 
<?php
echo("Try");
$conn = mysqli_connect('localhost','elite','','cs344_project');
$ii = $_GET['i'];
$idd = $_GET['you'];
$cut = "DELETE from friends where user_id= '$ii' and friends = '$idd' ";
$unfriendgo = mysqli_query($conn,$cut) or die( mysqli_error($conn));
mysqli_fetch_array($unfriendgo);

$cut1 = "DELETE from friends where user_id= '$idd' and friends = '$ii' ";
$unfriendgo1 = mysqli_query($conn,$cut1) or die( mysqli_error($conn));
mysqli_fetch_array($unfriendgo1);

$path = "SELECT * from login where user_id= '$ii' ";
$go = mysqli_query($conn,$path) or die( mysqli_error($conn));
$went = mysqli_fetch_array($go);
$mail = $went['e_mail'];
echo("$mail");
$url = "../friends.php?mail=". $mail;                            
header("Location: ". $url);
exit();

?> 
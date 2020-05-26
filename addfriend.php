<?php
echo("Try");
$conn = mysqli_connect('localhost','elite','','cs344_project');
$id1 = $_GET['myid'];
$mail_a = $_GET['mail'];
$path = "SELECT user_id from login where e_mail= '$mail_a' ";
$go = mysqli_query($conn,$path) or die( mysqli_error($conn));
$went = mysqli_fetch_array($go);
$id2 = $went['user_id'];


$add = "INSERT INTO friends(user_id,friends) VALUES ('$id1', '$id2') " ;
$addgo = mysqli_query($conn,$add) or die( mysqli_error($conn));

$add2 = "INSERT INTO friends(user_id,friends) VALUES ('$id2', '$id1')"  ;
$addgo2 = mysqli_query($conn,$add2) or die( mysqli_error($conn));

$path1 = "SELECT * from login where user_id= '$id1' ";
$go1 = mysqli_query($conn,$path1) or die( mysqli_error($conn));
$went1 = mysqli_fetch_array($go1);
$mail = $went1['e_mail'];
echo("$mail");
$url = "friends.php?mail=". $mail;                            
header("Location: ". $url);
exit();

?> 
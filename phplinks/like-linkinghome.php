<?php

$conn = mysqli_connect('localhost','elite','','cs344_project');
$posted_id = $_GET["id"];
$mail = $_GET["mail"];


$query2 = "SELECT * FROM login WHERE e_mail = '$mail' ";
$result2 = mysqli_query($conn,$query2) or die( mysqli_error($conn));
$row=mysqli_fetch_array($result2);
$liked=$row['user_id'];

$count = "SELECT * from user_post where post_id = $posted_id ";
$down = mysqli_query($conn,$count) or die( mysqli_error($conn)); 
$data=mysqli_fetch_array($down);
$new = $data['likes'] + 1;
$share = $data['user_id'];

$count1 = "UPDATE user_post SET likes = '".$new."' WHERE post_id= $posted_id ";
if ($conn->query($count1) === TRUE) {

    $query = "INSERT INTO  shareNotify (user_id, post_id, likedby) value ('$share', '$posted_id','$liked')";
    mysqli_query($conn,$query);

    $url = "../home.php?mail=". $mail;                            
    header("Location: ". $url);
    exit();
}


?>

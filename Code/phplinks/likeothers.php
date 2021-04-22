<?php

$conn = mysqli_connect('localhost','elite','','cs344_project');
$posted_id = $_GET["id"];
$mymail = $_GET["mymail"];

$query2 = "SELECT * FROM login WHERE e_mail = '$mymail' ";
$result2 = mysqli_query($conn,$query2) or die( mysqli_error($conn));
$row=mysqli_fetch_array($result2);
$liked=$row['user_id'];

$count = "SELECT * from user_post where post_id= $posted_id ";
$down = mysqli_query($conn,$count) or die( mysqli_error($conn)); 
$data=mysqli_fetch_array($down);
$new = $data['likes'] + 1;
$share = $data['user_id'];

$count1 = "UPDATE user_post SET likes = '".$new."' WHERE post_id= $posted_id ";
if ($conn->query($count1) === TRUE) {

    $query = "SELECT * FROM login join user_post using (user_id) where post_id = $posted_id";
    $plz = mysqli_query($conn,$query) or die( mysqli_error($conn)); 
    $back=mysqli_fetch_array($plz);
    $mail = $back['e_mail'];

    $query = "INSERT INTO  shareNotify (user_id, post_id, likedby) value ('$share', '$posted_id','$liked')";
    mysqli_query($conn,$query);

    $url = '../profileothers.php?mail='$mail'&mymail='$mymail;                            
    header("Location: ". $url);
    exit();
}
?>

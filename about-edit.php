<?php
session_start();
$conn = mysqli_connect('localhost','elite','','cs344_project');
$mail_p = $_SESSION["mail"];
$_SESSION["mail"] = $mail_p;
$url= "about.php";
if(isset($_POST['edit'])){	

	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$work_as = mysqli_real_escape_string($conn, $_POST['work_as']);
	$works_at = mysqli_real_escape_string($conn, $_POST['works_at']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$status = mysqli_real_escape_string($conn, $_POST['status']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
	// checking empty fields
    //updating the table
    $sql = "UPDATE about join login on login.user_id = about.user_id SET about.age='$age',about.gender='$gender',about.work_as='$work_as', about.works_at='$works_at', about.dob='$dob', about.status='$status', 
    about.number='$number', about.country='$country', about.city='$city', about.address='$address' where login.e_mail='$mail_p' ";
	$result = mysqli_query($conn,$sql);
		
	$conn->close();
		//redirectig to the display page.
        header("Location: ". $url);
	
}
?>


<?php
$mail_p = $_SESSION["mail"];
$sql1 = "SELECT * FROM about JOIN login using (user_id) where  e_mail='".$mail_p."' ";
//selecting data associated with this particular id
$result1 = mysqli_query($conn,$sql1);
$res=mysqli_fetch_array($result1);
$age = $res['age'];
$gender = $res['gender'];
$work_as = $res['work_as'];
$works_at = $res['works_at'];
$dob = $res['dob'];
$status = $res['status'];
$number = $res['number'];
$country = $res['country'];
$city = $res['city'];
$address = $res['address'];

$conn->close();
?>


<html>
<head>	
    <title>Edit Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class= "about-edit1 tags">
<a href="<?php echo $url ?>"><h5 >About</h5></a>
</div>
<div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-6 offset-sm-3 ">
     <div class="form-about tags">

    <h6><b>Personal Information</b></h6>
    
	<form  action="" method="post">
<table>
	<tr>
        <td>Age:</td>
        <td><input type="text" name="age" value="<?php echo $age ?>" required=""> </td>
		
	</tr>
	<tr>
		<td>Gender:</td>
		<td><input type="text" name="gender" value="<?php echo $gender ?>" required=""></td>
	</tr>
	<tr>
		<td>Works as:</td>
		<td><input type="text" name="work_as" value="<?php echo $work_as ?>"></td>
	</tr>
	<tr>
		<td>Works at:</td>
		<td><input type="text" name="works_at" value="<?php echo $works_at ?>" required=""></td>
	</tr>
	<tr>
		<td>Date of Birth:</td>
		<td><input type="text" name="dob" value="<?php echo $dob ?>" required=""></td>
	</tr>
	<tr>
		<td>Status:</td>
		<td><input type="text" name="status" value="<?php echo $status ?>"></td>
    </tr>
</table>
<br>
<h6><b>Contact Information</b></h6>
<table>
	<tr>
		<td>Number: &nbsp &nbsp &nbsp &nbsp </td>
		<td><input type="text" name="number" value="<?php echo $number ?>"></td>
    </tr>
</table>
<br>
<h6><b>Residance Information</b></h6>
<table>
    <tr>
		<td>Country: &nbsp &nbsp &nbsp &nbsp</td>
		<td><input type="text" name="country" value="<?php echo $country ?>" required=""></td>
    </tr>
    <tr>
		<td>City:</td>
		<td><input type="text" name="city" value="<?php echo $city ?>" required=""></td>
    </tr>
    <tr>
		<td>Address:</td>
		<td><input type="text" name="address" value="<?php echo $address ?>"></td>
    </tr>
	<tr>
		<td><input type="submit" name="edit"></td>
    </tr> 
</table>

</form>
</div>
</div>
</body>
</html>
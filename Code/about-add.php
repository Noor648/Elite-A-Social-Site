<?php
session_start();
$conn = mysqli_connect('localhost','elite','','cs344_project');
$mail_p = $_SESSION["mail"];
$_SESSION["mail"] = $mail_p;
$url= "about.php";

$sql1 = "SELECT user_id FROM login where e_mail='".$mail_p."' ";	
 $result1 = mysqli_query($conn,$sql1) or die( mysqli_error($conn));
 $row1 = mysqli_fetch_array($result1);
 $id = $row1['user_id']	;

if(isset($_POST['add'])) {
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
    $user_id = mysqli_real_escape_string($conn, $_POST['id']);
	//update data to database
	$sql = "UPDATE about SET age = '$age', gender = '$gender', work_as = '$work_as', works_at = '$works_at', dob = '$dob', status = '$status', number = '$number',
	country = '$country', city = '$city', address = '$address'  where user_id = '$id'";
	//mysqli_query($conn,$query4);
    //$sql = 	"INSERT INTO about(user_id,age,gender,work_as,works_at,dob,status,number,country,city,address) VALUES ('$user_id','$age','$gender','$work_as',
    //'$works_at','$dob','$status','$number','$country','$city','$address')";
	$result = mysqli_query($conn,$sql) or die( mysqli_error($conn));

    
    header("Location: ". $url);
    $conn->close();
}
?>

<html>
<head>	
    <title>Add Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class= "about-edit1 tags">
<a href="<?php echo $url ?>"><h5>About</h5></a>
</div>
<div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-6 offset-sm-3 ">
     <div class="form-about tags">

    <h6><b>Personal Information</b></h6>
    
	<form  action="" method="post">
<table>
    
	<tr>
        <td>Age:</td>
        <td><input type="text" name="age"  required=""> </td>
		
	</tr>
	<tr>
		<td>Gender:</td>
		<td><input type="text" name="gender" required=""></td>
	</tr>
	<tr>
		<td>Works as:</td>
		<td><input type="text" name="work_as"></td>
	</tr>
	<tr>
		<td>Works at:</td>
		<td><input type="text" name="works_at" required=""></td>
	</tr>
	<tr>
		<td>Date of Birth:</td>
		<td><input type="text" name="dob" required=""></td>
	</tr>
	<tr>
		<td>Status:</td>
		<td><input type="text" name="status" ></td>
    </tr>
</table>
<br>
<h6><b>Contact Information</b></h6>
<table>
	<tr>
		<td>Number: &nbsp &nbsp &nbsp &nbsp </td>
		<td><input type="text" name="number" ></td>
    </tr>
</table>
<br>
<h6><b>Residance Information</b></h6>
<table>
    <tr>
		<td>Country: &nbsp &nbsp &nbsp &nbsp</td>
		<td><input type="text" name="country" required=""></td>
    </tr>
    <tr>
		<td>City:</td>
		<td><input type="text" name="city" required=""></td>
    </tr>
    <tr>
		<td>Address:</td>
		<td><input type="text" name="address" ></td>
    </tr>
	<tr>
		<td><input type="submit" name="add"></td>
    </tr> 
</table>

</form>
</div>
</div>
</body>
</html>
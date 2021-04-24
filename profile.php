<?php
	$serverame = "localhost";
$dbUsername = "root";
$dbpassword = "";
$dbname = "hci";
	
	$conn = mysqli_connect($serverame , $dbUsername , $dbpassword , $dbname );
if(!$conn){
	die("Connection to database Failed : ".mysql_coect_error());
}
if(isset(($_GET["id"]))) {
	$mm = $_GET['id'];
	$dbinfo = " SELECT name, dob, city, gender, dept, phone, email from user_info WHERE id='$mm'";
	$dbresult = mysqli_query($conn, $dbinfo);
	$rt = mysqli_fetch_array($dbresult);

	$name = $rt['name'];
	$dob = $rt['dob'];
	$city = $rt['city'];
	$gender = $rt['gender'];
	$dept = $rt['dept'];
	$email = $rt['email'];
	$phone = $rt['phone'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>


<h1>MY PROFILE</h1>
<?php
	echo "Name : ", $name;  
    echo "</br>";  
	echo "Date of Birth : ", $dob;  
    echo "</br>";  
	echo "City : ", $city;  
    echo "</br>";  
	echo "Gender : ", $gender;  
    echo "</br>";  
	echo "Department : ", $dept;  
    echo "</br>";  
	echo "Email Id : ", $email;  
    echo "</br>";  
	echo "Phone Number : ", $phone;
?>

</body>
</html>
 <?php

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hci');

$name=$_POST['name'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$phone=$_POST['num'];
$email=$_POST['email'];
$dept=$_POST['dept'];
$gender=$_POST['gender'];
$password=$_POST['password1'];


$query=" insert into user_info (name,dob,city,gender,dept,email,phone,password) 
values ('$name','$dob','$city','$gender','$dept','$email','$phone','$password')";
mysqli_query($con,$query);
header('location:index.php')

?>
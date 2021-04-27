<?php

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hci');

$name=$_POST['name'];
$dob=$_POST['dob'];
$phone=$_POST['num'];
$dept=$_POST['dept'];
$gender=$_POST['gender'];
$per10=$_POST['10per'];
$per12=$_POST['12per'];
$sem1=$_POST['sem1'];
$sem2=$_POST['sem2'];
$sem3=$_POST['sem3'];
$sem4=$_POST['sem4'];
$sem5=$_POST['sem5'];
$sem6=$_POST['sem6'];
$sem7=$_POST['sem7'];
$sem8=$_POST['sem8'];
$cgpa=$_POST['overcgpa'];
$aim=$_POST['aim'];
$hobby=$_POST['hobby'];
$skill=$_POST['skill'];
$project=$_POST['project'];
$internship=$_POST['internship'];
$address=$_POST['address'];

$sam="insert into details (Name,DoB,Branch,aim,hobby,skills,projects,internships,Address,TOTAL CGPA) values ('$name','$dob','$dept','$aim','$hobby','$skill','$project','$internship','$address','$cgpa')";

$query=" insert into details (Name,DoB,Branch,10th Percentage,12th Percentage,Semester 1 SGPA,Semester 2 SGPA,Semester 3 SGPA,Semester 4 SGPA,Semester 5 SGPA,Semester 6 SGPA,Semester 7 SGPA,Semester 8 SGPA,Total CGPA,aim,hobby,skills,projects,internships,Contact Number,Address) 
values ('$name','$dob','$dept','$10per','$12per','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$cgpa','$aim','$hobby','$skill','$project','$internship','$phone','$address')";
mysqli_query($con,$sam);
header('location:resume.php');
?>
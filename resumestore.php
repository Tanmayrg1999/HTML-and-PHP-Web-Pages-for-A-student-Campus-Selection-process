<?php

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hci');

$name=$_POST['name'];
$dob=$_POST['dob'];
$phone=$_POST['num'];
$dept=$_POST['dept'];		
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

$sam = " insert into details (Name,DoB,Branch,10Per,12Per,Sem1,Sem2,Sem3,Sem4,Sem5,Sem6,Sem7,Sem8,cgpa,aim,hobby,skills,projects,internships,Contact,Address) 
values ('$name','$dob','$dept','$per10','$per12','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$cgpa','$aim','$hobby','$skill','$project','$internship','$phone','$address')";
$query=" insert into details (Name,DoB,Branch,10Per,12Per,Sem1,Sem2,Sem3,Sem4,Sem5,Sem6,Sem7,Sem8,cgpa,aim,hobby,skills,projects,internships,Contact,Address) 
values ('$name','$dob','$dept','$per10','$per12','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$cgpa','$aim','$hobby','$skill','$project','$internship','$phone','$address')";
mysqli_query($con,$query);
header('location:resume.php');
?>
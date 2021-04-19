<?php

$error = "username/password incorrect";
if(count($_POST)>0) {
  $conn = mysqli_connect("localhost","root","","hci");
  $result = mysqli_query($conn,"SELECT * FROM user_info WHERE email='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
  $count  = mysqli_num_rows($result);
  if($count==0) 
  {

    $_SESSION["error"] = $error;
    header("location: index.php"); 

  } else {
   $_SESSION["username"] = $username;
    header("location: dashboardlogin.php");
  }
}
?>
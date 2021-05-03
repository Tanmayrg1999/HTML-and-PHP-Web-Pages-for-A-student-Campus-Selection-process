<?php
$error = "username/password incorrect";
if(count($_POST)>0) {
  $conn = mysqli_connect("localhost","root","tanmay1999","hci");
  $result = mysqli_query($conn,"SELECT * FROM user_info WHERE email='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
  $count  = mysqli_num_rows($result);
  $id = mysqli_query($conn," SELECT id FROM user_info WHERE email='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
  $rows = mysqli_fetch_array($id);
  $creds = 'wrong';
  if($count==0) 
  {

    $_SESSION["error"] = $error;
    header("location: login.php?creds=".$creds); 

  } else {
   $_SESSION["username"] = $username;
    header("location: dashboardlogin.php?id=" . $rows['id']);
  }
}
?>
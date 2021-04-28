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
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Profile</title>

	<style>
        body{
            background-color: cornflowerblue;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  color:black;
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}

.emp-profile h3{
    text-align: center;
	color: #333;
}

.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}


.profile-tab label{
	text-align: justify;
	font-size: 20px;
    font-weight: 600;
}
.profile-tab p{
	text-align: justify;
	font-size: 20px;
    font-weight: 600;
	
    color: #0062cc;
}
    </style>
</head>
<body>
<div class="container emp-profile">
        <form method="post">
            
			
				<h3>My Profile</h3>

		
            
            <div class="row">
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p> <?php  echo $name ?> </p>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Date of Birth</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php  echo $dob ?></p>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Gender</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php  echo $gender ?></p>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Department</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php  echo $dept ?></p>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-6">
                                            <label>City</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php  echo $city ?></p>
                                        </div>
                                    </div>
                                    
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Phone Number</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php  echo $phone ?></p>
                                        </div>
                                    </div>
										
                                 </div>
                                    
                       
                        
                    </div>
                </div>
            </div>
        </form>           
    </div>




</body>
</html>
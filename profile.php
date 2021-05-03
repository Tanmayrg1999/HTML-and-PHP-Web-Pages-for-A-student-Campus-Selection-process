<?php
	$serverame = "localhost";
$dbUsername = "root";
$dbpassword = "tanmay1999";
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
    width:240px;
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

  @import 'https://fonts.googleapis.com/css?family=Lato:300,400';

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body, html {
  font-family: 'Lato', sans-serif;
  font-size: 20px;
  height: 100%;
  position: relative;
}

.clearfix:after {
  content: "";
  display: block;
  clear: both;
}

a {
  color: #fff;
  text-decoration: none;
}

.nav-btn {
  width: 100%;
  height: 35px;
  padding-top: 4px;
  color: #D5D3D3;
  background-color: #212121;       ;
  text-align: center;
  cursor: pointer;
  display: none;
}
.nav-btn:active {
  background-color: #090909;
}

header {
  height: 50px;
  width: 100%;
  background-color: #274C6B;
  display: none;
}

header .logo {
  opacity: 0.9;
  font-size: 120%;
  padding-top: 9px;
  padding-left: 8px;
  color: #fff;
}
header .logo span {
  font-weight: 300;
}

.container {
  width: 100%;
  height: 100%;
  position: relative;
}

.sidebar {
  width: 250px;
  background-color: #302F2F;
  position: fixed;
  top: 0px;
  left: 0;
  bottom: 0;
  box-shadow: 1px 0px 10px #777;
}

.sidebar nav > a {
  font-size: 150%;
  display: inline-block;
  padding: 30px 0px;
  padding-left: 30px;
  opacity: 0.7;
  transition: all 0.2s;
}
.sidebar nav > a:hover {
  opacity: 1;
}

.sidebar nav a span {
  font-weight: 300;
}

.sidebar nav ul {
  list-style: none;
}

.sidebar nav ul li {
  font-size: 70%;
  padding: 19px 0;  
  padding-left: 20px;
  border-bottom: 0.5px solid #111;
}

.sidebar nav ul li:nth-child(1):hover {
  background-color: #e67e22;
}

.sidebar nav ul li:nth-child(1).active {
  background-color: #e67e22;
}

.sidebar nav ul li:nth-child(2):hover {
  background-color: #2980b9;
}

.sidebar nav ul li:nth-child(2).active {
  background-color: #2980b9;
}

.sidebar nav ul li:nth-child(3):hover {
  background-color: #16a085;
}

.sidebar nav ul li:nth-child(3).active {
  background-color: #16a085;
}

.sidebar nav ul li:nth-child(4):hover {
  background-color: #8e44ad;
}

.sidebar nav ul li:nth-child(4).active {
  background-color: #8e44ad;
}

.sidebar nav ul li:nth-child(5):hover {
  background-color: #f1c40f;
}

.sidebar nav ul li:nth-child(5).active {
  background-color: #f1c40f;
}


.sidebar nav ul li a {
  color: #D7D5D5;
}

.sidebar nav ul li:hover a{
  color: #fff;
}

.main-content {
  background-color: #fafafa;
  width: calc(100% - 250px);
  height: 100%;
  margin-left: 250px;
  padding: 20px 30px;
}
.main-content .panel-wrapper {
  margin: 20px 0;
  box-shadow: 0px 1px 5px #777;
}

.main-content .panel-wrapper .panel-head {
  background-color: #00A5F2;
  color: #fff;
  padding: 10px 10px;
  border: 1px solid #00A5F2;
}
.main-content .panel-wrapper .panel-body {
  padding: 20px 10px;
  font-size: 80%;
}

@media only screen and (max-width: 420px){
  header {
    display: block;
  }
  .nav-btn {
    display: block;
  }
  .sidebar {
    position: relative;
    height: 378px;
    width: 100%;
    display: none;
    margin-bottom: 40px;
    z-index: 1000;
  }
  .main-content {
    width: 100%;
    margin-left: 0;
    z-index: -1;
    position: relative;
  }
}

@media only screen and (max-width: 768px){
  header {
    display: block;
  }
  .nav-btn {
    display: block;
  }
  .sidebar {
    position: relative;
    height: 378px;
    width: 100%;
    display: none;
    margin-bottom: 40px;
    z-index: 1000;
  }
  .main-content {
    width: 100%;
    margin-left: 0;
    z-index: -1;
    position: relative;
  }
}
</style>
    </style>
</head>
<body>

<div class="logo">Placement<span>Guru</span></div>
  </header>
  <div class="nav-btn">Menu</div>
  <div class="container">
     <div class="sidebar">
      <nav>
        <br>
         <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-2 h-2 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
              
            </svg>
        <text style="color: white"> &nbsp Placement Guru</p>
        <ul>
          <li class="active"><a href="dashboardlogin.php?id=<?php echo $mm ?>">Dashboard</a></li>
         
           <li><a href="profile.php?id=<?php echo $mm ?>">Profile</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="editresume.php?id=<?php echo $mm ?>">Create Resume</a></li>
          <li><a href="applications.php?id=<?php echo $mm ?>">Applications</a></li>
          <li><a href="oppo.php?id=<?php echo $mm ?>">Opportunities</a></li>
          <li><a href="mailto:tanmayrgaurkar@gmail.com">Contact-us</a></li>
          <li><a href="index.php">Log-Out</a></li>
        </ul>
      </nav>
    </div>

<div style="width:600px;height:500px;border:1px solid #000;margin:auto;padding:15px;box-shadow:8px 8px 10px 1px #000;
margin:auto; background-color: #f2f2f2; border-radius: 25px;"  >
        <form method="post">
            
			

				<h3>My Profile</h3>

		<br>
            
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
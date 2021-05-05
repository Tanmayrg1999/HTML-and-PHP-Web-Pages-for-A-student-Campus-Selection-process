<?php

	

$serverame = "localhost";
$dbUsername = "root";
$dbpassword = "tanmay1999";
$dbname = "hci";
	
	$conn = mysqli_connect($serverame , $dbUsername , $dbpassword , $dbname );
if(!$conn){
	die("Connection to database Failed : ".mysql_coect_error());
}

$dbinfo = "SELECT C_Name, Emp_type , Position, C_description,CTC,Schedule from company ";
$dbresult = mysqli_query($conn, $dbinfo);
$rt = mysqli_fetch_array($dbresult);







?>
<?php
$mm = $_GET["id"];
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Opportunities</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>

@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
@import 'https://fonts.googleapis.com/css?family=Lato:300,400';

* {
	box-sizing: border-box;
}


body {
	background-image: linear-gradient(45deg, #7175da, #9790F2);
	font-family: 'Muli', sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	min-height: 100vh;
	margin: 0;
}

.courses-container {
	
}

.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	max-width: 100%;
	margin: 20px;
	overflow: hidden;
	width: 700px;
}

.course h6 {
	opacity: 0.6;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.course h2 {
	font-size: 24px;
	letter-spacing: 1px;
	margin: 10px 0;
}

.course-preview {
	background-color: #2A265F;
	color: #fff;
	padding: 30px;
	max-width: 250px;
}

.course-preview a {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	opacity: 0.6;
	margin-top: 30px;
	text-decoration: none;
}

.course-info {
	padding: 30px;
	position: relative;
	width: 100%;
}

.progress-container {
	position: absolute;
	top: 30px;
	right: 30px;
	text-align: right;
	width: 150px;
}

.progress {
	background-color: #ddd;
	border-radius: 3px;
	height: 5px;
	width: 100%;
}

.progress::after {
	border-radius: 3px;
	background-color: #2A265F;
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 5px;
	width: 66%;
}

.progress-text {
	font-size: 10px;
	opacity: 0.6;
	letter-spacing: 1px;
}

.btn {
	background-color: #2A265F;
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	padding: 12px 25px;
	position: absolute;
	bottom: 30px;
	right: 30px;
	letter-spacing: 1px;
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
  font-size: 100%;
  padding: 19px 0;  
  
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
}

/* SOCIAL PANEL CSS */
.social-panel-container {
	position: fixed;
	right: 0;
	bottom: 80px;
	transform: translateX(100%);
	transition: transform 0.4s ease-in-out;
}

.social-panel-container.visible {
	transform: translateX(-10px);
}

.social-panel {	
	background-color: #fff;
	border-radius: 16px;
	box-shadow: 0 16px 31px -17px rgba(0,31,97,0.6);
	border: 5px solid #001F61;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	font-family: 'Muli';
	position: relative;
	height: 169px;	
	width: 370px;
	max-width: calc(100% - 10px);
}

.social-panel button.close-btn {
	border: 0;
	color: #97A5CE;
	cursor: pointer;
	font-size: 20px;
	position: absolute;
	top: 5px;
	right: 5px;
}

.social-panel button.close-btn:focus {
	outline: none;
}

.social-panel p {
	background-color: #001F61;
	border-radius: 0 0 10px 10px;
	color: #fff;
	font-size: 14px;
	line-height: 18px;
	padding: 2px 17px 6px;
	position: absolute;
	top: 0;
	left: 50%;
	margin: 0;
	transform: translateX(-50%);
	text-align: center;
	width: 235px;
}

.social-panel p i {
	margin: 0 5px;
}

.social-panel p a {
	color: #FF7500;
	text-decoration: none;
}

.social-panel h4 {
	margin: 20px 0;
	color: #97A5CE;	
	font-family: 'Muli';	
	font-size: 14px;	
	line-height: 18px;
	text-transform: uppercase;
}

.social-panel ul {
	display: flex;
	list-style-type: none;
	padding: 0;
	margin: 0;
}

.social-panel ul li {
	margin: 0 10px;
}

.social-panel ul li a {
	border: 1px solid #DCE1F2;
	border-radius: 50%;
	color: #001F61;
	font-size: 20px;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 50px;
	width: 50px;
	text-decoration: none;
}

.social-panel ul li a:hover {
	border-color: #FF6A00;
	box-shadow: 0 9px 12px -9px #FF6A00;
}

.floating-btn {
	border-radius: 26.5px;
	background-color: #001F61;
	border: 1px solid #001F61;
	box-shadow: 0 16px 22px -17px #03153B;
	color: #fff;
	cursor: pointer;
	font-size: 16px;
	line-height: 20px;
	padding: 12px 20px;
	position: fixed;
	bottom: 20px;
	right: 20px;
	z-index: 999;
}

.floating-btn:hover {
	background-color: #ffffff;
	color: #001F61;
}

.floating-btn:focus {
	outline: none;
}

.floating-text {
	background-color: #001F61;
	border-radius: 10px 10px 0 0;
	color: #fff;
	font-family: 'Muli';
	padding: 7px 15px;
	position: fixed;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	text-align: center;
	z-index: 998;
}

.floating-text a {
	color: #FF7500;
	text-decoration: none;
}

@media screen and (max-width: 480px) {

	.social-panel-container.visible {
		transform: translateX(0px);
	}
	
	.floating-btn {
		right: 10px;
	}
}


  </style>
</head>
<body>
<!-- partial:index.partial.html -->

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
          <li class="active"><a href="dashboardlogin.php">Dashboard</a></li>
         
           <li><a href="profile.php?id=<?php echo $mm ?>">Profile</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="editresume.php?id=<?php echo $mm ?>">Create Resume</a></li>
          <li><a href="applications.php?id=<?php echo $mm ?>">Applications</a></li>
          <li><a href="oppo.php?id=<?php echo $mm ?>">Opportunities</a></li>
          <li><a href="mailto:tanmayrgaurkar@gmail.com">Contact-us</a></li>
          <li><a href="index.php">Log-Out</a></li>
        </ul>
		</br>
      </nav>
    </div>


<?php

while ($rt = mysqli_fetch_array($dbresult))  {
?>
<div class="courses-container">
	<div class="course">
		<div class="course-preview">
			<h6></h6>
			<h2><?php echo $rt['C_Name'] ?></h2>
			<a href="#">View all details <i class="fas fa-chevron-right"></i></a>
		</div>
		<div class="course-info">
			<div class="progress-container">
				<div class="progress"></div>
				<span class="progress-text">
					3 hrs left
				</span>
			</div>
			<h6>Offer Type:<?php echo $rt['Emp_type'] ?></h6>
			<h2>Position: <?php echo $rt['Position']?></h2>
			<h2>CTC: <?php echo $rt['CTC'] ?></h2>
			<h2>Location: <?php echo $rt['Schedule'] ?></h2>
			<button class="btn">Register</button>
			<h6>345 Registrations</h6>
		</div>
	</div>
</div>
<?php
}

?>



</body>
</html>



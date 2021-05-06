
<?php
$mm = $_GET["id"];
?>
<!DOCTYPE html>
<html>
<head>



  <title></title>
   <title>Create resume</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href=css/styles.css>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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



<style>

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

.dark-mode {
  background-color: black;
  color: white;
  text-align: left;
  vertical-align: left;
}
.new
{
 position: absolute;
          top: -15%;
           left:95%;
          font-size: 25px;
          width:60px;
          
  
}
.text-center{
  position: absolute;
          top: -10%;
           right:47%;
}
</style>

<section class ="my-5">
<button class="new" style="margin: 25px;display:block;border-radius: 8px;float: right;"   onclick="myFunction()"> 🌛 </button>
  <div class="py-10">

    <h2 class="text-center">Enter Your Details<h2/>
  </div>
  
  <div class="w-50 m-auto">
    <form action="resumestore.php" method=post>
      <div class="form-group">
        <label>Enter Your Name</label>
        <input type="name" name="name" class="form-control" >
      </div>

      <div class="form-group">
        <label>Enter Date of Birth</label>
        <input type="date" name="dob" class="form-control">
      </div>

       <div class="form-group">
        <label>Enter Your phone number</label>
        <input type="name" name="num" class="form-control">
      </div>



<div class="form-group">
 <label>Select Your Department</label>
 <br>
<input type="radio" id="CS" name="dept" value="Computer-Science">
<label for="CS">Computer-Science</label><br>
<input type="radio" id="MECH" name="dept" value="Mechanical Engineering">
<label for="MECH">Mechanical Engineering</label><br>
<input type="radio" id="ENTC" name="dept" value="ENTC">
<label for="ENTC">ENTC</label><br>
<input type="radio" id="ETX" name="dept" value="ETX">
<label for="ETX">ETX</label><br>
<input type="radio" id="IT" name="dept" value="Information Technology">
<label for="IT">Information Technology</label><br>
<input type="radio" id="chem" name="dept" value="Chemical Engineering">
<label for="chem">Chemical Engineering</label><br>
<input type="radio" id="civil" name="dept" value="Civil Engineering">
<label for="civil">Civil Engineering</label><br>
</div>
 
 <div class="form-group">
        <label>Enter Your 10th percentage</label>
        <input type="float" name="10per" class="form-control">
      </div>

<div class="form-group">
        <label>Enter Your 12th percentage</label>
        <input type="float" name="12per" class="form-control">
      </div>

<div class="form-group">
        <label>Enter Semester 1 CGPA</label>
        <input type="float" name="sem1" class="form-control">
      </div>

<div class="form-group">
        <label>Enter Semester 2 CGPA</label>
        <input type="float" name="sem2" class="form-control">
      </div>
<div class="form-group">
        <label>Enter Semester 3 CGPA</label>
        <input type="float" name="sem3" class="form-control">
      </div>

<div class="form-group">
        <label>Enter Semester 4 CGPA</label>
        <input type="float" name="sem4" class="form-control">
      </div>



<div class="form-group">
        <label>Enter Semester 5 CGPA</label>
        <input type="float" name="sem5" class="form-control">
      </div>

<div class="form-group">
        <label>Enter Semester 6 CGPA</label>
        <input type="float" name="sem6" class="form-control">
      </div>
<div class="form-group">
        <label>Enter Semester 7 CGPA</label>
        <input type="float" name="sem7" class="form-control">
      </div>

<div class="form-group">
        <label>Enter Semester 8 CGPA</label>
        <input type="float" name="sem8" class="form-control">
      </div>




 <div class="form-group">
        <label>Enter Your Aggregate CGPA</label>
        <input type="float" name="overcgpa" class="form-control">
      </div>


<div class="form-group">
        <label>Aim: </label>
        <input type="text" name="aim" class="form-control">
      </div>


<div class="form-group">
        <label>Hobby: </label>
        <input type="text" name="hobby" class="form-control">
      </div>

<div class="form-group">
        <label>Skills: </label>
        <input type="text"  name="skill" class="form-control">
      </div>

<div class="form-group">
        <label>projects: </label>
        <input type="text"  name="project" class="form-control">
      </div>
<div class="form-group">
        <label>Internships: </label>
        <input type="text"  name="internship" class="form-control">
      </div>
<div class="form-group">
        <label>Address: </label>
        <input type="text"  name="address" class="form-control">
      </div>


     
      <div>
        <button type="submit" class="btn btn-success">SUBMIT
      </div>
 
    </form>
  </div>  
</section>
<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
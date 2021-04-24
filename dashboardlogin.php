<?php
$mm = $_GET["id"];
?>
header>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner img {
    width: 90vh;
    height: 50vh;
border-radius: 12px;
  }
  .carousel-indicators {
    margin-bottom: 8px;
}

  .carousel-indicators {
    width: 10px;
    height: 10px;
    border-radius: 100%;
    color: black;
}

  .carousel-inner {
    height: 100%;
}

  .carousel-item {
    text-align: center;
}
  .carousel-item img {
    display: block;
    margin: auto;
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

    <div class="logo">My<span>Bank</span></div>
  </header>
  <div class="nav-btn">Menu</div>
  <div class="container">
   
    <div class="sidebar">
      <nav>
        <a href="#">MY<span>Bank</span></a>
        <ul>
          <li class="active"><a href="#">Dashboard</a></li>
         
           <li><a href="profile.php?id=<?php echo $mm ?>">Profile</a></li>
          <li><a href="money.html">Resume</a></li>
          <li><a href="transaction.php">Edit Resume</a></li>
          <li><a href="fixed.php">Applications</a></li>
          <li><a href="help.php">Opportunities</a></li>
          <li><a href="index.php">Log-Out</a></li>
        </ul>
      </nav>
    </div>

    <div class="main-content">
      <p>Here you can stuff!</p>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/mymit.jpg" alt="mail" width="1100" height="500" >
      <b style="color:Tomato;">Place To Recruitments</b>
       <p>To leave no stone unturned in our endeavour to ensure that every alumnus looks back at us and says MITAOE has not merely taught us, it has educated us.</p>
      <p>To develop MITAOE into a world-class learning center with an excellent ambience for academics and research conjugated with vibrant environment for honing the extra and cocurricular skills of all its stake holders to enable them to meet the challenge of a fiercely competitive world.</p>
    </div>
    <div class="carousel-item">
      <img src="images/grad.jpg" alt="phone" width="1100" height="500" >
      <b style="color:Tomato;">Make Recruitment Your Advantage</b>
      <p>Simplify the Evolving, Fast Moving, Multi-Faceted Recruitments.ss</b>
      <p>Make Recruitment Your Advantage.
Simplify the Evolving, Fast Moving, Multi-Faceted Recruitments.
Be Efficient & Effective. Automate Mundane Work. Focus on Important Things.
Identify Your Valuable Partners. The Right Talent. Move Fast.
Gain An Edge Over Your Competition.
Recruit The Collaborative Way.
Continuously Evolve Partnerships & Measure Success. </p>
    </div>
    <div class="carousel-item">
      <img src="images/trans.jpg" alt="sms" width="1100" height="500" >
      <b style="color:Tomato;"> TRANSFORMING RECRUITMENTS  </b>
      <p>Intensifying competition for talent has employers turning to technology that finds answers humans can’t.Determine present and future requirements of the organization in conjunction with its personnel planning and job analysis activities. Recruitment is the process which links the employers with the employees. Increase the pool of job candidates at minimum cost.</p>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



      <div class="panel-wrapper">
        <div class="panel-head">
          Our Home Loans
        </div>
        <div class="panel-body">
          Placement Guru  has helped over 600 + Job seekers  to achieve their jobs in their dream company. <br>
          <br>
          <b>Our Values</b
          <br>          <br>

          1. Trust
          <br>
          2. Transparency
          <br>
          3. Integrity
          <br>
          4. Excellence
        </div>
      </div>
      <div class="panel-wrapper">
        <div class="panel-head">
          Recruitments Process
        </div>
        <div class="panel-body">

                  1. Identifying Vacancy
          <br>
          2. Job Analysis
          <br>
          3. Job Description
          <br>
          4. Job Specification
          <br>
          5. Job Evaluation
        </div>
      </div>
      <div class="panel-wrapper">
        <div class="panel-head">
          Resume Suggestions
        </div>
        <div class="panel-body">
How to write a good resume ·
<br> 1. Choose the right formatting · 
<br>2. Use a simple and readable design ·
<br> 3. Focus on your achievements ·
<br> 4. Include a summary and your contact information
<br> 5. Use keywords
<br> 6. Proofread for errors
        </div>
      </div>
    </div>
  </div>
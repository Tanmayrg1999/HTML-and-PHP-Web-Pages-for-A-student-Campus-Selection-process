<!DOCTYPE html>
<html>
<head>
    <title>DASHBOARD</title>
</head>
<style>
  .dark-mode {
  background-color: black;
  color: white;
}

.vertical-center {
  margin: 30;
  position: absolute;
  top: 20%;
 width: 2630px;  
height: 100px;  
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);

}
.comment {
        resize: none;
        height: 300px;
        width: 450px;
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="#">CALYXPOD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<button style="display:block;border-radius: 8px" onclick="myFunction()">Dark Mode</button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>
        </li>
      <li class="nav-item">
        <a class="nav-link"  href="#">Resume</a>
      </li>
    </ul>   

 <ul class="nav navbar-nav mr-sm-2">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Status</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="profile.php" class="dropdown-item">Appllications</a>
                        <div class="dropdown-divider"></div>
                        <a href="Login.php"class="dropdown-item">Opportunities
                          </a>
                    </div>
                </li>
    </ul>


    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

      <div>
  </div>
</nav>
<div align="bottom">
<textarea class ="comment" id="text" >
Mission
To leave no stone unturned in our endeavour to ensure that every alumnus looks back at us and says MITAOE has not merely taught us, it has educated us.

Vision
To develop MITAOE into a world-class learning center with an excellent ambience for academics and research conjugated with vibrant environment for honing the extra and cocurricular skills of all its stake holders to enable them to meet the challenge of a fiercely competitive world.
  </textarea>
</div>
<form  method="post">
   <div class="vertical-center">
<button type="submit" style="margin: auto;display:block;background-color:mediumseagreen" formaction="help.php">Contact</button>
</form>
</div>
<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
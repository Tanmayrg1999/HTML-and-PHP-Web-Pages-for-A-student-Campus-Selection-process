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
<style>
.dark-mode {
  background-color: black;
  color: white;
  text-align: left;
  vertical-align: left;
}

</style>

<section class ="my-5">
<button style="margin: 25px;display:block;border-radius: 8px"  onclick="myFunction()">Toggle dark mode</button>
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
 <label>Select Gender</label>
 <br>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>
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
        <input type="text" name="10per" class="form-control">
      </div>

<div class="form-group">
        <label>Enter Your 12th percentage</label>
        <input type="text" name="12per" class="form-control">
      </div>

<div class="form-group">
        <label>Enter Semester 1 CGPA</label>
        <input type="text" name="sem1" class="form-control">
      </div>

<div class="form-group">
        <label>Enter Semester 2 CGPA</label>
        <input type="text" name="sem2" class="form-control">
      </div>
<div class="form-group">
        <label>Enter Semester 3 CGPA</label>
        <input type="text" name="sem3" class="form-control">
      </div>

<div class="form-group">
        <label>Enter Semester 4 CGPA</label>
        <input type="text" name="sem4" class="form-control">
      </div>



<div class="form-group">
        <label>Enter Semester 5 CGPA</label>
        <input type="text" name="sem5" class="form-control">
      </div>

<div class="form-group">
        <label>Enter Semester 6 CGPA</label>
        <input type="text" name="sem6" class="form-control">
      </div>
<div class="form-group">
        <label>Enter Semester 7 CGPA</label>
        <input type="text" name="sem7" class="form-control">
      </div>

<div class="form-group">
        <label>Enter Semester 8 CGPA</label>
        <input type="text" name="sem8" class="form-control">
      </div>




 <div class="form-group">
        <label>Enter Your Aggregate CGPA</label>
        <input type="number" name="overcgpa" class="form-control">
      </div>


<div class="form-group">
        <label>Aim: </label>
        <input type="text"  name="aim" class="form-control">
      </div>


<div class="form-group">
        <label>Hobby: </label>
        <input type="text"  name="hobby" class="form-control">
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
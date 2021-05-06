<?php
if(isset(($_GET["creds"]))) { 
$mm = $_GET["creds"];
}
else
{
$mm = "right";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
     <title>CALYXPOD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href=css/styles.css>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 

<style>

   
   body {


  background-image: url('images/campus6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  color:black;

}

    div{
        margin-bottom:30px;

    }
    label{
        display: inline-block;
        width:300px;
        text-align:center;
        font-weight:bold;
    }
       
</style>
 </head>
<body>
<section class ="my-5">

  <div class="container">
    <fieldset>
 <div style="width:330px;height:600px;border:1px;margin: auto;background-color: #f2f2f2">
 <div class="py-10">


<svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="black" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-2 h-2 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
              
            </svg>
<h5 class="text-center" ; style="color:black;">Placement Guru</h5>

        <h2 class="text-center" >Get Logged In<h2/>
  </div>
  
    <form action="validation.php" method="POST">
      <div class="form-group">
        <label>USERNAME </label>
  <?php 
  if($mm == 'wrong') 
  { echo '<pre style="color:red ;font-size:15px;font-family:calibri ;">
          &nbsp       Please Enter Valid Credentials </pre> ';}
?>
        <input type="name" name="username" class="form-control" style="margin: auto;width: 250px;" placeholder="lphille29" required>
      </div>
<br>
      <div class="form-group">
        <label >PASSWORD </label>
        <input type="password" name="password" class="form-control" style="margin: auto;width: 250px;">
      </div>
 <button type="submit" style="margin: auto;display:block; border-radius: 4px; background-color: #3A8CC3;">Login</button>
 <br>
 <p style="text-align: center">-----  OR  -----</p>
 
<button type="submit" style="margin: auto;display:block;background-color: forestgreen;border-radius: 4px" formaction="create.php">Create new account</button>
    <br>   
       <a href="forgotpassword.php"><p style="text-align: center"> Forgot password ?</p></a>

       <pre>                               <a href="help.php">Need help ?</a></pre>
      </div>
    </form>
</fieldset>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
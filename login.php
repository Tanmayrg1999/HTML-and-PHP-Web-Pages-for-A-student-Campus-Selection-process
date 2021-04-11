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

  background-image: url('images/mit.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  color:    midnightblue;
}

    div{
        margin-bottom:30px;

    }
    label{
        display: inline-block;
        width:920px;
        text-align:center;
        font-weight:bold;
    }
    button{
        background-color: forestgreen;
    }
       
</style>

 </head>
<body>
<section class ="my-5">

  <div class="container">
    <fieldset>
 <div class="py-10">
    <h2 class="text-center">Login/Sign-Up<h2/>
  </div>
  

    <form action="dashboard.php" method="get">
      <div class="form-group">
        <label>USERNAME </label>

        <input type="name" name="username" class="form-control" style="margin: auto;width: 270px;" placeholder="lphille29" required>
      </div>
<br>
      <div class="form-group">
        <label >PASSWORD </label>
        <input type="password" name="pass" class="form-control" style="margin: auto;width: 270px;">
      </div>
 <button type="submit" style="margin: auto;display:block;">LOGIN</button>
 <br>
  <button type="submit" style="margin: auto;display:block;" formaction="forgotpassword.php">FORGOT PASSWORD</button>
  <br>
<button type="submit" style="margin: auto;display:block;" formaction="create.php">CREATE NEW ACCOUNT</button>

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

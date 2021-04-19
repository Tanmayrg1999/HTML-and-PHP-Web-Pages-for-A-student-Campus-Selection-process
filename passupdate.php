<!DOCTYPE html>
<html>
<head>
	 <title>Forgot Password</title>
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
        width:500px;
        text-align:left;
     font-weight:bold;
    }
       
</style>




 </head>
<body>

<section class ="my-5">
  <div class="py-10">
    <h2 class="text-center">Enter details:<h2/>
  </div>
  
  <div class="w-50 m-auto">
    <form action="dashboardlogin.php" method=post>
      <div class="form-group">
        <br><br><br>
        <label>Enter Verification code send to registered Email-id and Mobile</label>
        <input type="password" name="verification" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Enter new password</label>
        <input type="password" name="pass1" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Re-enter password</label>
        <input type="password" name="pass2" class="form-control" required>
      </div>

        <button type="submit" class="btn btn-success">SUBMIT
      </div>
      
    </form>
  </div>
</section>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
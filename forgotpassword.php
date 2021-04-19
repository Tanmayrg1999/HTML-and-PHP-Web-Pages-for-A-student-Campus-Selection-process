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
    color:white;

}

    div{
        margin-bottom:30px;

    }
    label{
        display: inline-block;
        width:1100px;
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
  <br>
  <div class="w-50 m-auto">
    <form action="passupdate.php" method=post>

      <div class="form-group">
        <label>Enter name</label>
        <input type="name" name="name" class="form-control" placeholder="Louis Phillipe" required>
      </div>
      <div class="form-group">
        <label>Enter Mobile </label>
        <input type="mobile" name="num" class="form-control" placeholder="9586747488" required>
      </div>
      <div class="form-group">
        <label>Enter Email-id</label>
        <input type="email" name="email" class="form-control" placeholder="lphillipe@gmail.com" required>
      </div>

        <button type="submit" class="btn btn-success">SUBMIT
      </div>
      
    </form>
  </div>
</section>

<script>

</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
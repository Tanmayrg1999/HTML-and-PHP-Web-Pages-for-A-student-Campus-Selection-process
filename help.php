<!DOCTYPE html>
<html lang="en">
<head>
  <title>HELP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner img {
    width: 20vh;
    height: 20vh;
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
  </style>
</head>
<body>

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
      <img src="images/mail2.png" alt="mail" width="1100" height="500" >
      <p>Mail</p>
      <p>Drop us a Mail</p>
      	
    </div>
    <div class="carousel-item">
      <img src="images/phone.png" alt="phone" width="1100" height="500" >
      <p>Contact</p>
      <p>Contact an executive</p>
    </div>
    <div class="carousel-item">
      <img src="images/sms.png" alt="sms" width="1100" height="500" >
      <p>Message</p>
      <p>Drop us a message</p>
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

</body>
</html>

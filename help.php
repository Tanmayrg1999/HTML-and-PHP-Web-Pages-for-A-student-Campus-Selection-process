<html>
<head>
<meta charset="utf-8">
<title>Display popup on page load</title>
<link rel="stylesheet" href="swc.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div class="maintext">
<h2>Feedback/Enquiry</h2>
</div>
<div id="boxes">
<div style="top: 50%; left: 50%; display: none;" id="dialog" class="window">
<div id="san">
<a href="#" class="close agree"><img src="close-icon.png" width="25" style="float:right; margin-right: -25px; margin-top: -67px;"></a>


<div class="form-body-w3l"> 
<form method="post" action="file.php">
<div class="user-text-w3ls">
<div class="w3ls-user">
<label>Fullname</label><br>
<input type="text" placeholder="NAME" name="name" required="required">
<span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span>
</div>
<div class="w3ls-password">
<label>Contact Number</label><br>
<input type="text" placeholder="CONTACT NUMBER" name="contactnumber" required="required">
<span class="icon3"><i class="fa fa-mobile" aria-hidden="true" style="    font-size: 22px;"></i></span>
</div>
<div class="clear"></div>
</div>
<div class="email-w3ls">
<label>Your e-mail</label><br>
<input type="email" placeholder="E-MAIL"  name="emailid" required="required">
<span class="icon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
</div>
<input type="submit" name="submit"  value="Signup">
</form>
</div>
</div>
</div>
<div style="width: 2478px; font-size: 32pt; color:white; height: 1202px; display: none; opacity: 0.4;" id="mask"></div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<script src="swc.js"></script>
</body>
</html>

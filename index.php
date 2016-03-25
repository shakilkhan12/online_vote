<?php
include_once "inc/connection.php";
// include_once "inc/condidate_app.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title></title>
	<!--linking css files-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="font-social/css/font-awesome.min.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Voting System</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

  <div class="top-bar">
      <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <span class="menu-icon dark" data-toggle></span>
    </span>
  <div id="responsive-menu">
    <div class="top-bar-left">
     <ul class="dropdown menu" data-dropdown-menu>
       <li class="menu-text">Vote</li>
       <li><a href="#" class="item">Home</a></li>
       <li><a href="#" class="item">Tutorials</a></li>
       <li><a href="#" class="item">Images</a></li>
       <li><a href="#" class="item">About Us</a></li>
       <li><a href="#" class="item">Contact Us</a></li>
     </ul>
    </div>
         <div class="top-bar-right">
       <ul class="menu">
         <li><input type="text" placeholder="Search......"></li>
         <li><input type="submit" value="Search" class="primary button hollow"></li>
       </ul>
     </div>
  </div>
  </div><!--close top-bar-->
<div class="container">
<div class="row">
<div class="medium-8 column">
	<img src="img/vote.jpg" alt="" width="600" height="600">
</div>
<div class="medium-4 column">
<h3>Apply Candidate</h3><hr>
<form method="post" action="" enctype="multipart/form-data">
<label for="name">Enter Name</label>
<input type="text" id="name" placeholder="Enter Name..." required=""><div class="name-error"></div>
<label for="cnic">Enter Cnic</label>
<input type="text" id="cnic" placeholder="Enter CNIC Number..."required="" maxlength="13"><div class="cnic-error" class="error"></div>
<label for="email">Enter Email</label>
<input type="email" id="email" placeholder="Enter Email Address...."required="">
<div class="email-error error"></div>
<label for="address">Enter Address</label>
<input type="text" id="address" placeholder="Enter Address...."required="">
<div class="address-error error"></div>
<label for="part">Enter Party</label>
<input type="text" id="party" placeholder="Enter Party.....">
<div class="party-error error"></div>
<blockquote>Note! For party you can enter only PTI,PMLN,PPP,ANP,QWP,MQM,JUI,JUI otherwise you will return error!</blockquote>
<label for="exampleFileUpload" class="primary button hollow upload"><span id="lebal-message">&nbsp;Upload File</span></label>
<input type="file" name="file" id="exampleFileUpload" class="show-for-sr" multiple="true"><br>
<input type="radio" name="gender" value="Male"required>&nbsp;Male
<input type="radio" name="gender" value="Famele"required>&nbsp;Famale
<select id="list" name="select" required>
    <option value="">Select Distric</option>
	<option value="1">KPK</option>
	<option value="2">PUNJAB</option>
	<option value="3">SINDH</option>
	<option value="4">BALUCHISTAN</option>

</select>
<div id="result"></div>
<input type="submit" name="submit" value="Apply" class="primary button hollow">
</form>
</div>
</div>
</div><!--close container tag-->


<!--adding javascirpt files-->
 <script src="js/vendor/jquery.min.js"></script>
 <script src="js/vendor/what-input.min.js"></script>
 <script src="js/foundation.min.js"></script>
 <script src="js/app.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="js/upload.js"></script>	
<script type="text/javascript" src="js/signup.js"></script>

</body>
</html>



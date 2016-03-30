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

<div class="medium-4 medium-offset-4 column">
<h3>Upload Your Files</h3><hr>
<form method="post" action="" enctype="multipart/form-data" id="form">

<label for="exampleFileUpload" class="primary button hollow upload"><span id="lebal-message">&nbsp;Upload File</span></label>
<input type="file" name="file" id="exampleFileUpload" class="show-for-sr" multiple="true"><br>
<div class="files_error error"></div>

<input type="button" id="submit" name="submit" value="Next" class="primary button hollow">
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



<?php session_start(); ?>
<?php include_once '../../inc/function/func.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title></title>
	<!--linking css files-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../../font-social/css/font-awesome.min.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Voting System</title>
    <link rel="stylesheet" href="../../css/foundation.css" />
    <link rel="stylesheet" href="../../css/app.css" />
    <link rel="stylesheet" href="../../css/custom.css">

</head>
<body>
<?php include_once 'overall/nav.php'; ?>
  <div class="row admin-row">
  <div class="medium-12 column">
  <div class="row">
    <div class="medium-4 column medium-offset-3">
     <h3>Login Local Admin!</h3><hr>
     <form action="" method="POST">
       
    <input type="text" name="username" placeholder="Enter Username...">
    <input type="password" name="password" placeholder="Enter Password...">
    <input type="submit" name="local" value="Login" class="primary hollow button">

     </form><!--form close-->
     <?php local_login(); ?> 

    </div><!--medim 6 close-->
  </div><!--row close--> 

</div>
</div>


  <script>
    $(document).foundation();
  </script>
 <script src="../js/vendor/jquery.min.js"></script>
 <script src="../js/vendor/what-input.min.js"></script>
 <script src="../js/foundation.min.js"></script>
 <script src="../js/app.js"></script>
 <!-- <script src="js/upload_files.js"></script> -->
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../ajax.js"></script>
<script type="text/javascript" src="ajax.js"></script>
<!-- <script type="text/javascript" src="js/upload.js"></script>	 -->
<!-- <script type="text/javascript" src="js/upload_image.js"></script> -->
<!-- <script type="text/javascript" src="js/signup.js"></script>	 -->
</body>



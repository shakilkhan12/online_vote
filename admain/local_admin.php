 
<?php include_once '../inc/connection.php'; ?>
<?php include_once '../inc/function/func.php'; ?>
<?php 
if(!isset($_SESSION['email'])){
    header("Location:admin_login.php");
    exit();

}
 ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title></title>
	<!--linking css files-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../font-social/css/font-awesome.min.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Voting System</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/app.css" />
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<?php include_once 'overall/nav.php'; ?>
  <div class="row change-row">
  <div class="medium-2 column">
    
<?php include_once 'overall/list.php'; ?>



  </div>
  <div class="medium-10 column change-margin">
  <h4>All Condidates records</h4><hr>

    <div class="row">
    <div class="medium-6 column">
      <form action="" method="POST">
      <label for="username" class="medium-4 column text-right">Enter username</label>
      <div class="medium-8 column">
      <input type="text" name="username" placeholder="Enter username....">
      </div>
      <label for="username" class="medium-4 column text-right">Choose Password</label>
      <div class="medium-8 column">
      <input type="password" name="password" placeholder="Choose password....">
      </div>
      <label for="username" class="medium-4 column text-right">Select NA</label>
      <div class="medium-8 column">
      <select name="province" id="pro">
        <option value="">Select Provice</option>
        <option value="1">KPK</option>
        <option value="2">PUNJAB</option>
        <option value="3">SINDH</option>
        <option value="4">BALUCHISTAN</option>
        <option value="5">FATA</option>
        <option value="6">FEDERAL</option>
      </select>
      </div>
            <div class="medium-8 column medium-offset-4">
      <div class="distric-error"></div>
      </div>
      <div class="medium-8 column medium-offset-4">
      <input type="submit" name="create" value="Create" class="primary button hollow">
      </div><!--medium 8 close-->
      </form><!--form close-->
      <?php create_local_admin(); ?>
      </div>
      </div>


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



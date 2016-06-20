 
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
   <form action="" method="POST">
     <textarea  name="msg" cols="30" rows="10" placeholder="Write Comments...">
       
     </textarea>
     <input type="submit" value="Submit" name="dis" class="button success hollow">

   </form>
   <?php disapprove();?>
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
<!-- <script type="text/javascript" src="js/upload.js"></script>	 -->
<!-- <script type="text/javascript" src="js/upload_image.js"></script> -->
<!-- <script type="text/javascript" src="js/signup.js"></script>	 -->
</body>



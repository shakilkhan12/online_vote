<?php
include_once "inc/connection.php";
// include_once "inc/condidate_app.php";
?>
<?php include_once 'overall/header.php'; ?>
<body>
<?php include_once 'overall/nav.php'; ?>
<div class="container">
<div class="row">
<div class="medium-8 column text-center" style="padding-top:90px;">
	<img src="img/log.png" alt="" width="200" height="200">
</div>
<div class="medium-4 column">
<h3>Voter Apply</h3><hr>
<form method="post" action="" enctype="multipart/form-data" id="voter_form">
<div class="name-error"></div>
<input type="text" id="name" placeholder="Enter Name...">
<div class="father-error error"></div>
<input type="text" id="father" placeholder="Enter Father Name...">
<div class="cnic-error error"></div>
<input type="text" id="cnic" placeholder="Enter CNIC....">
<div class="address-error error"></div>
<input type="text" id="address" placeholder="Enter Address....">


<input type="radio" name="gender" id="male" value='Male'>&nbsp;Male
<input type="radio" name="gender" id="female" value="Female">&nbsp;Famale
<select id="list" name="select">
  <option value="">Select Distric</option>
	<option value="1">KPK</option>
	<option value="2">PUNJAB</option>
	<option value="3">SINDH</option>
	<option value="4">BALUCHISTAN</option>

</select>
<div class="distric-error error"></div>
<input type="button" id="submit" name="submit" value="Apply" class="primary button hollow">

</form>
 <div class="sorry"> 
</div>
<div class="voter"></div>
</div>
</div>
</div><!--close container tag-->


<!--adding javascirpt files-->
<?php include_once 'overall/javascript_files.php'; ?>
<script type="text/javascript" src="js/voter.js"></script>

</body>
</html>



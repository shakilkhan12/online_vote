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

<input type="radio" name="gender"id="male" >&nbsp;Male
<input type="radio" name="gender" id="famle">&nbsp;Famale
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
</div>
</div>
</div><!--close container tag-->


<!--adding javascirpt files-->
<?php include_once 'overall/javascript_files.php'; ?>
<script type="text/javascript" src="js/upload.js"></script>	
<script type="text/javascript" src="js/signup.js"></script>

</body>
</html>



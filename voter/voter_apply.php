<?php
include_once "../inc/connection.php";
// include_once "inc/condidate_app.php";
?>
<?php include_once 'overall/header.php'; ?>
<body>
<?php include_once 'overall/nav.php'; ?>
<div class="container">
<div class="row">
<div class="medium-8 column text-center" style="padding-top:90px;">
	<img src="../img/log.png" alt="" width="200" height="200">
</div>
<div class="medium-4 column">
<h3>Voter Apply</h3><hr>
<form action="" method="POST">
	<input type="text" name="name" placeholder="Enter Name...">
	<input type="text" name="father" placeholder="Enter Father Name...">
	<input type="text" name="cnic" placeholder="Enter CNIC...">
	<input type="text" name="address" placeholder="Enter Address...">
	<select name="select_na" id="select_na">
		<option value="">Select NA</option>
		<option value="1">Select NA</option>
		<option value="2">Select NA</option>
		<option value="3">Select NA</option>
		<option value="4">Select NA</option>
		<option value="5">Select NA</option>
	</select>
	<input type="submit" name="voter" value="Apply" class="primary button hollow">

</form><!--form close-->
</div><!--medium 4 close-->
</div><!--row close-->
</div><!--close container tag-->


<!--adding javascirpt files-->
<?php include_once 'overall/javascript_files.php'; ?>

</body>
</html>



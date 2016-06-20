<?php
include_once "inc/connection.php";
// include_once "inc/condidate_app.php";
?>
<?php include_once 'overall/header.php'; ?>
<body>
<?php include_once 'overall/nav.php'; ?>
<div class="container">
<div class="row">
<div class="medium-8 column">
	<?php if(isset($_GET['voter']))

	{
      echo $_GET['voter'];
		} 
		?>
</div>

</div>
</div><!--close container tag-->


<!--adding javascirpt files-->
<?php include_once 'overall/javascript_files.php'; ?>
<script type="text/javascript" src="js/voter.js"></script>

</body>
</html>



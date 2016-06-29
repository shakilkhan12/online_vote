
<?php include_once '../inc/connection.php'; ?>
<?php if(!isset($_SESSION['email']))

{header('Location:admin_login.php');}

 ?>
<?php include_once '../inc/function/func.php'; ?>
<?php include_once 'overall/header.php'; ?>
<body>
<?php include_once 'overall/nav.php'; ?>
 <div class="row change-row">
 <div class="medium-2 column">
    
<?php include_once 'overall/list.php'; ?>
  </div>
<div class="medium-10 column change-margin">
<h4>Condidate Profile</h4><hr>
	<?php document_view(); ?>

</div>	
</div><!--row close-->

	<?php include_once 'overall/javascript_files.php'; ?>
</body>
</html>
<?php include_once '../inc/connection.php'; ?>
<?php include_once '../inc/function/func.php'; ?>
<?php include_once 'overall/header.php'; ?>
<body>
<?php include_once 'overall/nav.php'; ?>
 <div class="row change-row">
 <div class="medium-2 column">
    

   <ul class="vertical dropdown menu custom-menu" data-dropdown-menu style="max-width: 300px;">
  <li><a href="#" class="text-center">Dashboard</a></li>
  <li><a href="localadmin.php" class="text-center">Local Admin</a></li>
  <li><a href="#" class="text-center">Condidates</a></li>
  <li><a href="#" class="text-center">Delete</a></li>
  <li><a href="#" class="text-center">Item 1</a></li>
  <li><a href="#" class="text-center">Item 1</a></li>
  <li><a href="#" class="text-center">Item 1</a></li>
  <li><a href="#" class="text-center">Item 1</a></li>
  <li><a href="#" class="text-center">Item 1</a></li>
  <!-- ... -->
</ul>
  </div>
<div class="medium-10 column change-margin">
<h4>Condidate Profile</h4><hr>
	<?php document_view(); ?>

</div>	
</div><!--row close-->

	<?php include_once 'overall/javascript_files.php'; ?>
</body>
</html>
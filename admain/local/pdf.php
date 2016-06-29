<?php 	
 include_once '../../inc/connection.php';
 if(isset($_GET['pdf']))
 {
 	$pdf = $_GET['pdf'];
 	$pdf_query = mysqli_query($connection, "SELECT `files` FROM `signup_condidate` WHERE `id` = '$pdf'");
 	$run = mysqli_fetch_object($pdf_query);
 	$pdf_files = $run->files;

 	$file = "../../ajax/store_files/$pdf_files";
	header('Content-type:application/pdf');
	header("Content-Disposition:inline; filename = $file");
	header('Content-Transfer-Encoding:binary');
	header('Accept-Ranges:bytes');
	@readfile($file);
 }

 ?>
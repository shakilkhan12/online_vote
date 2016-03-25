<?php 

 require 'connection.php';


  if(isset($_POST['cnic']))
 {
 	//to prevent XRSS attacks use htmlspecialchars fuction
 	$cnic = htmlspecialchars($_POST['cnic']);
   // to prevent SQL injection use mysqli_real_escape_string
 	$cnic = trim(mysqli_real_escape_string($con, $cnic));
 	$query_cnic = mysqli_query($con,"SELECT `cnic` FROM `vote2` WHERE cnic='$cnic' ");
 	$query_cnic_count = mysqli_num_rows($query_cnic);
 	if($query_cnic_count == 1)
 	{
 		echo 'cnic exist';
 	}
 	else
 	{
 		echo 'cnic select';
 	}

 }
 if(isset($_POST['email']))
 {
 	$email = htmlspecialchars($_POST['email']);
 	$email = trim(mysqli_real_escape_string($con,$email));
 	$query_eamil = mysqli_query($con,"SELECT `email` FROM `vote2` WHERE email = '$email' ");
 	$query_eamil_count = mysqli_num_rows($query_eamil);
 	if($query_eamil_count == 1)
 	{
 		echo 'email exist';
 	}
 	else
 	{
 		echo 'email select';
 	}
 }
 //reciving party
 if(isset($_POST['party']))
 {
 	$party = trim(htmlspecialchars($_POST['party']));
 	$party = mysqli_real_escape_string($con,$party);
 	$query_party = mysqli_query($con,"SELECT `party` FROM `party` WHERE `party` = '$party'");
 	$query_party_count = mysqli_num_rows($query_party);
 	if($query_party_count == 1)
 	{
 		echo 'party ok';
 	}
 	else
 	{
 		echo 'party sorry';
 	}

 }

 ?>
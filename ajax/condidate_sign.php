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





 //validating provice filed
 if(isset($_POST['district']))
{
	$district = $_POST['district'];
	$s_query = mysqli_query($con,"SELECT * FROM distric WHERE country_id = '$district'");
    while($r = mysqli_fetch_array($s_query))
    {
       
    	echo "<input type='radio' name='distric_s' id='dis' value='$r[distric]'>",$r[distric],"<br>";
    	
    }
}



//insert signup data into database
if(isset($_POST['name1']) && isset($_POST['email1']) && isset($_POST['address1']) && isset($_POST['gender1']) && isset($_POST['district1']) && isset($_POST['party1']))
{
	$name = trim(htmlspecialchars($_POST['name1']));
	echo $name = mysqli_real_escape_string($con, $name);
	$email = trim(htmlspecialchars($_POST['email1']));
	echo $email = mysqli_real_escape_string($con, $email);
	$address = trim(htmlspecialchars($_POST['address1']));
	echo $address = mysqli_real_escape_string($con, $address);
	$gender = trim(htmlspecialchars($_POST['gender1']));
	echo $gender = mysqli_real_escape_string($con, $gender);
	$district = trim(htmlspecialchars($_POST['district1']));
	echo $district = mysqli_real_escape_string($con, $district);
	$party = trim(htmlspecialchars($_POST['party1']));
	echo $party = mysqli_real_escape_string($con, $party);

}

 ?>
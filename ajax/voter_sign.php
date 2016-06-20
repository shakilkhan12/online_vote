<?php require_once 'connection.php';?>

<?php 

 function secure_data($data)
 {
 	GLOBAL $con;
 	return $data = htmlspecialchars(mysqli_real_escape_string($con, $data));
 }

 function exist_cnic()
 {
 	GLOBAL $con;
 	if(isset($_POST['cnic']))
 	{
 		$cnic = secure_data($_POST['cnic']);
 		$cnic_query = mysqli_query($con, "SELECT `cnic` FROM `voter_register` WHERE `cnic` = '$cnic'");
 		$count = mysqli_num_rows($cnic_query);
 		if($count == 1)
 		{
 			echo '0';
 		}
 		else
 		{
 			echo '1';
 		}
 	}
 }
 exist_cnic();

 function check_na()
 {
 	GLOBAL $con;
 	 if(isset($_POST['district']))
{
	$district = $_POST['district'];
	$s_query = mysqli_query($con,"SELECT * FROM distric WHERE country_id = '$district'");
    while($r = mysqli_fetch_array($s_query))
    {
       
    	echo "<input type='radio' name='distric_s' id='dis' value='$r[distric]'>",$r[distric],"<br>";
    	
    }
}
 }
 check_na();

 function submit_voter()
 {
 	GLOBAL $con;
 	if(isset($_POST['name']) && isset($_POST['father_name']) && isset($_POST['cnic']) && isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['district']))
 	{
 		$name = secure_data($_POST['name']);
 		$father_name = secure_data($_POST['father_name']);
 		$cnic = secure_data($_POST['cnic']);
 		$address = secure_data($_POST['address']);
 		$gender = secure_data($_POST['gender']);
 		$district = secure_data($_POST['district']);
 		$voter_query = mysqli_query($con, "INSERT INTO `voter_register`(name,f_name,cnic,address,gender,na) VALUES ('$name','$father_name','$cnic','$address','$gender','$district')");
 		 if($voter_query)
 		 {

            
 		 	echo 'voter_register';
 		 	
   		 }
 		 else
 		 {
 		 	echo 'sorry not register';
 		 }
 	}
 }
 submit_voter();

 ?>
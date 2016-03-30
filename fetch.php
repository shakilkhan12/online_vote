<?php
include_once "inc/connection.php";
if(isset($_GET['store']))
{
	$store = $_GET['store'];
	$s_query = mysqli_query($connection,"SELECT * FROM distric WHERE country_id = '$store'");
    while($r = mysqli_fetch_array($s_query))
    {

    	echo "<input type='radio' value='$r[distric]'>",$r['distric'],"<br>";
    }
}


?>

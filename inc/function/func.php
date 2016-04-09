<?php 


function admin_login()
{
	if(isset($_POST['admin_login']))
	{
		GLOBAL $connection;
		$email = $_POST['email'];
		$password = $_POST['password'];
		$admin_query = mysqli_query($connection, "SELECT * FROM `admin_login` WHERE `email` = '$email' && `password` = '$password' ");
		$admin_count = mysqli_num_rows($admin_query);
		if($admin_count == 1)
		{
			header('location:admin_view.php');
			$_SESSION['email'] = $email;
		}
		else
		{
			echo "<div class='admin-error'>Sorry invalid email or password!</div>";
		}
	}
}


function admin_view()
{
	GLOBAL $connection;
	$condidate_query = mysqli_query($connection, "SELECT * FROM `signup_condidate`");
	      echo "
         <table class='hover stack'>
	      <thead>
         <tr>
         <th>Photo</th>
         <th>Name</th>
         <th>View</th>
         <th>Approve</th>
         <th>Disapprove</th>
         </tr>
         </thead>";
	while($r = mysqli_fetch_array($condidate_query))
	{    
		$photo = $r['image'];
		$name = $r['name'];
	
		
	
         echo "<tbody>
             <tr>
         	<td class='img'><img class='cond_img' src='../ajax/condidate_images/$photo'</td>
         	<td>$name</td>
         	<td><a href='#' class='button primary hollow'>View</a></td>
         	<td><a href='#' class='button success hollow'>Approve</a></td>
         	<td><a href='#' class='button warning hollow'>Disapprove</a></td>
         </tr>
         </tbody>
         ";


}
echo "</table>";
} ?>

		
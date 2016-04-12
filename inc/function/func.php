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
	    $id = $r['id'];  
		$photo = $r['image'];
		$name = $r['name'];
	
		
	
         echo "<tbody>
             <tr>
         	<td class='img'><img class='cond_img' src='../ajax/condidate_images/$photo'</td>
         	<td>$name</td>
         	<td><a href='document_view.php?user_id= $id' class='button primary hollow'>View</a></td>
         	<td><a href='#' class='button success hollow'>Approve</a></td>
         	<td><a href='#' class='button warning hollow'>Disapprove</a></td>
         </tr>
         </tbody>
         ";


}
echo "</table>";
} 

function document_view()
{
	GLOBAL $connection;
	if(isset($_GET['user_id']))
	{
		$user_id = $_GET['user_id'];
		$all_records = mysqli_query($connection,"SELECT * FROM `signup_condidate` WHERE `id` = $user_id");
		if(mysqli_num_rows($all_records) == 1)
		{
         while($r = mysqli_fetch_array($all_records))
         {
         	$image = $r['image'];
         	$name = $r['name'];
         	$cnic = $r['cnic'];
         	$email = $r['email'];
         	$address = $r['address'];
         	$gender = $r['gender'];
         	$district = $r['district'];
         	$party = $r['party'];
         	echo "<img class='pro_img' src='../ajax/condidate_images/$image'><br><br>";
         	 echo "
             <table>
             <thead>
              <tr>
              <th>Name</th>
              <th>Cnic</th>
              <th>Email</th>
              <th>Address</th>
              <th>Gender</th>
              <th>District</th>
              <th>Party</th>
              </tr>
             </thead>
             <tbody>
             <tr>

            <td>$name</td>
            <td>$cnic</td>
            <td>$email</td>
            <td>$address</td>
            <td>$gender</td>
            <td>$district</td>
            <td>$party</td>
             </tr>
             </tbody>
             

         	";
         }
         echo "</table>";
		}
		else
		{

		}
	}
}

?>

		
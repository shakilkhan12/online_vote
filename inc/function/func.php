<?php 
session_start();
$connection = mysqli_connect('127.0.0.1','root','mysql','test');

function secure_data($data)
{
    GLOBAL $connection;
    return $data = htmlspecialchars(mysqli_real_escape_string($connection,$data));
}
function secure_password($password)
{
    GLOBAL $connection;
    return $password = md5($password);
}

function admin_login()
{
	if(isset($_POST['admin_login']))
	{
		GLOBAL $connection;
		$email = $_POST['email'];
		$password = secure_data($_POST['password']);
		$admin_query = mysqli_query($connection, "SELECT * FROM `admin_login` WHERE `email` = '$email' && `password` = '$password' ");
		$admin_count = mysqli_num_rows($admin_query);
		if($admin_count == 1)
		{
			header('Location:admin_view.php');
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
	$condidate_query = mysqli_query($connection, "SELECT * FROM `signup_condidate` WHERE `status` = 'pendding'");
	      echo "
         <table class='hover stack'>
	      <thead>
         <tr>
         <th>Photo</th>
         <th>Name</th>
         <th>View</th>
         <th>Approve</th>
         <th>Disapprove</th>
         <th>PDF</th>
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
         	<td><a href='admin_view.php?approve=$id' class='button success hollow'>Approve</a></td>
         	<td><a href='dis.php?disapprove=$id' class='button primary hollow'>Disapprove</a></td>
            <td><a href='pdf.php?pdf=$id' class='button success hollow'>PDF</a></td>
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
		$all_records = mysqli_query($connection,"SELECT * FROM `signup_condidate` WHERE `id` = '$user_id'");
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




function local_document_view()
{
  GLOBAL $connection;
  if(isset($_GET['user_id']))
  {
    $user_id = $_GET['user_id'];
    $all_records = mysqli_query($connection,"SELECT * FROM `signup_condidate` WHERE `id` = '$user_id'");
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
          echo "<img class='pro_img' src='../../ajax/condidate_images/$image'><br><br>";
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


function approve()
{
    GLOBAL $connection;
    if(isset($_GET['approve']))
    {
        $approve = $_GET['approve'];
        $approve_query = mysqli_query($connection,"UPDATE `signup_condidate` SET `status` = 'approve' WHERE `id` = '$approve'");
        if($approve)
        {
            
            header("Location: admin_view.php");
        }
        else
        {
            echo "<script>alert('not approve');</script>";
        }
    }
}


function local_approve()
{
    GLOBAL $connection;
    if(isset($_GET['l_approve']))
    {
        $approve = $_GET['l_approve'];
        $approve_query = mysqli_query($connection,"UPDATE `signup_condidate` SET `status` = 'approve' WHERE `id` = '$approve'");
        if($approve_query)
        {
            
            header("Location: local_dashboard.php");
        }
        else
        {
            echo "<script>alert('not approve');</script>";
        }
    }
}



function disapprove()
{
    GLOBAL $connection;
    if(isset($_GET['disapprove']) && isset($_POST['dis']))
    {
        $disapprove = $_GET['disapprove'];
        $msg = $_POST['msg'];
        $disapprove_query = mysqli_query($connection,"UPDATE `signup_condidate` SET `status` = 'disapprove',`msg` = '$msg' WHERE `id` = '$disapprove'");
        if($disapprove_query)
        {

         header("Location: admin_view.php");


        }
        else
        {
          echo "<script>alert('Reject query not work!');</script>";
        }
    }
}


function local_disapprove()
{
    GLOBAL $connection;
    if(isset($_GET['l_disapprove']) && isset($_POST['dis']))
    {
        $disapprove = $_GET['l_disapprove'];
        $msg = $_POST['msg'];
        $disapprove_query = mysqli_query($connection,"UPDATE `signup_condidate` SET `status` = 'disapprove',`msg` = '$msg' WHERE `id` = '$disapprove'");
        if($disapprove_query)
        {

         header("Location: local_dashboard.php");


        }
        else
        {
          echo "<script>alert('Reject query not work!');</script>";
        }
    }
}


function results()
{
    GLOBAL $connection;

    if(isset($_POST['result_btn']))
    {
        $result = $_POST['result'];
        $result_query = mysqli_query($connection, "SELECT `status`,`msg` FROM `signup_condidate` WHERE `cnic` = '$result' OR `email` = '$result'");
        $count = mysqli_num_rows($result_query);
        if($count == 1)
        {
         $r = mysqli_fetch_array($result_query);
         $status = $r['status'];
         $msg = $r['msg'];
         if($status == 'approve')
         {
            echo "<div style='color:green;'>Congratulation you are approve!</div>";
         }
         else if($status == 'disapprove')
         {
            echo "<div style='color:red;'>$msg</div>";
         }
         else
         {
            echo "<div style='color:orange'>your are in Pendding</div>";
         }
        }
        else
        {
            echo "<div style='color:orange;'>No record found</div>";
        }
    }
}



  function local_admin()
  {
    GLOBAL $connection;
    if(isset($_POST['pro']))
    {
        $pro = $_POST['pro'];
        $pro_query = mysqli_query($connection,"SELECT * FROM `distric` WHERE `country_id` = '$pro'");
        while($r = mysqli_fetch_array($pro_query))
        {
            echo "<input type='radio' name='pro' value='$r[distric]'>",$r[distric],"<br>";
        }
    }
  }
  local_admin();

  function create_local_admin()
  {
    GLOBAL $connection;
    if(isset($_POST['create']))
    {
   $username = secure_data($_POST['username']);
   $password = secure_password($_POST['password']);
   $na = secure_data($_POST['pro']);
   if(empty($username) || empty($password) || empty($na))
   {
        echo 
        "
        <div class='error-occur'>
      Please fill out the form fields!
      </div>
        ";
   }
   else
   {
    $check_username = mysqli_query($connection,"SELECT `username` FROM `localadmin` WHERE `username` = '$username'");
    $count = mysqli_num_rows($check_username);
    if($count == 1)
    {
     echo "<div class='error-occur'>Sorry this username is already exist in database!</div>";
    }
    else
    {
      $check_na = mysqli_query($connection,"SELECT `na` FROM `localadmin` WHERE `na` = '$na'");
      $na_count = mysqli_num_rows($check_na);
      if($na_count == 1)
      {
        echo "<div class='error-occur'>Sorry this NA is already assign to another admin!</div>";
      }
      else
      {
              $admin_query = mysqli_query($connection, "INSERT INTO localadmin (username,password,na) VALUES ('$username','$password','$na')");
   if($admin_query)
   {
    
    header('Location:local/login_local.php');

   }
   else
   {
    echo "<div class='error-occur'>
      Query not work
      </div>";
   }
      }

    }

}
    }
  }

  function local_login()
  {
    GLOBAL $connection;
    if(isset($_POST['local']))
    {
      $username = secure_data($_POST['username']);
      $password = secure_password($_POST['password']);
      $local_query = mysqli_query($connection, "SELECT * FROM `localadmin` WHERE `username` = '$username' && `password` = '$password'");
      $count = mysqli_num_rows($local_query);
      if($count == 1)
      {
        $na = mysqli_fetch_object($local_query)->na;
        $_SESSION['na'] = $na;
        $_SESSION['username'] = $username;
        header("Location:local_dashboard.php");
      }
      else
      {
        echo 
        "
      <div class='error-occur'>
      Email or Password is incorrect!
      </div>
        ";
      }
    }
  }


  function local_admin_condidates()
  {
    GLOBAL $connection;
    $na = $_SESSION['na'];
    $local_admin_condidates_query = mysqli_query($connection, "SELECT * FROM `signup_condidate` WHERE `district` = '$na' && `status` = 'pendding'");
    $count = mysqli_num_rows($local_admin_condidates_query);
    if($count == 0)
    {
      echo "<div class='error-occur'>No condidates records!</div>";
    }
    else
    {
      echo "<table>
      <thead>
      <tr><th>Photo</th><th>Name</th><th>Approve</th><th>Disapprove</th><th>PDF</th></tr>
      </thead>";
      while($r = mysqli_fetch_array($local_admin_condidates_query))
      {
          $id = $r['id'];
          $image = $r['image'];
           $name = $r['name'];
           echo "<tbody>
           <tr><td><img class='pro_img' src='../../ajax/condidate_images/$image'</td>
           <td>$name</td>
           <td><a href='document_view.php?user_id=$id' class='button primary'>View</a></td>
           <td><a href='dis.php?l_disapprove=$id' class='button alert'><i class='fa fa-remove'><i></a></td>
           <td><a href='local_dashboard.php?l_approve=$id'class='button success'>Approve</a></td>
           <td><a href='pdf.php?pdf=$id' class='button primary'>PDF</a></td>
           </tr>
           </tbody>";
       
      }

    }
  }


  function all_approve()
  {
    GLOBAL $connection;
    $approve_query = mysqli_query($connection, "SELECT * FROM `signup_condidate` WHERE `status` = 'approve'");

    $count = mysqli_num_rows($approve_query);
    if($count == 0)
    {
      echo "<div class='error-occur'>No records found!</div>";
    }
    else
    {
      echo 
      "
      <table>
             <thead>
              <tr>
              <th>Name</th>
              <th>Cnic</th>
              <th>Email</th>
              <th>Address</th>
              <th>District</th>
              <th>Gender</th>
              <th>Party</th>
              <th>Status</th>
              </tr>
             </thead>
      ";
      while($r = mysqli_fetch_array($approve_query))
      {
        $name = $r['name'];
        $cnic = $r['cnic'];
        $email = $r['email'];
        $address = $r['address'];
        $district = $r['district'];
        $gender = $r['gender'];
        $party = $r['party'];
        $status = $r['status'];
        echo 
        "
        <tbody>
        <tr>
        <td>$name</td>
        <td>$cnic</td>
        <td>$email</td>
        <td>$address</td>
        <td>$district</td>
        <td>$gender</td>
        <td>$party</td>
        <td>$status</td>
        </tr>
        </tbody>
        ";
      }
      echo "</table>";
    }
  }



    function local_all_approve()
  {
    GLOBAL $connection;
    $na = $_SESSION['na'];
    $approve_query = mysqli_query($connection, "SELECT * FROM `signup_condidate` WHERE `status` = 'approve' && `district` = '$na'");

    $count = mysqli_num_rows($approve_query);
    if($count == 0)
    {
      echo "<div class='error-occur'>No records found!</div>";
    }
    else
    {
      echo 
      "
      <table>
             <thead>
              <tr>
              <th>Name</th>
              <th>Cnic</th>
              <th>Email</th>
              <th>Address</th>
              <th>District</th>
              <th>Gender</th>
              <th>Party</th>
              <th>Status</th>
              </tr>
             </thead>
      ";
      while($r = mysqli_fetch_array($approve_query))
      {
        $name = $r['name'];
        $cnic = $r['cnic'];
        $email = $r['email'];
        $address = $r['address'];
        $district = $r['district'];
        $gender = $r['gender'];
        $party = $r['party'];
        $status = $r['status'];
        echo 
        "
        <tbody>
        <tr>
        <td>$name</td>
        <td>$cnic</td>
        <td>$email</td>
        <td>$address</td>
        <td>$district</td>
        <td>$gender</td>
        <td>$party</td>
        <td>$status</td>
        </tr>
        </tbody>
        ";
      }
      echo "</table>";
    }
  }




    function all_disapprove()
  {
    GLOBAL $connection;
    $approve_query = mysqli_query($connection, "SELECT * FROM `signup_condidate` WHERE `status` = 'disapprove'");

    $count = mysqli_num_rows($approve_query);
    if($count == 0)
    {
      echo "<div class='error-occur'>No records found!</div>";
    }
    else
    {
      echo 
      "
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
              <th>Status</th>
              </tr>
             </thead>
      ";
      while($r = mysqli_fetch_array($approve_query))
      {
        $name = $r['name'];
        $cnic = $r['cnic'];
        $email = $r['email'];
        $address = $r['address'];
        $district = $r['district'];
        $gender = $r['gender'];
        $party = $r['party'];
        $status = $r['status'];
        echo 
        "
        <tbody>
        <tr>
        <td>$name</td>
        <td>$cnic</td>
        <td>$email</td>
        <td>$address</td>
        <td>$district</td>
        <td>$gender</td>
        <td>$party</td>
        <td>$status</td>
        </tr>
        </tbody>
        ";
      }
      echo "</table>";
    }
  }


      function local_all_disapprove()
  {
    GLOBAL $connection;
    $na = $_SESSION['na'];
    $approve_query = mysqli_query($connection, "SELECT * FROM `signup_condidate` WHERE `status` = 'disapprove' && `district` = '$na'");

    $count = mysqli_num_rows($approve_query);
    if($count == 0)
    {
      echo "<div class='error-occur'>No records found!</div>";
    }
    else
    {
      echo 
      "
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
              <th>Status</th>
              </tr>
             </thead>
      ";
      while($r = mysqli_fetch_array($approve_query))
      {
        $name = $r['name'];
        $cnic = $r['cnic'];
        $email = $r['email'];
        $address = $r['address'];
        $district = $r['district'];
        $gender = $r['gender'];
        $party = $r['party'];
        $status = $r['status'];
        echo 
        "
        <tbody>
        <tr>
        <td>$name</td>
        <td>$cnic</td>
        <td>$email</td>
        <td>$address</td>
        <td>$district</td>
        <td>$gender</td>
        <td>$party</td>
        <td>$status</td>
        </tr>
        </tbody>
        ";
      }
      echo "</table>";
    }
  }




      function all_pendding()
  {
    GLOBAL $connection;
    $approve_query = mysqli_query($connection, "SELECT * FROM `signup_condidate` WHERE `status` = 'pendding'");

    $count = mysqli_num_rows($approve_query);
    if($count == 0)
    {
      echo "<div class='error-occur'>No records found!</div>";
    }
    else
    {
      echo 
      "
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
              <th>Status</th>
              </tr>
             </thead>
      ";
      while($r = mysqli_fetch_array($approve_query))
      {
        $name = $r['name'];
        $cnic = $r['cnic'];
        $email = $r['email'];
        $address = $r['address'];
        $district = $r['district'];
        $gender = $r['gender'];
        $party = $r['party'];
        $status = $r['status'];
        echo 
        "
        <tbody>
        <tr>
        <td>$name</td>
        <td>$cnic</td>
        <td>$email</td>
        <td>$address</td>
        <td>$district</td>
        <td>$gender</td>
        <td>$party</td>
        <td>$status</td>
        </tr>
        </tbody>
        ";
      }
      echo "</table>";
    }
  }



        function local_all_pendding()
  {
    GLOBAL $connection;
    $na = $_SESSION['na'];
    $approve_query = mysqli_query($connection, "SELECT * FROM `signup_condidate` WHERE `status` = 'pendding' && `district` = '$na'");

    $count = mysqli_num_rows($approve_query);
    if($count == 0)
    {
      echo "<div class='error-occur'>No records found!</div>";
    }
    else
    {
      echo 
      "
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
              <th>Status</th>
              </tr>
             </thead>
      ";
      while($r = mysqli_fetch_array($approve_query))
      {
        $name = $r['name'];
        $cnic = $r['cnic'];
        $email = $r['email'];
        $address = $r['address'];
        $district = $r['district'];
        $gender = $r['gender'];
        $party = $r['party'];
        $status = $r['status'];
        echo 
        "
        <tbody>
        <tr>
        <td>$name</td>
        <td>$cnic</td>
        <td>$email</td>
        <td>$address</td>
        <td>$district</td>
        <td>$gender</td>
        <td>$party</td>
        <td>$status</td>
        </tr>
        </tbody>
        ";
      }
      echo "</table>";
    }
  }




?>

		
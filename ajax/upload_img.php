<?php
 require 'connection.php';
//upload image
 if(isset($_FILES['file']['name']))
 {
 	
 	$name_img = $_FILES['file']['name'];
 	$tem_img = $_FILES['file']['tmp_name'];
 	$condidate_images = 'condidate_images/';
	$exten_img = array('jpg','png');
 	$exten_allo_img = end(explode('.',$name_img));
 	if(in_array($exten_allo_img,$exten_img))
     {
     	$cnic = $_SESSION['cnic'];
    move_uploaded_file($tem_img, $condidate_images.$name_img);
     $query_image = mysqli_query($con,"UPDATE `signup_condidate` SET `image` = '$name_img' WHERE `cnic` = '$cnic'");
     if($query_image)
     {
     	//query work
    	echo '8';
     }
    else
     {
    	//query not workr
     	echo '9';
     }
     }
     else
     {
     	//invalid image formate
   	echo '7';
   }

	}
	?>
 
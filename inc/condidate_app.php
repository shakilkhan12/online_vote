<?php 
if(isset($_POST['submit']))
{
			$name = $_POST['name'];
			$cnic = $_POST['cnic'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$country = $_POST['select'];
			$district =$_POST['distric_s'];
			$file_name = $_FILES['file']['name'];
			$file_temp = $_FILES['file']['tmp_name'];
			$store = 'store/';

	        $pattern = "/^[a-z ]+$/i";


	        $validation = preg_match($pattern, $name);
	        if($validation == TRUE)
	        {
            $pattern1 = "/^[0-9]+$/i";
            $validation1 = preg_match($pattern1, $cnic);
            if($validation1 == TRUE)

            {
            if(strlen($cnic) != 13)
            {
     	    echo "<script>alert('CNIC length must be 13 charactors');</script>";
            }
            else
            {

            $check = mysqli_query($connection,"SELECT `cnic` FROM `vote2` WHERE `cnic`='$cnic'");
		    if(mysqli_num_rows($check) == 1)
		    {
			echo "<div class='red'><b>Sorry this records is already exist.....</b></div>";
		    }
		    else
		    {
			$allow_ext = array('pdf','PDF','DOCX','docx');
			$file_ext = end(explode('.', $file_name));
			if(in_array($file_ext,$allow_ext))
			{
			move_uploaded_file($file_temp,$store.$file_name);
            $insert = mysqli_query($connection,"INSERT INTO `vote2`(name,cnic,email,address,img_name,gender,country,district) VALUES ('$name','$cnic','$email','$address','$file_name','$gender','$country','$district')");
		    if($insert == TRUE)
		    {
			echo "<script>window.open('admin.php?success=Congajulation you are successfully registere we will review your document and sent email to you for confermation soon...','_self')</script>";
		    }
			}
			else
			{
				echo "<script>alert('Invalid file formate')</script>";
			}


		    }
		    }
	        }

	        else

	        {
	     	echo "<script>alert('CNIC must be interger');</script>";
	        }



	       }
	       else
	       {
		   echo "<script>alert('Name must be in text form...');</script>";
	       }
	       }

?>
<?php include_once "overall/header.php"; ?>
<?php include_once "inc/function/func.php"; ?>
<?php include_once 'inc/connection.php'; ?>
<body>
<?php include_once "overall/nav.php"; ?>
<img src="img/banner.jpg" alt="not found" class="banner">
<div class="row index-page marquee">
	<div class="medium-12 columns">
		<marquee behavior="" direction=""><a href="#">NA 23 PTI leads 2300 votes PMLN has seonods positon</a></marquee>
	</div><!--medium 12 close-->
</div><!--row close-->
	<div class="row index-page">
		<div class="medium-10 columns contents">
        <h3 class="text-center">Result Section</h3><hr>
        <div class="row">
        <div class="medium-6 columns medium-offset-4">
        <form action="" method="POST">
        <div class="medium-10 columns">
        <input type="text" name="result" placeholder="Enter Email OR CNIC...">
         </div>
         <div class="medium-2 columns">
         	<input type="submit" name="result_btn" value="Result" class="primary button hollow">
         </div>
        </form><!--form close-->
        </div><!--col close-->

        </div><!--row close-->
        <div class="row">
        <div class="col-md-12 text-center"><hr>
        <?php results(); ?>
        </div>
        </div><!--row close-->
		</div><!--col medium 12 close-->
		<div class="medium-2 columns">
		<h5>Follow Us On</h5><hr>
        <i class="fa fa-facebook fa-lg"></i>&nbsp;&nbsp;&nbsp;
        <i class="fa fa-twitter fa-lg"></i>&nbsp;&nbsp;&nbsp;
        <i class="fa fa-linkedin fa-lg"></i>&nbsp;&nbsp;&nbsp;
        <i class="fa fa-google-plus fa-lg"></i>&nbsp;&nbsp;&nbsp;
		</div><!--col medium 4 close-->
	</div><!--row close-->
	<div class="row footer-c">
		<div class="medium-12 columns">
			<div class="row footer-c">
				<div class="medium-4 columns">
					<h4 class="footer-h">About Us</h4><hr>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, numquam, dolore. Sit est fuga provident totam debitis veniam placeat in dolore illo, vitae nesciunt. Neque ut incidunt officia, laboriosam aliquam.
				</div><!--child 4 columns close-->
				<div class="medium-4 columns">
					<h4 class="footer-h">Services</h4><hr>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias a nam labore! Provident inventore minus cumque, doloribus iure aperiam quia ullam velit explicabo voluptates similique iste, ducimus voluptatibus? Hic, dolorum!
				</div><!--child 4 columns close-->
				<div class="medium-4 columns">
					<h4 class="footer-h">Contact Us</h4><hr>
					<i class="fa fa-envelope"></i>   : Haroonse@gmail.com<br>
					        <i class="fa fa-envelope"></i>   :Ishaqse@gmail.com<br>
					<i class="fa fa-phone"></i> : 03329612345
				</div><!--child 4 columns close-->
			</div><!--child row close-->
		</div><!--medium 12 close-->
	</div><!--row close-->
	<?php include_once "overall/javascript_files.php"; ?>

</body>

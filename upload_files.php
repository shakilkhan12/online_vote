<?php
include_once "inc/connection.php";
// include_once "inc/condidate_app.php";
?>
<?php include_once 'overall/header.php'; ?>
<body>
<?php include_once 'overall/nav.php'; ?>
<div class="container">
<div class="row">

<div class="medium-4 medium-offset-4 column">
<h3>Upload Your Files</h3><hr>
<form method="post" action="" enctype="multipart/form-data" id="form">

<label for="exampleFileUpload" class="primary button hollow upload"><span id="lebal-message">&nbsp;Upload Files</span></label>
<input type="file" name="file" id="exampleFileUpload" class="show-for-sr" multiple="true"><br>
<div class="files_error error"></div><br>

<input type="button" id="upload_f" name="submit" value="Next" class="primary button hollow">
</form>
</div>
</div>
</div><!--close container tag-->


<!--adding javascirpt files-->
 <script src="js/vendor/jquery.min.js"></script>
 <script src="js/vendor/what-input.min.js"></script>
 <script src="js/foundation.min.js"></script>
 <script src="js/app.js"></script>
 <script src="js/upload_files.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="js/upload.js"></script>	
<!-- <script type="text/javascript" src="js/signup.js"></script> -->

</body>
</html>



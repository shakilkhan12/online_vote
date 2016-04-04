$(document).ready(function(){
 $('#upload_f').click(function(){
 var file_name = $('#exampleFileUpload').val();
 if(file_name.length == '')
 {
 	$('.files_error').html('Please Upload files');
 	$('.files_error').addClass('khan');

 }
 else
 {


 $.ajax({
      type     :    "POST",
      url      :    "ajax/condidate_sign.php",
      enctype   : 'multipart/form-data',
      contentType : false,
      cache    : false,
      processData : false,
      data     :   new FormData($('#form')[0]),
      // data     :     {file1 : file},
      success  :    function(data){
      	// alert(data);
      	if(data == '3')
      	{
      		window.location = 'upload_image.php';
      	}
      	else if(data == '4')
      	{
      		$('.files_error').html('Query not work!');
      	    $('.files_error').addClass('khan');
      }
      else if(data == '5')
      {
      	$('.files_error').html('large files size!');
      	$('.files_error').addClass('khan');
      }
      else if(data == '6')
      {
      	$('.files_error').html('Invalid file formate!');
      
      	 	$('.files_error').addClass('khan');
      }
  }
  });




 }
 });
});
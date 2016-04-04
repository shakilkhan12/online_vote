$(document).ready(function(){
 $('#upload_i').click(function(){
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
      url      :    "ajax/upload_img.php",
      enctype   : 'multipart/form-data',
      contentType : false,
      cache    : false,
      processData : false,
      data     :   new FormData($('#myform')[0]),
      // data     :     {file1 : file},
      success  :    function(data){
      	// alert(data);
      	if(data.indexOf('8') > -1)
      	{
      		window.location = 'admain/welcome.php';
      	}
      	else if(data.indexOf('9') > -1)
      	{
      		$('.files_error').html('Query not work');
      	}
      	else if(data.indexOf('7') > -1)
      	{
      		$('.files_error').html('Invalide image formate');
      	}
      }

});
}
  });
});
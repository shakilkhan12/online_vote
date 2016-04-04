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
      url      :    "ajax/upload_image.php",
      enctype   : 'multipart/form-data',
      contentType : false,
      cache    : false,
      processData : false,
      data     :   new FormData($('#myform')[0]),
      // data     :     {file1 : file},
      success  :    function(data){
      	console.log(data);
      }



  });
}
});
$(document).ready(function(){
	$('#pro').change(function(){
		var province = $('#pro').val();
   if(province == '')
   {
   	$('.distric-error').html('Please select National Assambly');
   }
   else
   {
   			$.ajax({
			type  :   'POST',
			url   :   '../inc/function/func.php',
			data  :   {pro : province},
			success : function(data)
			{
				$('.distric-error').html(data);
			}
		});
   }
	});
});
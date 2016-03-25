
	$(document).ready(function(){
		$('#lebal-message').addClass('fa fa-plus');
		$('#exampleFileUpload').on('change',function(e){
			var files = $(this)[0].files;
			if(files.length >= 2)
			{
				$('#lebal-message').text(files.length+'  Files Upload');
				$('#lab').removeClass('fa,fa-plus');
				$('#lebal-message').removeClass('fa fa-plus');
			}
			else
			{
				// var filename = e.target.value.split('\\').pop();
				// $('#lebal-message').text(filename);
				$('#lebal-message').text(files.length+'  Files Upload');
				$('#lebal-message').removeClass('fa fa-plus');

			}
		});
	});
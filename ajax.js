$(document).ready(function(){
	
	$('#list').change(function(){
		var province_id = $(this).val();
		if(province_id == "")
		{
			$('#result').html('Please select province');
		}
		else
		{
		$.get("fetch.php",{store : province_id},function(data){
			$('#result').html(data)
		})
	}

	})
})

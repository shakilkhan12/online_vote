$(document).ready(function(){

  name = "";
  father_name = "";
  cnic = "";
  address = "";
  gender = "";
  district = "";

  	$('#name').focusout(function(){
    var store = $(this).val();
    //if name is empty
    if(store == "")
    {
    	$('.name-error').html('Name is required!');
    	$('#name').addClass('border-red');
    	$('#name').removeClass('border-green');
    	name = "";
    }
    else
    {
    	//check if name is character or not 
      var name_reg = /^[a-z ]+$/i;
      if(name_reg.test(store))
      {
      	$('#name').addClass('border-green');
      	$('#naem').removeClass('border-red');
      	$('.name-error').html('');
      	name = store;
      }
      else
      {
      	$('.name-error').html('Name must be text');
      	$('#name').addClass('border-red');
      	$('#name').removeClass('border-green');
      	name = "";
      }
    }
	});

	//validate father name
	  	$('#father').focusout(function(){
    var store = $(this).val();
    //if name is empty
    if(store == "")
    {
    	$('.father-error').html('Father Name is required!');
    	$('#father').addClass('border-red');
    	$('#father').removeClass('border-green');
    	father_name = "";
    }
    else
    {
    	//check if name is character or not 
      var father_reg = /^[a-z ]+$/i;
      if(father_reg.test(store))
      {
      	$('#father').addClass('border-green');
      	$('#father').removeClass('border-red');
      	$('.name-error').html('');
      	father_name = store;
      }
      else
      {
      	$('.father-error').html('Father Name must be text');
      	$('#father').addClass('border-red');
      	$('#father').removeClass('border-green');
      	father_name = "";
      }
    }
	});


	  	//cnic validation
	  	  $('#cnic').focusout(function(){
   
   var store = $(this).val();
   if(store == "")
   {
    $('.cnic-error').html('CNIC is required!');
    $('#cnic').addClass('border-red');
    $('#cnic').removeClass('border-green');
    cnic = "";
   }
 else if(store.length < 13)
 {
  $('.cnic-error').html('CNIC number is too short!');
   $('#cnic').addClass('border-red');
    $('#cnic').removeClass('border-green');
    cnic = "";
 }
 else
 {
  var cnic_reg = /^[0-9]{13}$/;
  if(cnic_reg.test(store))
  {
   $.ajax({
    type     :   "POST",
    url      :   "ajax/voter_sign.php",
    data     :   {cnic : store},
    success  :   function(data)
    {

      if(data.indexOf('0') > -1)
      {
        $('.cnic-error').html('Sorry this CNIC is already exist!');
        $('#cnic').addClass('border-red');
        $('#cnic').removeClass('border-green');
        cnic = "";
      }
      else if(data.indexOf('1') > -1)
      {
    $('.cnic-error').html('');
    $('#cnic').addClass('border-green');
    $('#cnic').removeClass('border-red');
    cnic = store;
      }
    }
   });
  }
  else
  {
    $('.cnic-error').html('Invalid CNIC Number!');
    $('#cnic').addClass('border-red');
    $('#cnic').removeClass('border-green');
    cnic = "";
  }
 }
  });

	  	  //address validate
	  	  
   $('#address').focusout(function(){

  var store = $(this).val();
  if(store == "")
  {
    $('.address-error').html('Address is required!');
    $('#address').addClass('border-red');
    $('#address').removeClass('border-green');
    address = "";
  }
  else
  {
    $('.address-error').html('');
    $('#address').addClass('border-green');
    $('#address').removeClass('border-red');
    address = store;
  }

});

   //gender validate
   $('#male').click(function(){
    
    gender = $('#male').val();
    

   });
   $('#female').click(function(){
   	gender = $('#female').val();
   	

   });

   //validate na
   
$('#list').change(function(){
 var distric = $(this).val();
 if(distric == '')
 {
 $('.distric-error').html('Please Select District!');
 $('.distric-error').addClass('border-red');
 $('.distric-error').removeClass('border-green');
 district = "";
}
else
{
  $.ajax({
  type    :   "POST",
  url     :   "ajax/voter_sign.php",
  data    :   {district : distric},
  success :   function(data)
  {
    $('.distric-error').html(data);
    $('.distric-error').addClass('border-green');
    $('.distric-error').removeClass('border-red');
   
    

    $('input:radio[name = distric_s]').change(function(){
   var store = $(this).val();
   district = store;
    });
  }

  

  });
}

});

//submit form
$('#submit').click(function(){

  if(name == '' || father_name == '' || cnic == '' || address == '' || gender == '' || district == '')
  {
    $('.sorry').addClass('error-occur');
    $('.sorry').html('Please fill out all fields and try again!');
    $('.voter').hide();
  }
  else
  {
    $.ajax({

    type  :  'POST',
    url   :  'ajax/voter_sign.php',
    data  :  {name:name,father_name:father_name,cnic:cnic,address:address,gender:gender,district:district},
   success : function(data)
   {
      
       if(data.indexOf('voter_register') > -1)
       {
        $('.voter').addClass('success_voter');
        $('.voter').html('You are successfully regisrered!');
          name = "";
          father_name = "";
          cnic = "";
          address = "";
          gender = "";
          district = "";
        $('.distric-error').hide(data);
        $("form").trigger("reset");

        
       
      

       }
   }


    });
  }
  

});

 
});
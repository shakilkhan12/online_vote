$(document).ready(function(){
	name = "";
	cnic = "";
	email = "";
	address = "";
	gender = "";
	district = "";
  party = "";
   


    //validating name field
	$('#name').focusout(function(){
    var store = $(this).val();
    //if name is empty
    if(store == "")
    {
    	$('.name-error').html('name is required!');
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

	//validating cnic 
 

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
  var cnic_reg = /^[0-9]+$/;
  if(cnic_reg.test(store))
  {
   $.ajax({
    type     :   "POST",
    url      :   "ajax/condidate_sign.php",
    data     :   {cnic : store},
    success  :   function(data)
    {
      if(data == 'cnic exist')
      {
        $('.cnic-error').html('Sorry this CNIC is already exist!');
        $('#cnic').addClass('border-red');
        $('#cnic').removeClass('border-green');
        cnic = "";
      }
      else
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
    $('.cnic-error').html('CNIC must be integer!');
    $('#cnic').addClass('border-red');
    $('#cnic').removeClass('border-green');
    cnic = "";
  }
 }
  });

//validating email address
$('#email').focusout(function(){
  var store = $(this).val();
  if(store == "")
  {
    $('.email-error').html('Email is required!');
    $('#email').addClass('border-red');
    $('#email').removeClass('border-green');
    email = "";
  }
  else
  {
    var email_reg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+$/;
    if(email_reg.test(store))
    {


   $.ajax({
    type    :    "POST",
    url     :    "ajax/condidate_sign.php",
    data    :    {email : store},
    success :    function(data)
    {
      if(data == 'email exist')
      {
        $('.email-error').html('Sorry this email is already exist!');
        $('#email').addClass('border-red');
        $('#email').removeClass('border-green');
        email = "";
      }
      else
      {
        $('.email-error').html('');
        $('#email').addClass('border-green');
        $('#email').removeClass('border-red');
        email = store;
      }
    }
   });



    }
    else
    {
      $('.email-error').html('Sorry Invalid email!');
      $('#email').addClass('border-red');
      $('#email').removeClass('border-green');
      email = "";
    }
  }



});


//validating address
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

//validating party
$('#party').focusout(function(){
  var store = $(this).val();
  if(store == "")
  {
    $('.party-error').html('Party is required!');
    $('#party').addClass('border-red');
    $('#party').removeClass('border-green');
    party = "";
  }
  else
  {
    $.ajax({
    type     :   "POST",
    url      :   "ajax/condidate_sign.php",
    data     :   {party : store},
    success  :   function(data)
    {
      if(data == 'party ok')
      {
        $('.party-error').html('');
        $('#party').addClass('border-green');
        $('#party').removeClass('border-red')
        party = store;
      }
      else
      {
        $('.party-error').html('Invalid party name!');
        $('#party').addClass('border-red');
        $('#party').removeClass('border-green');
        party = "";
      }
    }


    });
  }


});

//validating gender
$('#male').click(function(){
 gender = 'male';
 
});

$('#famle').click(function(){
gender = 'female';

});

//validating province
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
  url     :   "ajax/condidate_sign.php",
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








 $('#submit').click(function(){
  if(name == "" || cnic == "" || email == "" || address == "" || gender == "" || district == "" || party == "")
   {
    $('.sorry').addClass('error-occur');
    $('.sorry').html('Sorry please fill out all fields and try again!');
    // alert('sorru');
  }
  else
  {
   


  $.ajax({
  type     :    'POST',
  url      :    'ajax/condidate_sign.php',
  data     :    {name1 : name,email1 : email,address1 : address,gender1 : gender,district1 : district,party1 : party,cnic1 : cnic},
  success  :    function(data)
  {
    if(data == '1')
    {
      window.location = 'upload_files.php';
    }
    else
    {
      $('.sorry').html('Sorry query not workr');
    }
  }

  });


  }
});



});
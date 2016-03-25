$(document).ready(function(){
	name = "";
	cnic = "";
	email = "";
	address = "";
	upload = "";
	gender = "";
	province = "";
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






});
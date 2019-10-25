function checkemail()
{
 var email=document.getElementById( "email" ).value;
	
 if(email)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php?email='+email,
  data: {
   user_email:email,
  },
  success: function (response) {
	  console.log(response);
   $( '#email' ).data("error",response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#email' ).data("error",response);
  return false;
 }
}

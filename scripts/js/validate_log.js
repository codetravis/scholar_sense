
function validate_login()
{
   // email validation
   if(($("#email").attr("value") == null) || ($("#email").attr("value") == ''))
   {
      //$("#email_err").text("* Email is required");
      return false;
   }

   if(!(validate_email($("#email").attr("value"))))
   {
      //$("#email_err").text("* Not a valid email format");
      return false;
   }
   // passed email validation, remove error message
   //$("#email_err").text("");
   
   // password validation
   var test_pass = $("#password").attr("value");
   if(test_pass == null || test_pass == '')
   {
      //$("#pass_err").text("* Password is required");
      return false;
   }

   
   if(!(validate_password(test_pass)))
   {
      //$("#pass_err").text("* Password contains invalid characters");
      return false;
   }
   // passed password validation remove error message
   //$("#pass_err").text("")
   
   return true;
}




function validate_email(email)
{
   var email_patt = /^[a-zA-Z0-9_.]+@[a-zA-Z]+[.][a-z]+$/;
   if(email.match(email_patt) != null)
   {
      return true;
   }
   else
      return false;
}

function validate_password(pass)
{
   var pass_pattern = /^[a-zA-Z0-9_#!&+-:~`]{8,70}$/;
   if(pass.match(pass_pattern) != null )
      return true;
   else
      return false;
}


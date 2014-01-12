
function validate_registration()
{
   var test_email = $("#email").attr("value");
   // email validation
   if(test_email.length < 1)
   {
      $("#email_err").text("* Email is required");
      return false;
   }

   if(!(validate_email(test_email)))
   {
      $("#email_err").text("* Not a valid email format");
      return false;
   }
   // passed email validation, remove error message
   $("#email_err").text("");
   
   
   var test_pass = $("#password").attr("value");
   // password validation
   if(test_pass.length < 1)
   {
      $("#pass_err").text("* Password is required");
      return false;
   }
   
   
   if(test_pass.length < 8)
   {
      $("#pass_err").text("* Password is too short");
      return false;
   }
   
   if(test_pass.length > 70)
   {
      $("#pass_err").text("* Password is too long");
      return false;
   }
   
   if(!(validate_password(test_pass)))
   {
      $("#pass_err").text("* Password contains invalid characters");
      return false;
   }
   // passed password validation remove error message
   $("#pass_err").text("")
   
   if($("#pass_check").attr("value") != test_pass)
   {
      $("#pass_check_err").text("* Passwords do not match");
      return false;
   }
   
   // passed all checks, clear last error message
   $("#pass_check_err").text("");
   
   return true;
}




function validate_email(email)
{
   var email_patt = /^[a-zA-Z0-9_.]+@[a-zA-Z.]+[.][a-z]+$/;
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


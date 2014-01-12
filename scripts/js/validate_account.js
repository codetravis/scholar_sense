
function validate_account()
{
   // name validation
   if($("#name").attr("value") == null || $("#name").attr("value") == '')
   {
      $("#name_err").text("* Name is required");
      return false;
   }

   // passed name validation, remove error message
   $("#name_err").text("");
   
   // institution validation
   if($("#edu_inst").attr("value") == null || $("#edu_inst").attr("value") == '')
   {
      $("#edu_inst_err").text("* Institution is required");
      return false;
   }
   
   // passed institution validation remove error message
   $("#edu_inst_err").text("")
   
   
   // institution validation
   if($("#degree").attr("value") == null || $("#degree").attr("value") == '')
   {
      $("#degree_err").text("* required");
      return false;
   }
   
   // passed institution validation remove error message
   $("#degree_err").text("")
   
   
   // institution validation
   if($("#bio").attr("value") == null || $("bio").attr("value") == '')
   {
      $("#bio_err").text("* required");
      return false;
   }
   
   // passed institution validation remove error message
   $("#bio_err").text("")
   
   return true;
}



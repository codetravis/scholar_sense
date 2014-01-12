<?php
	
	require "../includes/config.php";
	//require "../includes/validate.php";

?>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="/dev/styles/base.css" />
   <script type="text/javascript" src="/dev/scripts/js/jquery-1.7.2.min.js"></script>
   <script type="text/javascript" src="/dev/scripts/js/validate_reg.js" ></script>
</head>

<body>
<div class="body_wrap">
   <?php include "../includes/header.php";
         include "../includes/menu.php"; ?>
   <div class="content">
      <form name="register_form" method="post" 
       action="register.php"  onsubmit="return validate_registration()" >
         Email<br/>
         <input type="text" id="email" name="email"/>
         <div id="email_err" class="error"></div>
         <p class="instr">Please use educational institution email</p>
         Password<br/>
         <input type="password" id="password" name="password"/>
         <div id="pass_err" class="error"></div>
         <p class="instr">Password must be between 8 and 70 characters</p>
         Re-type Password<br/>
         <input type="password" id="pass_check" name="pass_check" />
         <div id="pass_check_err" class="error"></div><br/>
         <input id="reg_button" type="submit" value="Register"/><br/>
      </form>
   </div>
</div>
</body>
</html>
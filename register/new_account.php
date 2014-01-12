<?php session_start(); 
   if(!isset($_SESSION["user_id"]))
   {
      header('Location: index.php');
   }

?>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="/dev/styles/base.css" />
   <script type="text/javascript" src="/dev/scripts/js/jquery-1.7.2.min.js"></script>
   <script type="text/javascript" src="/dev/scripts/js/validate_account.js" ></script>
</head>

<body>
<div class="body_wrap">
   <?php include "../includes/header.php";
   include "../includes/menu.php"; ?>
   <div class="content">
      <form name="register_form" method="post" 
       action="reg_account.php"  onsubmit="validate_account()" >
         Name<br/>
         <input type="text" id="name" name="name"/>
         <div id="name_err" class="error"></div>
         <p class="instr">Please use full name</p>
         Institution Affiliation<br/>
         <input type="text" id="edu_inst" name="edu_inst"/>
         <div id="edu_inst_err" class="error"></div>
         <p class="instr"></p>
         Degree<br/>
         <input type="text" id="degree" name="degree" />
         <div id="degree_err" class="error"></div><br/>
         Bio<br/>
         <textarea id="bio" name="bio" cols="80" rows="5">
         </textarea>
         <div id="degree_err" class="error"></div><br/>
         <p class="instr">Tell a little about yourself</p>
			</br>

         <input id="reg_button" type="submit" value="Submit"/><br/>
      </form>
   </div>
</div>
</body>
</html>
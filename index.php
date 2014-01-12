<?php session_start(); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/base.css" />
</head>

<body>
   <div class="body_wrap">
      
   <?php include "includes/header.php"; 
      // check for user signed in
      if(isset($_SESSION["user_id"]))
      { 
        // add the main menu  
      	include "includes/menu.php";
      }
   ?>	
		<br/>
      <div class="menu_wrap">
         <?php 
            // if user is not signed in
            if(!isset($_SESSION["user_id"]))
            {
               // over the login and register options
               include "includes/login.php";
               echo '<br/> <a href="http://' . $_SERVER['HTTP_HOST'] . '/dev/register/new_user.php">Register</a>';
            }
            else
            {
               // otherwise give them an option to logout
               echo '<a href="http://'. $_SERVER['HTTP_HOST'] . '/dev/logout.php" >LOG OUT</a>';
            }
         ?>
      </div>
   
      
   
   </div>
</body>
</html>

<?php
   session_start(); 
   require "../includes/strings.php";

   if(!isset($_SESSION["user_id"]))
   {
      header('Location: index.php');
   }
   else if($_SESSION["registered"] == 1) 
   {
      header('Location: ' . $home . '/account/index.php');
   }

   include "../includes/config.php";


   $insert = "INSERT INTO accounts (user_id, name, edu_inst, degree, bio) VALUES(?, ?, ?, ?, ?)";
   
   $user_id = $_SESSION["user_id"];
   $name = $_POST["name"];
   $edu_inst = $_POST["edu_inst"];
   $degree = $_POST["degree"];
   $bio = $_POST["bio"];
	
   
   $stmt = $con->prepare($insert);
   $stmt->bind_param("issss", $user_id, $name, $edu_inst, $degree, $bio);
   $stmt->execute();
   $stmt->close();
   
   $update = "UPDATE users SET registered=1 WHERE user_id=?";
   $stmt2 = $con->prepare($update);
   $stmt2->bind_param("i", $user_id);
   $stmt2->execute();
   $stmt2->close();
   
   $con->close();
   $_SESSION["registered"] = 1;
   echo '<h1>Account Registration successful!</h1>';
   echo '<a href="' . $home . '">Home</a>';

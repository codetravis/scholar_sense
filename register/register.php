<?php
   require "../includes/strings.php";
   require "../includes/config.php";
   
   $verify = 0;
   $type = 1;

   $insert = "INSERT INTO users (email, password, verify, type, registered) VALUES(?, ?, ?, ?, 0)";
   
   $email = $_POST["email"];
   $password = $_POST["password"];

   // get micro time to use as salt and round count
   $get_time = microtime();
   // get a six figure rounding count
   $round_count = substr($get_time, 3, 6);
   // run an encryption on this time to get a random salt 
   $salty = crypt($round_count);
   // split the hashed time up to pull out the actual hash
   $get_salt = preg_split("/[\$]+/" , $salty);
   // set the salt for the password to the hash
   $salt = $get_salt[2];
   
   // hash password using SHA512
   $hash_password = crypt($password, '$6$rounds=' . $round_count .  '$' . $salt . '$');
   $hash_password = substr($hash_password, 3);
   $stmt = $con->prepare($insert);
   $stmt->bind_param("ssii", $email, $hash_password, $verify, $type);
   $stmt->execute();
   $stmt->close();

   $con->close();

   echo '<h1>Registration successful!</h1>';
   echo '<a href="' . $home . '" >Home</a>';

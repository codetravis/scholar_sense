<?php  session_start();

   require "../includes/strings.php"; 
   if(isset($_SESSION["user_id"]) && $_SESSION["type"] == 0)
   {
      echo $_SESSION["user_id"];
      echo "Validated";
      require "../includes/config.php";
   }
   else
   {
      header('Location: ' . $home);
   }
   
   // get selected user information
   $uid = $_POST["uid"];
   $email = $_POST["email"];
   $type = $_POST["type"];
   
   echo "$uid $email $type </br>";
   
   // prepare update
   $update = "UPDATE users SET verify=1 WHERE user_id=? AND email=? AND type=?";
   $stmt = $con->prepare($update);
   // bind parameters and execute
   $stmt->bind_param("isi", $uid, $email, $type);
   $stmt->execute();
  
   // clean up connection
   echo $stmt->affected_rows;
   $con->commit();
   echo $stmt->affected_rows;
   $stmt->close();
   $con->close();
      // debugging
   echo '<br/> debuging statement </br>'; 
   //redirect to pending registrations
   echo '<script type="text/javascript"> window.location="'. $home .'admin/"; </script>';
   header('Location: ' . $home . '/admin/');

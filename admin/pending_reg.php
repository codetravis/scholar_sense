<?php session_start(); 
   require "../includes/strings.php";
   if(isset($_SESSION["user_id"]) && $_SESSION["type"] == 0)
   {
      echo $_SESSION["user_id"];
      echo "Validated";
   }
   else
   {
      header('Location: ' . $home);
   }
?>
<html>
   <head>
      <?php require "../includes/config.php"; ?>
      <link rel="stylesheet" type="text/css" href="../styles/base.css" />
   </head>
   <body>
      <div class="body_wrap">
         <?php
            $query = "SELECT user_id, email, type FROM users WHERE verify = 0";
            $stmt = $con->prepare($query);
            $stmt->execute();
            $stmt->bind_result($uid , $uemail, $utype);
            
            while($stmt->fetch())
            {
               echo "<div class='ver_user'>
                        $uid $uemail $utype   
                        <form action='verify.php' method='post' >
                        <input type='hidden' name='uid' value=' $uid' />
                           <input type='hidden' name='email' value='$uemail' />
                           <input type='hidden' name='type' value='$utype' />
                           <input type='submit' value='Verify' />
                        </form>
                     </div>";
            }
            
            $stmt->close();
            $con->close();
         ?>
      </div>
   </body>
</html>

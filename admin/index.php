<?php session_start();
   include "../includes/strings.php";
   if(isset($_SESSION["user_id"]) && $_SESSION["type"] == 0)
   {
      echo $_SESSION["user_id"];
      echo " Validated";
   }
   else
   {
      header('Location: ' . $home );
   }
?>
<html>
   <head>
      <?php require "../includes/config.php"; ?>
      <link rel="stylesheet" type="text/css" href="../styles/base.css" />
   </head>
   <body>
      <div class="body_wrap">
         <a href="http://www.scholarsense.com/dev/admin/pending_reg.php" >Verify Users</a>
      </div>
   </body>
</html>

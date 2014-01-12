<?php 
   // destroy the user session to log them out
   // then reroute them to the home page
   session_start();
   session_destroy(); 
   header('Location: http://' . $_SERVER["HTTP_HOST"] .  '/dev/');
?>

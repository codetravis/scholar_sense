<?php
    // check the user session on successful login
    // get common strings
    require "strings.php";
    
    // start the session
    session_start();
    // check if the user_id is set
    if( isset($_SESSION["user_id"]))
    {
       // if it is, set a local variable
       $uid = $_SESSION["user_id"];
       // if the session is valid but not registered, redirect
       if($_SESSION["registered"] == 0)
        {
            // go to registration page
            header('Location: ' . $user_reg);
            exit();
        }

    }
    else
    {
        // if user not logged in, got to home page
        header('Location: ' . $home);
        exit();
    }

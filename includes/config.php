<?php

// database connection parameters
$db_host = '127.0.0.1';
$db_port = '3306';
$db_user = 'root';
$db_pass = 'bob';
$db_name = 'scholarsense';


// database connection (using mysqli)
$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
if(mysqli_connect_errno($con))
{
   echo 'Failed to connect to database: ' . mysqli_connect_error();
}

// email regex pattern
$email_patt = "/^[a-zA-Z0-9._]+@[a-zA-Z.]+[.][a-z]+$/";

// password regex pattern
// password must be >= 8 and <= 70 characters
// can only include alphanumeric and 
// special characters set ( '_', '!', '~', '`', '#' )
$pass_patt = "/^[a-zA-Z0-9_!~`#]\{8,70\}$/";


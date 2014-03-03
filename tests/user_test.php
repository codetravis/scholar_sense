<?php

require_once "../classes/User.php"
// test file for creating users

function test_create_user($email, $password)
{
    // use User class to attempt to create a user with email and password
    $new_user = new User();
    $new_user->email = $email;
    $new_user->password = $password;

    $new_user.Create();
}

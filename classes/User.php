<?php

class User {
    public $email;
    public $user_id;
    public $password;
    
    // function for creating a new user
    public function Create()
    {
        $email = $this->email;
        $password = $this->password;
        
        // hash password then add to database    
    }

    // function for getting a user's info from the database
    public function Retrieve()
    {

    }

    // function for updating a user's info
    public function Update()
    {

    }

    // function for deleting a user from the database
    public function Remove()
    {

    }
}

<?php
// db.class.php

class DB {

    protected $db_name = 'shcolarsense';
    protected $db_user = 'test';
    protected $db_pass = 'password';
    protected $db_host = 'localhost';

    // open a connection to the database.  Make sure this is called
    // on every page that need to use the database.

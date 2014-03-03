<?php

require_once "classes/DB.class.php";

function test_db()
{
    $db = new DB();
    $data = $db->select("users", "");
    return $data;
}

test_db();

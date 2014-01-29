<?php

require_once "classes/db.class.php";

function test_db()
{
    $db = new DB();
    $data = $db->select("users", "");
    return $data;
}

test_db();

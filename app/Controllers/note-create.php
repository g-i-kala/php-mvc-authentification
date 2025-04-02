<?php

use App\Config\Database;

$db = new Database;

$heading = "New Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    dd($_POST);
}

$notes = $db->query("select * from notes where user_id = 1")->get();

require __DIR__ . "/../views/note-create.view.php";


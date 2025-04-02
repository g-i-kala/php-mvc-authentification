<?php

use App\Config\Database;

$db = new Database;

$heading = "My Notes";

$notes = $db->query("select * from notes where user_id = 1")->get();

require __DIR__ . "/../views/notes.view.php";


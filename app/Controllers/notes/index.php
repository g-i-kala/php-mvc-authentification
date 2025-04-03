<?php

use Core\Database;

$db = new Database;

$notes = $db->query("select * from notes where user_id = 1")->get();

view('/notes/index.view.php',[
    'heading' => 'My notes',
    'notes'    => $notes
]);
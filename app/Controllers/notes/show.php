<?php

use Core\Database;

$db = new Database;

$currentUserId = 1;
   
$note = $db->query("SELECT * FROM notes WHERE id = :id",[
    'id' => $_GET['id']])->findOrFail ();

authorize($note['user_id'] === $currentUserId);

view('/notes/show.view.php',[
    'heading' => $note['title'],
    'note'    => $note
]);




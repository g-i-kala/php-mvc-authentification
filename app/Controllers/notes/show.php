<?php

use App\Core\Database;

$db = new Database;

$note = $db->query("select * from notes where id = :id",['id' => $_GET['id']])->findOrFail ();

$currentUserId = 1;

authorize($note['user_id'] === $currentUserId);


view('/notes/show.view.php',[
    'heading' => $note['title'],
    'note'    => $note
]);

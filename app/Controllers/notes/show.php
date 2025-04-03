<?php

use App\Config\Database;

$db = new Database;

$note = $db->query("select * from notes where id = :id",['id' => $_GET['id']])->findOrFail ();

$heading = $note['title'];
$currentUserId = 1;

authorize($note['user_id'] === $currentUserId);


require __DIR__ . "/../../views/notes/show.view.php";
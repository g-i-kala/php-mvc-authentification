<?php

use App\Config\Database;

$db = new Database;

$note = $db->query("select * from notes where id = :id",['id' => $_GET['id']])->fetch();

$heading = $note['title'];

if(! $note) {
    abort();
}

if ($note['user_id'] !== 1) {
    abort(403);
}

require __DIR__ . "/../views/note.view.php";
<?php

use App\Config\Database;

$db = new Database;

$note = $db->query("select * from notes where id = :id",['id' => $_GET['id']])->fetch();

$heading = $note['title'];

require __DIR__ . "/../views/note.view.php";
<?php

use App\Config\Database;

$db = new Database;

$noteId = $_GET['id'];

$note = $db->query("select * from notes where id=$noteId")->fetch(PDO::FETCH_ASSOC);

$heading = $note['title'];

require __DIR__ . "/../views/note.view.php";
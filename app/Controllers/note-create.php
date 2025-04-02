<?php

use App\Config\Database;

$db = new Database;

$heading = "New Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (strlen($_POST['content']) === 0) {
        $errors['content'] = "Content is required.";
    }

    if (strlen($_POST['content']) > 5000) {
        $errors['content'] = "Body can not be more than 3500 characters.";
    }
     
    $db->query("INSERT INTO notes(title, content, user_id) VALUES (:title, :content, :user_id)", [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'user_id' => 1,
    ]);
}

require __DIR__ . "/../views/note-create.view.php";


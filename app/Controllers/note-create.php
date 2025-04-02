<?php

use App\Config\Database;
use App\Config\Validator;

$db = new Database;

$heading = "New Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (! Validator::string($_POST['title'], 1, 250)) {
        $errors['title'] = "Title of not more than 250 charakters is required.";
    }

    if (! $validator->string($_POST['content'], 1, 5000)) {
        $errors['content'] = "Content of not more than 5000 charakters is required.";
    }
    
    if (empty($errors)) {
        $db->query("INSERT INTO notes(title, content, user_id) VALUES (:title, :content, :user_id)", [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'user_id' => 1,
        ]);
    };
    
}

require __DIR__ . "/../views/note-create.view.php";


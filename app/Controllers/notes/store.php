<?php

use Core\Database;
use Core\Validator;

$db = new Database;

$errors = [];

if (! Validator::string($_POST['title'], 1, 250)) {
    $errors['title'] = "Title of not more than 250 charakters is required.";
}

if (! Validator::string($_POST['content'], 1, 5000)) {
    $errors['content'] = "Content of not more than 5000 charakters is required.";
}

if (! empty($errors)) {
    return view('/notes/create.view.php',[
        'heading' => 'New Note',
        'errors'  => $errors,
    ]);

} else {
    $db->query("INSERT INTO notes(title, content, user_id) VALUES (:title, :content, :user_id)", [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'user_id' => 1,
    ]);

    header("Location: /notes");
    exit();
};


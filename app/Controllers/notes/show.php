<?php

use Core\Database;

$db = new Database;

$currentUserId = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $note = $db->query("SELECT * FROM notes WHERE id = :id",[
        'id' => $_POST['note_id']])->findOrFail ();

    authorize($note['user_id'] === $currentUserId);
 
    $result = $db->query("DELETE FROM notes WHERE id = :id", [
        'id' => $_POST['note_id'],
    ]);
    
    //header("Location: /notes");

    if(! $result) { 
        // Error if delete not succesfull
    } else {
        header("Location: /notes");
    }

} else {
   
    $note = $db->query("SELECT * FROM notes WHERE id = :id",[
        'id' => $_GET['id']])->findOrFail ();

    authorize($note['user_id'] === $currentUserId);

    view('/notes/show.view.php',[
        'heading' => $note['title'],
        'note'    => $note
    ]);
}



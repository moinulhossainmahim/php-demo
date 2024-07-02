<?php

  use Core\App;
  use Core\Database;

  $heading = 'Note';
  $currentUser = 1;

  $db = App::resolve(Database::class);


  $note = $db->query('select * from notes where id = :id',[
    'id' => $_GET['id']
  ])->findOrFail();

  authorize($note['user_id'] == $currentUser);

  view("notes/edit.view.php", [
    'heading' => 'Edit Note',
    'errors' => [],
    'note' => $note,
  ]);

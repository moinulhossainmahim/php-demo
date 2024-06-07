<?php

  $heading = 'Note';
  $currentUser = 1;
  $config = require('config.php');
  $db = new Database($config['database']);

  $note = $db->query('select * from notes where id = :id',[
    'id' => $_GET['id']
  ])->fetch();

  if(!$note) {
    abort();
  }

  if ($note['user_id'] !== $currentUser) {
    abort(Response::FORBIDDEN);
  }

  require 'views/note.view.php';

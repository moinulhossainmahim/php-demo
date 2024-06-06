<?php

  require 'functions.php';
  require 'Database.php';

  $config = require('config.php');

  $db = new Database($config['database']);

  $query = "select * from posts where id = ?";
  $id = $_GET['id'];

  $posts = $db->query($query, [$id])->fetchAll();

  foreach($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
  }

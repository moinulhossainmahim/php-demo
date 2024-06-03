<?php
  $langsWithCreators = [
    [
      'name' => 'JavaScript',
      'creator' => 'Brendan Eich'
    ],
    [
      'name' => 'PHP',
      'creator' => 'Rasmus Lerdorf'
    ],
    [
      'name' => 'Java',
      'creator' => 'James Gosling'
    ]
  ];

  $age = 17;
  $langs = [
    "Php",
    "JavaScript",
    "Java"
  ];

  if ($age >= 18) {
    $message = "You are allowed to marry in BD";
  } else {
    $message = "You are not allowed to marry in BD";
  }

  require 'index.view.php';

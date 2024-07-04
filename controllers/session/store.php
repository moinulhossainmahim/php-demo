<?php

  use Core\Validator;
  use Core\App;
  use Core\Database;

  $email = $_POST['email'];
  $password = $_POST['password'];

  $db = App::resolve(Database::class);

  $errors = [];

  if (! Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
  }

  if(!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Password length must be at least 7 characters';
  }

  if(! empty($errors)) {
    return view('session/create.view.php', [
      'errors' => $errors
    ]);
  }

  $user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email,
  ])->find();

  if ($user) {
    if(password_verify($password, $user['password'])) {
      login([
        'email' => $user['email'],
      ]);

      header('location: /');
      exit();
    }
  }

  return view('session/create.view.php', [
    'errors' => [
      'email' => 'No matching account for the email and password'
    ],
  ]);


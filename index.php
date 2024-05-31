<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php For Dummies</title>
  </head>
  <body>
    <?php
      $age = 17;

      if ($age >= 18) {
        $message = "You are allowed to marry in BD";
      } else {
        $message = "You are not allowed to marry in BD";
      }
    ?>
    <h1>
      <?= $message; ?>
    </h1>
  </body>
</html>

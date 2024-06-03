<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP For Dummies</title>
  </head>
  <body>
    <h1>
      <?= $message; ?>
    </h1>
    <ul>
      <?php foreach($langs as $lang) : ?>
        <li>
          <?= $lang ?>
        </li>
      <?php endforeach; ?>
    </ul>

    <h1>Languages and their creators</h1>
    <ul>
      <?php foreach( $langsWithCreators as $lang) : ?>
        <li>
          <?= $lang['name'] ?>
        </li>
      <?php endforeach ?>
    </ul>
  </body>
</html>

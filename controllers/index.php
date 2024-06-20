<?php

  $_SESSION['name'] = 'Moinul';

  view("index.view.php", [
    'heading' => 'Home',
  ]);

<?php

  function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</prev>";
    die();
  }

  function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
  }
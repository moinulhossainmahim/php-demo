<?php
    class Database {
    public $connection;

    function __construct()
    {
      $dsn = "mysql:host=localhost;port=3306;dbname=demo;password=Mysql123@;user=root;charset=utf8mb4";

      $this->connection =  new PDO($dsn);
    }

    function query($query)
    {
      $statement = $this->connection->prepare($query);
      $statement->execute();

      return $statement;
    }

  }

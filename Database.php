<?php
    class Database {
    public $connection;

    function __construct($config)
    {
      $dsn = 'mysql:' . http_build_query($config, '', ';');

      $this->connection =  new PDO($dsn, $config['user'], $config['password'], [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
    }

    function query($query, $params = [])
    {
      $statement = $this->connection->prepare($query);
      $statement->execute($params);

      return $statement;
    }

  }

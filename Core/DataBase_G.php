<?php

namespace Core;

use PDO;

class DataBase_G
{
    private static $instance = null;
    public $connection;


    private function __construct($config, $username = 'root', $password = '12345678')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public static function getInstance($config, $username = 'root', $password = '12345678')
    {
        if (self::$instance == null) {
            self::$instance = new DataBase_G($config, $username, $password);
        }

        return self::$instance;
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }
}

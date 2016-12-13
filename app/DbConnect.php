<?php

namespace App;

final class DbConnect
{
    private static $instance;
    private $dbh;

    private function __construct()
    {
        try {
            $this->dbh = new \PDO(
                'mysql:host=localhost;dbname=database',
                'user',
                'password'
            );
        } catch (\PDOException $e) {
            throw new \Exception('Error establishing a database connection!');
        }
    }

    public static function get()
    {
        if (null === self::$instance) {
            self::$instance = new DbConnect();
        }
        return self::$instance->dbh;
    }

    private function __clone() {}
    private function __wakeup() {}
}

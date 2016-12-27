<?php

namespace App\Models;

final class DbConnect
{
    public static $dsn = 'mysql:host=localhost;dbname=DB;charset=utf8';
    public static $user = 'root';
    public static $pass = '';
    public static $opts = [];
    private static $dbh;

    public static function get()
    {
        try {
            if (null === self::$dbh) {
                self::$dbh = new \PDO(self::$dsn, self::$user, self::$pass, self::$opts);
            }
        } catch (\PDOException $e) {
            throw new \Exception('Error establishing a database connection!' . PHP_EOL . $e->getMessage());
        }
        return self::$dbh;
    }

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}
}

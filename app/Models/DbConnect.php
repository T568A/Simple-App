<?php

namespace App\Models;

final class DbConnect
{
    public static $dsn;
    public static $user;
    public static $pass;
    public static $opts;
    private static $dbh;

    public static function get() {
        try {
            if (null === self::$dbh) {
                    self::$dbh = new \PDO(self::$dsn, self::$user, self::$pass);
            }
        } catch (\PDOException $e) {
            throw new \Exception('Error establishing a database connection!');
        }
        return self::$dbh;
    }

    private function __construct() { }
    private function __clone() {}
    private function __wakeup() {}
}

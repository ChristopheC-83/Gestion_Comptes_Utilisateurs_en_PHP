<?php

abstract class Model
{
    
    private static $dbhost = "=?????;";
    private static $dbname = "=?????;";
    private static $dbUser = "=?????;";
    private static $dbUserPassword = "=?????;";
    private static $pdo;
    

    private static function setBdd()
    {
        self::$pdo = new PDO(
            "mysql:host=" . self::$dbhost . ";
            dbname=" . self::$dbname,
            self::$dbUser,
            self::$dbUserPassword
        );
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    protected function getBdd()
    {
        if (self::$pdo === null) {
            self::setBdd();
        }
        return self::$pdo;
    }
}

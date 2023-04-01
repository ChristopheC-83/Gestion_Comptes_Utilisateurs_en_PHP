<?php

abstract class Model
{
    
    private static $dbhost = "89.116.147.103";
    private static $dbname = "u256533777_charte_poseurs";
    private static $dbUser = "u256533777_ixina_arles";
    private static $dbUserPassword = "Bulgarie359";
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

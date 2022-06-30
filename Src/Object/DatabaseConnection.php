<?php

namespace App\Object;
use PDO, PDOException;
class DatabaseConnection
{
    //properties
    public static $connection = null;
    //properties


    //getConnection
    public static function getConnection()
    {
        try {
            static::$connection = new PDO('mysql:host=' . DatabaseConst::DB_HOST . ';dbname=' . DatabaseConst::DB_NAME, DatabaseConst::DB_USER, DatabaseConst::DB_PASS, DatabaseConst::DB_OPTION);
        }catch (PDOException $e) {
            echo 'Problem'.$e->getMessage();
        }
        return static::$connection;
    }

    //getConnection
}
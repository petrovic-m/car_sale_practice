<?php

namespace App\Object;

class DatabaseQuery
{

    //queryExecute()
    public static function queryExecute($query, $params)
    {

        $stmt = DatabaseConnection::getConnection()->prepare($query);

        foreach ($params as $key=>&$value) {
            $stmt->bindParam(":$key", $value);
        }
        $stmt->execute();

        return $stmt;
    }
    //queryExecute()

    //findAll()
    public static function findAll($tableName)
    {
        $stmt = DatabaseConnection::getConnection()->prepare("SELECT * FROM $tableName");

        $stmt->execute();

        return $stmt;
    }
    //findAll()

    //findById()
    public static function findById($tableName, $id)
    {
        $stmt = DatabaseConnection::getConnection()->prepare("SELECT * FROM $tableName WHERE id=$id");

        $stmt->execute();

        return $stmt;
    }
    //findById()

    //htmlSpecCharExe()
    public static function htmlSpecCharExe($params)
    {
        foreach ($params as &$value) {
            return htmlspecialchars($value);
        }
    }
    //htmlSpecCharExe()

    //getAllParams()
    public static function getAllParams($params)
    {
        foreach ($params as $key=>&$value) {
            return $key=$value;
        }
    }
    //getAllParams()

    public static function redirect($location)
    {
        header("Location: $location");
    }

}
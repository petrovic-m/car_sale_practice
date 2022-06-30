<?php

namespace App\Object;
use PDO;

class DatabaseConst
{

    const DB_HOST = 'mysql';
    const DB_NAME = 'vezba';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_OPTION = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];




}
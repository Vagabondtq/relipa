<?php

namespace App\Helper\Database;

use PDO;

class DB
{
    private static $instance = NULL;

    private function __construct()
    {
    }

    private function __clone() {}


    public static function getInstance()
    {
        $info = require __DIR__ . '/../../../config/database.php';

        $cont = $info['connections']['mysql'];

        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host='.$cont['host'].';dbname='.$cont['database'].'', ''.$cont['username'].'', ''.$cont['password'].'', $pdo_options);
        }
        return self::$instance;
    }

}
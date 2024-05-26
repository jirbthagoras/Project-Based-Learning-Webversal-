<?php

namespace webversal\app\App\Database;

class database
{

    private static ?\PDO $connection = null;
    public static function getConnection() {

        require_once __DIR__ . "/../../../config/database.php";

        $config = getDatabaseConfig();

        if(self::$connection == null) {
            self::$connection = new \PDO(
                $config['database']['url'],
                $config['database']['username'],
                $config['database']['password'],
            );
        }

        return self::$connection;

    }

}
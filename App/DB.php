<?php

namespace App;
use \PDO;
class DB 
{
    public PDO $pdo;
    private static $db;
    public function __construct(array $config)
    {   
        $defaultOptions =[
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];


        $this->pdo = new PDO(
            $config['driver'].':host='.$config['host'].
            ';dbname='.$config['database'],
            $config['user'],
            $config['password'],
            $defaultOptions
        );

        self::$db = $this->pdo;
    }
    public static function DB()
    {
        return self::$db;
    }
    
}
<?php

namespace App;
use \PDO;
class DB 
{
    private PDO $pdo;
    private static $db;
    private static $chapters;
    public function __construct(array $config, Router $router)
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

        $stmt = self::db()->prepare('SELECT * FROM `op-manga-chapters` ORDER BY `chapter` DESC');
        $stmt->execute();
        $chapters = $stmt->fetchAll();


        $router->addRouteData('get','/chapters',$chapters);

        foreach($chapters as $chapter)
        {
            $route = '/chapter/'.$chapter['chapter'];
            $router->get($route,[Controller::class,'single']);
            $router->addRouteData('get',$route,$chapter);
        }
  
     
    }
    public static function DB()
    {
        return self::$db;
    }
    
    
}
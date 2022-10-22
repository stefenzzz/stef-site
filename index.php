<?php

declare(strict_types = 1);

require_once realpath('vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


set_exception_handler(function(\Throwable $e){
    
    echo $e->getMessage().'<br>';
    echo $e->getFile().'<br>';
    echo 'Line '.$e->getLine().'<br>';


});


use App\Router;
use App\Controller;
use App\DB;
$router = new Router($_SERVER['REQUEST_METHOD'],$_SERVER['REQUEST_URI']);

$router->get('/',[Controller::class,'index'])
        ->get('/chapters',[Controller::class,'chapters'])
        ->get('/anime',[Controller::class,'anime'])
        ->get('/portfolio',[Controller::class,'portfolio']);

   


(new DB([
    'driver' => 'mysql',
    'host' => $_ENV['DB_HOST'],
    'database' => $_ENV['DB_DATABASE'],
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS']
]));


echo $router->resolve();









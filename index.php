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

$router = new Router($_SERVER['REQUEST_METHOD'],$_SERVER['REQUEST_URI']);

$router->get('/',[Controller::class,'index'])
        ->get('/chapters',[Controller::class,'chapters'])
        ->get('/anime',[Controller::class,'anime'])
        ->get('/portfolio',[Controller::class,'portfolio']);


$dbh = new PDO('mysql:dbname='.$_ENV['DB_DATABASE'].';host='.$_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'],$defaultOptions);
$stmt = $dbh->prepare('SELECT * FROM `op-manga-chapters`');
$stmt->execute();
echo '<pre>';
print_r($stmt->fetchAll());

//echo $router->resolve();









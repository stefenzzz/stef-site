<?php

namespace App;



class Controller
{
    public function index()
    {
        return View::make('index');
    }
    public function chapters()
    {
        $stmt = DB::db()->prepare('SELECT * FROM `op-manga-chapters`');
        $stmt->execute();
        return View::make('chapters',$stmt->fetchAll());
    }
    public function anime()
    {
        return View::make('anime');
    }
    public function portfolio()
    {
        return View::make('portfolio');
    }
}
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
        return View::make('chapters');
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
<?php

namespace App;



class Controller
{

    public function index()
    {
        return View::make('index');
    }
    public function chapters($params = [])
    {
       


     
        return View::make('chapters',$params);
    }
    public function anime()
    {   
       
        return View::make('anime');
    }
    public function portfolio()
    {
        return View::make('portfolio');
    }
    public function single($params = [])
    {
        
        return View::make('single',$params); 
    }


}
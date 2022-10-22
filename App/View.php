<?php
declare(strict_types =1);
namespace App;


class View
{
    public function __construct(
        private string $view,
        private array $params = [])
    {

    }   
    public static function make(string $view, array $params =[]):static
    {
        return new static($view,$params);
    }
    public function render()
    {
        $viewPath = 'Views/'.$this->view.'.php';

        // extract($this->params);

        if(!file_exists($viewPath))
        {
            throw new \Exception($viewPath.' didn`t exists');
        }
        ob_start();
        require 'Views/parts/head.php';
        require $viewPath;
        require 'Views/parts/sidebar.php';
        require 'Views/parts/footer.php';
        return (string) ob_get_clean();

    }
    public function __toString()
    {
        return $this->render();
    }
}
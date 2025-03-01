<?php

namespace src\Controllers;
use src\View\View;

class MainController{
    private $view;

    public function __construct()
    {
        $this->view = new View(dirname(dirname(__DIR__)).'/templates');
    }
    
    public function sayHello(string $name){
        $this->view->renderHtml('main/hello.php', ['name'=>$name]);
    }

    public function main(){
        $articles = [
            'title'=>'Title 1',
            'text'=>'Text 1',
        ];
        $this->view->renderHtml('main/main.php', ['articles'=>$articles]);
    }
}
<?php

namespace src\View;

class View{
    private $path;
    public function __construct(){
        $this->path = str_replace('\\','/',dirname(dirname(__DIR__))).'/templates/';
    }
    public function renderHtml($templateName, $vars = [], $code=200){
        http_response_code($code);
        extract($vars);
        include $this->path.$templateName.'.php';
    }    
}
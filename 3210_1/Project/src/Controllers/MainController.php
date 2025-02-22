<?php

namespace src\Controllers;

class MainController{
    public function sayHello(string $name){
        echo 'Hello, '.$name;
    }

    public function main(){
        echo "Главная страница!";
    }
}
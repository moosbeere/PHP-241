<?php

spl_autoload_register(function(string $className){
    require(dirname(__DIR__).'\\'.$className.'.php');
});

    var_dump($_GET['route']);
    $controller = new src\Controllers\MainController;
    if (isset($_GET['name'])) $controller->sayHello($_GET['name']);
    else $controller->main();

    
    // $user = new \src\Models\Users\User('Ivan');
    // $article = new \src\Models\Articles\Article('title', 'text', $user);
    // echo $article->getAuthor()->getName();




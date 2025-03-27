<?php

use Exceptions\DbException;
use Exceptions\NotFoundException;

try{
    spl_autoload_register(function(string $className){
        require_once dirname(__DIR__).'\\'.$className.'.php';
    });

    
    $findRoute = false;
    
    $route = $_GET['route'] ?? '';
    // var_dump($route);
    $patterns = require 'route.php';
    foreach ($patterns as $pattern=>$controllerAndAction){
        preg_match($pattern, $route, $matches);
        if (!empty($matches)){
            $findRoute = true;
            unset($matches[0]);
            $nameController = $controllerAndAction[0];
            $actionName = $controllerAndAction[1];
            $controller = new $nameController;
            $controller->$actionName(...$matches);
            break;
        }
    }
    
    if (!$findRoute) throw new Exceptions\NotFoundException();

}catch(DbException $e){
    $view = new src\View\View(dirname(__DIR__).'/templates');
    $view->renderHtml('errors/500', ['error'=>$e->getMessage()], 500);
}
catch(NotFoundException $e){
    $view = new src\View\View(dirname(__DIR__).'/templates');
    $view->renderHtml('errors/400', ['error'=>$e->getMessage()], 404);
}


    $user = new src\Models\Users\User('Ivan');
    $article = new src\Models\Articles\Article('title', 'text', $user);

    // var_dump($user);
    // var_dump($article);
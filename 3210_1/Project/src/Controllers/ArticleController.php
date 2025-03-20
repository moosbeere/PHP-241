<?php

namespace src\Controllers;

use ReflectionObject;
use src\View\View;
use src\Models\Articles\Article;

class ArticleController {
    private $view;
    
    public function __construct()
    {
        $this->view = new View(dirname(dirname(__DIR__)).'/templates');
    }

    public function index(){
        $articles = Article::findAll();
        $this->view->renderHtml('main/main', ['articles'=>$articles]);
    }

    public function show(int $id){
        
        $article = Article::getById($id);
        // $reflector = new ReflectionObject($article);
        // $properties = $reflector->getProperties();
        // $propertiesName = [];
        // foreach($properties as $property){
        //     $propertiesName[]=$property->getName();
        // }
        // print_r($propertiesName);


        if ($article == null){
            $this->view->renderHtml('main/error', [], 404);
            return;
        }
        $this->view->renderHtml('article/show', ['article'=>$article]);
    }

    public function edit(int $id){
        $article = Article::getById($id);
        return $this->view->renderHtml('/article/edit', ['article'=>$article]);
    }

    public function update(int $id){
        $article = Article::getById($id);
        $article->setName($_POST['name']);
        $article->setText($_POST['text']);
        $article->save();
        return $this->view->renderHtml('article/show', ['article'=>$article]);
    }
}
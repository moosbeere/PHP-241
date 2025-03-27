<?php

namespace src\Controllers;

use Exceptions\NotFoundException;
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
        if ($article == null){
            throw new NotFoundException();
        }
        $this->view->renderHtml('article/show', ['article'=>$article]);
    }

    public function create(){
        return $this->view->renderHtml('article/create');
    }

    public function store(){
        $article = new Article;
        $article->name = $_POST['name'];
        $article->text = $_POST['text'];
        $article->authorId = 1;
        $article->save();
        return header('Location:http://localhost/student-241/3210_1/Project/www/');
    }

    public function edit(int $id){
        $article = Article::getById($id);
        if ($article == null){
            throw new NotFoundException();
        }
        return $this->view->renderHtml('/article/edit', ['article'=>$article]);
    }

    public function update(int $id){
        $article = Article::getById($id);
        if ($article == null){
            throw new NotFoundException();
        }
        $article->setName($_POST['name']);
        $article->setText($_POST['text']);
        $article->save();
        return $this->view->renderHtml('article/show', ['article'=>$article]);
    }

    public function delete(int $id){
        $article = Article::getById($id);
        if ($article == null){
            throw new NotFoundException();
        }
        $article->delete();
        return header('Location:http://localhost/student-241/3210_1/Project/www/');
    }
}
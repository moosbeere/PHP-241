<?php

namespace src\Controllers;
use src\View\View;
use src\Services\Db;
use src\Models\Articles\Article;

class ArticleController {
    private $view;
    private $db;
    public function __construct()
    {
        $this->view = new View(dirname(dirname(__DIR__)).'/templates');
        $this->db = new Db();
    }

    public function index(){
        $sql = 'SELECT * FROM `articles`';
        $articles = $this->db->query($sql, [], Article::class);
        // var_dump($articles);
        $this->view->renderHtml('main/main', ['articles'=>$articles]);
    }

    public function show(int $id){
        $sql = "SELECT * FROM `articles` WHERE `id`=:id";
        $article = $this->db->query($sql, [':id'=>$id], Article::class);

        if ($article == null){
            $this->view->renderHtml('main/error', [], 404);
            return;
        }

        $this->view->renderHtml('article/show', ['article'=>$article[0]]);
    }
}
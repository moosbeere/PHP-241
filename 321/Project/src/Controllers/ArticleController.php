<?php

namespace src\Controllers;
use src\View\View;
use src\Services\Db;

class ArticleController
{
    private $view;
    private $db;
    public function __construct()
    {
        $this->view = new View;  
        $this->db = new Db; 
    }

    public function index(){
        $sql = 'SELECT * FROM `articles`';
        $articles = $this->db->query($sql);
        // var_dump($articles);
        $this->view->renderHtml('article/index', ['articles'=>$articles]);
    }

    public function show($id){
        $sql = 'SELECT * FROM `articles` WHERE `id`=:id';
        $article = $this->db->query($sql, [':id'=>$id]);
        if ($article == []) 
        {
            $this->view->renderHtml('error/404', [], 404);
            return;
        }
        var_dump($article[0]);
        // $this->view->renderHtml('article/show', ['article'=>$article[0]]);
    }
}
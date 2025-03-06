<?php

namespace src\Controllers;
use src\View\View;
use src\Services\Db;

class ArticleController {
    private $view;
    private $db;
    public function __construct()
    {
        $this->view = new View(dirname(dirname(__DIR__)).'/templates');
        $this->db = new Db();
    }

    public function show(int $id){
        $sql = "SELECT * FROM `articles` WHERE `id`=:id";
        $article = $this->db->query($sql, [':id'=>$id]);

        if ($article == null){
            return;
        }
        $this->view->renderHtml('article/show', ['article'=>$article[0]]);
    }
}
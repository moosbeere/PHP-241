<?php

    class Post{
        private $title;
        private $text;
        private $author;
        public function __construct(string $title, string $text, string $author)
        {
            $this->title = $title;    
            $this->text = $text;    
            $this->author = $author;    
        }
        public function setTitle(string $title){
            $this->title = $title;
        }
        public function setText(string $text){
            $this->title = $text;
        }
        public function setAuthor(string $author){
            $this->title = $author;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getText(){
            return $this->text;
        }
        public function getAuthor(){
            return $this->author;
        }        
    }

    class HomeWork extends Post
    {
        protected $hw;
        public function __construct(string $title, string $text, string $author, string $hw)
        {
            parent::__construct($title, $text, $author);
            $this->hw = $hw;
        }
    }

    $post = new Post('title', 'text', 'author');
    var_dump($post);
    echo '<BR>';
    $hw = new HomeWork('title', 'text', 'author', 'hw1');
    var_dump($hw);
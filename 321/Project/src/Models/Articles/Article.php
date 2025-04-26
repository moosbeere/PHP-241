<?php

namespace src\Models\Articles;
use src\Models\Users\User;

class Article{
        protected $title;
        protected $text;
        protected $author;

        public function __construct(string $title, string $text, $author)
        {
            $this->title = $title;
            $this->text = $text;
            $this->author = $author;
        }
        public function setTitle(string $title){
            $this->title = $title;
        }
        public function setText(string $text){
            $this->text = $text;
        }
        public function setAuthor(User $author){
            $this->author = $author;
        }
        public function getTitle()
        {
            return $this->title;
        }
        public function getText()
        {
            return $this->text;
        }
        public function getAuthor()
        {
            return $this->author;
        }
    }

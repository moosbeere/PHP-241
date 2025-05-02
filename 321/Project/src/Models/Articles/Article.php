<?php

namespace src\Models\Articles;
use src\Models\Users\User;

class Article{
        protected $id;
        protected $title;
        protected $text;
        protected $authorId;
        protected $createdAt;

        public function setTitle(string $title){
            $this->title = $title;
        }
        public function setText(string $text){
            $this->text = $text;
        }
        public function setAuthor(User $author){
            $this->authorId = $author;
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
            return $this->authorId;
        }
    }

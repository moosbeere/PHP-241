<?php

namespace src\Models\Articles;
use src\Models\Users\User;

class Article{
    private $id;
    private $name;
    private $text;
    private $authorId;
    private $createdAt;

    public function __set($name, $value)
    {
        $camelCaseName = $this->underscoreToCamelcase($name);
        $this->$camelCaseName = $value;
    }

    private function underscoreToCamelcase(string $name): string
    {
        return lcfirst(str_replace('_','',ucwords($name, '_')));
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getText(){
        return $this->text;
    }
    public function getAuthorId(): User
    {
        return $this->authorId;
    }

}

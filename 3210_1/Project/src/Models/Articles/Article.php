<?php

namespace src\Models\Articles;

use src\Models\ActiveRecordEntity;
use src\Models\Users\User;

class Article extends ActiveRecordEntity{
    protected $name;
    protected $text;
    protected $authorId;
    protected $createdAt;
    
    public function getName(){
        return $this->name;
    }
    public function getText(){
        return $this->text;
    }
    public function getAuthorId(): User
    {
        return User::getById($this->authorId);
    }
    protected static function getTableName(): string
    {
        return 'articles';
    }

}

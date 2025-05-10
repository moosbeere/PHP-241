<?php

namespace src\Models\Users;

use src\Models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
    protected $nickname;
    protected $email;
    protected $isConfirmed;
    protected $role;
    protected $passwordHash;
    protected $authToken;
    protected $createdAt;

    
    protected static function getTableName(){
        return 'users';
    }

    public function setName(string $nickname){
        $this->nickname = $nickname;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }
    
}
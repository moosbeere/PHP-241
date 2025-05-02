<?php

namespace src\Models\Users;

class User{
    protected $id;
    protected $nickname;
    protected $email;
    protected $isConfirmed;
    protected $role;
    protected $passwordHash;
    protected $authToken;
    protected $createdAt;

    public function setName(string $nickname){
        $this->nickname = $nickname;
    }
    public function getName(): string
    {
        return $this->nickname;
    }
}
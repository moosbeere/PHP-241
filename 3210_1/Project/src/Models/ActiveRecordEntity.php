<?php

    namespace src\Models;
    use src\Models\Articles\Article;
    use src\Services\Db;

    abstract class ActiveRecordEntity{
        
        protected $id;
        public function getId(){
            return $this->id;
        }

        public function __set($name, $value)
        {
            $camelCaseName = $this->underscoreToCamelcase($name);
            $this->$camelCaseName = $value;
        }
    
        private function underscoreToCamelcase(string $name): string
        {
            return lcfirst(str_replace('_','',ucwords($name, '_')));
        }
        
        public static function findAll(): ?array
        {
            $db = Db::getInstance();
            $sql = 'SELECT * FROM `'.static::getTableName().'`';
            return $db->query($sql, [], static::class);
        }
    
        public static function getById(int $id): ?static
        {
            $db = Db::getInstance();
            $sql = 'SELECT * FROM `'.static::getTableName().'` WHERE `id`=:id';
            $result = $db->query($sql, [':id'=>$id], static::class);
            return $result ? $result[0] : null;
        }

        public function save()
    {
        if ($this->getId()) $this->update();
        else $this->insert();
    }

    private function update(){
        echo 'update';
    }

    private function insert(){
        echo 'insert'; 
    }
        abstract protected static function getTableName(): string;
    }

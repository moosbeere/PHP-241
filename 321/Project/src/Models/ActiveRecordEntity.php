<?php

namespace src\Models;
use src\Services\Db;

abstract class ActiveRecordEntity
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function __set($column, $value){
        $property = $this->upperToCamelCase($column);
        $this->$property = $value;
    }

    private function upperToCamelCase($column){
        return lcfirst(str_replace('_', '', ucwords($column, '_')));
    }

    public static function findAll() :array
    {
        $db = Db::getInstance();
        $sql = 'SELECT * FROM `'.static::getTableName().'`';
        return $db->query($sql, [], static::class);
    }

    public static function getById(int $id)
    {
        $db = Db::getInstance();
        $sql = 'SELECT * FROM `'.static::getTableName().'` WHERE `id`=:id';
        $entities = $db->query($sql, [':id'=>$id], static::class);
        return $entities ? $entities[0] : null;
    }

    protected function MappedPropertiesToDB(){
        $reflector = new \ReflectionObject($this);
        $properties=[];
        foreach($reflector->getProperties() as $property){
            $propertyName = $property->getName();
            $propertyNameDb = $this->camelcaseToUpper($propertyName);
            $properties[$propertyNameDb] = $this->$propertyName;
        }
        return $properties;
    }

    private function camelcaseToUpper($property){
        return strtolower(preg_replace('/([A-Z])/','_$1', $property));
    }

    public function save(){
        $propertisDB = $this->MappedPropertiesToDB();
        if($this->id) $this->update($propertisDB);
        else $this->insert($propertisDB);
    }

    protected function update($propertisDB){
        $db = DB::getInstance();
        $columns2Params = [];
        $params2Values = [];
        foreach($propertisDB as $key=>$value){
            $param = ':'.$key;
            $column = '`'.$key.'`';
            $columns2Params[] = $column.'='.$param;
            $params2Values[$param] = $value;
        }
        $sql = 'UPDATE `'.static::getTableName().'` SET '.implode(',', $columns2Params).' WHERE `id`=:id';
        $db->query($sql, $params2Values, static::class);
    }

    protected function insert($propertisDB){
        $propertisDB = array_filter($propertisDB);
        $db = Db::getInstance();
        $columns = [];
        $params = [];
        $params2Values = [];
        foreach($propertisDB as $key=>$value){
            $columns[] = '`'.$key.'`';
            $param = ':'.$key;
            $params[] = $param;
            $params2Values[$param] = $value;
        }
        $sql = 'INSERT INTO `'.static::getTableName().'` ('.implode(',', $columns).') VALUES ('.implode(',', $params).')';
        $db->query($sql, $params2Values, static::class);
    }

    public function delete(){
        $db = Db::getInstance();
        $sql = 'DELETE FROM `'.static::getTableName().'` WHERE `id`=:id';
        $db->query($sql, [':id'=>$this->id], static::class);
    }

    protected abstract static function getTableName();
}
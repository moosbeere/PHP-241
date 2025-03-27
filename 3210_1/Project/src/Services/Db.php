<?php

namespace src\Services;

use Exceptions\DbException;

    class Db{
        private $pdo;
        private static $instance;

        private function __construct()
        {
            $dbOptions = require('settings.php');

            try{
                            $this->pdo = new \PDO(
                'mysql:host='.$dbOptions['host'].';dbname='.$dbOptions['dbname'],
                $dbOptions['user'],
                $dbOptions['password'],
            );
            }catch(\PDOException $e){
                throw new DbException('Ошибка при подключении к базе данных '.$e->getMessage());
            }

        }

        public function query($sql, $params = [], string $className='stdClass') :?array
        {
            $sth = $this->pdo->prepare($sql); 
            $result = $sth->execute($params); 
            if ($result == false){
                return null;
            }
            return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
        }

        public static function getInstance(){
            if (static::$instance === null){
                static::$instance = new self();
            }
            return static::$instance;
        }
    }

 
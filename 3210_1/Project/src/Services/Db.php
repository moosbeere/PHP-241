<?php

    namespace src\Services;

    class Db{
        private $pdo;

        public function __construct()
        {
            $dbOptions = require('settings.php');

            $this->pdo = new \PDO(
                'mysql:host='.$dbOptions['host'].';dbname='.$dbOptions['dbname'],
                $dbOptions['user'],
                $dbOptions['password'],
            );
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
    }

 
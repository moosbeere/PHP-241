<?php

    // function sum($a, $b){
    //     return $a+$b;
    // }

    // $sumReflector = new ReflectionFunction('sum');
    // $file = $sumReflector->getFileName();

    // echo $sumReflector->getStartLine().'<BR>';
    // echo $sumReflector->getEndLine().'<BR>';
    // try{
    //     //connect to DB
    //     throw $exception = new Exception('Сообщение об ошибке', 123);
    // }catch(Exception $e){
    //     echo 'было поймано исключение "'.$e->getMessage().'", с кодом '.$e->getCode();
    // }


    function func1(){
        try{
            func2();
        }catch(Exception $e){
            echo 'Поймано исключение "'.$e->getMessage().'"';
        }
        echo 'А теперь выполнится этот код';
    }
    function func2(){
        func3();
    }
    function func3(){
        throw new Exception('Ошибка подключения к БД');
        echo "Этот код выполниться только после обработки исключения";
    }

    func1();
    

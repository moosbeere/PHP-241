<?php

    function sum($a, $b){
        return $a+$b;
    }

    $sumReflector = new ReflectionFunction('sum');
    $file = $sumReflector->getFileName();

    echo $sumReflector->getStartLine().'<BR>';
    echo $sumReflector->getEndLine().'<BR>';


<?php

    function sum($a, $b){
        return $a + $b;
    }

    $reflector = new ReflectionFunction('sum');
    // echo $reflector->getFileName();
    echo $reflector->getStartLine().'<BR>';
    echo $reflector->getEndLine().'<BR>';
    // var_dump($reflector);

<?php
    $a = 4;
    $b = 3;

    $s = &$a;
    // echo "a = $a<BR>";
    // echo "&s = $s<BR>";

    // $s = 7;
    // echo "a = $a<BR>";

    // $a = 6;
    // $z = 'a';

    // echo $$z;//$a


    $a = 4; $b = 5; $c = 9;

    list($a, $b, $c) = F1($a, $b, $c);
    echo "a = $a<BR>";
    echo "b = $b<BR>";
    echo "c = $c<BR>";

    function F1($d, $e, $j){
        $d++; $e--; $j +=$d;
        return array($d, $e, $j); 
    }

    function F2(&$d, &$e, &$j){
        $d++; $e--; $j +=$d;
    }

    F2($a, $b, $c);
    echo "a = $a<BR>";
    echo "b = $b<BR>";
    echo "c = $c<BR>";


    $func = 'sin';
    $y = 30;
    $x = $y/180*pi();
    $z = $func($x);
    echo $z.'<BR>';

    print ex_val($func,$x)."<BR>";  //1.5
    print ex_val('sin',$x)."<BR>";  //1.5

    function ex_val($f,$t)
    {  
        $x = $f($t)+1;
        return $x;
    }


    $f ='sin';

    $x=30;
 
    eval("\$z=$f($x/180*pi());");
    echo $z;
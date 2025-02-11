<?php
    define("pi",  3.14);
    $R = 2;
    $L = 2 * pi * $R;
    
    $a = 2;
    $b = "4";

    var_dump($a !== $b);
    echo '<BR>';



    $c = $b + $a;
    echo $c.'</br>';
    $c = (string)$a.$b;
    echo gettype($a).'</br>';
    echo $c.'</br>';

    $s = 3.2;
    echo $s.'</br>';

    echo 'floor '.floor($s).'</br>';
    echo "floor floor($s) <BR>";

    echo 'ceil '.ceil($s).'</br>';
    echo 'round '.round($s).'</br>';

  $a=9999.0000000;

  print "a=$a<BR>";//a=0.666666666667

  print strlen($a)."<BR>"; //14 знаков

  $a=sprintf("%.2f",$a);

  print "a=$a<BR>";//a=0.67


    $a = 5; $b = 2;
    $L = $a || $b; //$L=true
    $L1 = $a and $b; //$L1=5

    echo $a++.'<BR>';
    echo ++$a.'<BR>';
    
?>
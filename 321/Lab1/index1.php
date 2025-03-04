<?php
    $a = 5;
    $_m = 'f';
    $D = 9;

    $a = 2;
    $b = '2';

    // echo ($a + $b);

    $f = (string)$D;
    $m = (int)$_m;
    // echo gettype($f);
    // print_r($D);
    // var_dump($m);

    define("pi", 3.1415926);
    // echo pi;

    $c = 3.7;
    $e = 3.4;
    echo "c = $c<BR>";
    echo "e = $e<BR>";
    echo 'floor: $c = '.floor($c).', $e = '.floor($e).'<BR>';
    echo 'round: $c = '.round($c).', $e = '.round($e).'<BR>';
    echo 'ceil: $c = '.ceil($c).', $e = '.ceil($e).'<BR>';

    $a = 2/3;

    echo strlen($a).'<BR>';
    $a = sprintf("%.2f", $a);
    echo "a = $a<BR>";


echo sprintf('%02.0f', 1).'<BR>';
echo sprintf('%06.4f', 1).'<BR>';

print '2<sup>10</sup>='.pow(2,10);
echo '<BR>';

   $Fam = 'Петров';

   $Imja = 'Сергей';

   $Otch = 'Юрьевич';

   $den = '08';

   $mes = '11';

   $god = '1993';
    echo $Fam.' '.$Imja.' '.$Otch.' родился '.$den.'.'.$mes.'.'.$god.'<BR>';
    echo "$Fam $Imja $Otch родился $den.$mes.$god<BR>";

   $a = 'Петер';

   $b = 'бург';

   echo $a.$b.'<BR>';

   $a = 2;
   $b = '2';
   echo ($a == $b).'<BR>';
//    var_dump($a === $b);

$a = '2';

$b = 3.1;

// echo $c = $a + $b.'<BR>';

// echo $str = $a.$b; 
$a = 2;

$b = '2';

// $c = $b - $a;

// print_r($L = $b > $a);
$a =0; $b = 2;

print_r($L = $a && $b); 
echo '<BR>';

// print_r($L1 = $a and $b); 

$f = 3;
echo $f--;
echo '<BR>';
echo --$f;




?>
    


    


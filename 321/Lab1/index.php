<?php

    $a = 2;
    $a.=' байта';
    echo "a = $a<BR>";
    $c = 1;

    // if($c>2) goto M1;

    //   $d = 7;

    //   $a = $d + 2;

    //   goto M2;

    // M1: $a = 3;

    // M2: print "<BR>a=$a";

//     if($c>2) goto M1;

//     $d = 7;

//     goto M2;

//     $a = $d + 2; //Этот оператор никогда не выполнится    

// M1: $a = 3;

// M2: print "a=$a";


$a = 7;
$b = 5;

if ($a < $b) $min = $a;
else $min = $b;

$min=($a < $b) ? $a : $b;
echo "min = $min";

// $vozrast = 28;
// ($vozrast > 18) ? print 'совершеннолетний' : print 'несовершеннолетний';

// if ($vozrast > 18) print 'совершеннолетний';
// else print 'несовершеннолетний';


  /* Пусть y=f(x)

      если x < 0,      то у = -x;

      если 0 ≤ x < 2, то у = x<sup>2

      если 2 ≤ x < 5, то у = x + 2

      если      x ≥ 5, то у = 7 

*/

    $x = 5.5;
    if ($x < 0) {   
        $y = -$x;
    }
    elseif ($x >= 0 && $x < 2) $y = pow($x, 2);
    elseif ($x >= 2 && $x < 5) $y = $x + 2;
    else $y = 7;

    echo "<BR>y = $y<BR>";

    $a=1; $b=3; $c=4;
    switch($a + $b)
    {
        case 7: 
            $d = 2 * $b;
            print "Случай \$d=$d<BR>";
            break;
        case $c:
            $d=$a+$c;
            print "Случай \$d=$d<BR>";
            break;
        case $b:
            $d=$b;
            print "Случай \$d=$d<BR>";
            break;
        default: echo "Переменная \$d не определена!";
    }

    if (($a + $b) == 7)
        echo 'Случай $d = '.(2*$b);
    elseif(($a + $b) == $c)
        echo 'Случай $d = '.($a + $c);
    elseif(($a + $b) == $b)
        echo 'Случай $d = '.$b;
    else echo "Переменная \$d не определена!";

    $i = 2; $S = 0;
    for ($i = 2; $i < 6; $i++) $S++;
    echo "<BR>\$S = $S";

    $i = 0; $s = 0;
    while($i < 5){
        $i++;
        $s +=$i;
    }
    echo "<BR>\$s = $s";

    $i = 0; $s = 0;
    do{
        $i++;
        $s +=$i;
    } while($i < 5);
    echo "<BR>\$s = $s";

    $x=2;$y=1.5;

    $z = $x/$y;

while (abs($z -$y) > 0.001)

{    
    $y =($z + $y)/2;

     $z = $x/$y;

}

// print "y=$y<BR>"; //y=1.41421568627

 

$x=2;$y=1.5;

do

{    
     $z = $x/$y;

     $y =($z + $y)/2;   

}

while (abs($z -$y) > 0.001);

// print "y=$y<BR>"; //y=1.41421568627




$K = 0;

     $A = Array(2,7,12, 1,11,1, 3,2,4, 9);

     for($i=0; $i < 10; $i++)

     { 
        $A[$i]--;

       if(!$A[$i]) break;

       $K++;

     }

     print "K = $K<BR>";//$K=3

     $K = 0;

     $A = Array(2,7,12, 1,7,5, 1,2,1, 9);

     for($i=0; $i <10; $i++)

     { 
        $A[$i]--;

       if(!$A[$i]) continue;

       $K++;

     }

     print "K = $K<BR>";//$K=7
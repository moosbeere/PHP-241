<?php
    $c = 7;
    $b = 6;
    // $a = &$c;


    function f(&$s){
        ++$s;
    }
    echo $b."<BR>";
    f($b);
    echo $b."<BR>";


    $a = 10;
    $z = 'a';

    echo $$z.'<BR>';
    // $.$z = $a


    $c=1; $a=5; $b=2;

list($a,$b,$c)=F1($a,$b,$c);

print "a=$a,b=$b, c=$c<BR>";


function F1($d, $e, $f){
    $d = $d +1; $e--; $f++;
    return array($d, $e, $f);
}

$a=50;$b=20; $c=10;
function F2(&$d, &$e, &$f){
    $d++; $e--; $f++;
}
F2($a,$b,$c);

print "a=$a,b=$b, c=$c<BR>";

$func ='sin';

  $y = 30;

  $x = $y/180*pi();

//   $z = $func($x);

//   print"$func($y<SUP>o</sup>)= $z<BR>"; 

  eval("\$z = $func($x);");
//   echo $z;



echo '<a href="index.php?FIO=olga&x=20">Link</a>';
if(!empty($_GET)){
    foreach($_GET as $z=>$value){
        eval("\$$z='$value';"); //$FIO='olga';
    }
    echo "Имя = $FIO, оклад = $value";
    
}




  

<?php
    $array = [1,2,3,4,5];
    $arr[0] = 'summer';
    $arr[1] = 'winter';

    $arr2 = array(9,8,7,6);

    $arr3 = [1.2, 3, 'happy', true, (2+2)];

    // $arr4['сезон'] = 'весна';
    // $arr4['месяц'] = 'март';
    // $arr4['число'] = 11;

    // for ($i = 0; $i < count($arr4); $i++){
    //     echo $arr4[$i].', ';
    // }
    // echo '<BR>';

    $arr4['сезон'] = 'весна';
    $arr4['месяц'] = 'март';
    $arr4['число'] = 11;

    $cveta=array(
        "red"=>"Красный",
        "yellow"=>"Жёлтый",
        "green"=>"Зеленый",
        "blue"=>"Синий",
        "maroon"=>"Каштановый"
       ); 
       
    $cveta=[
        "red"=>"Красный",
        "yellow"=>"Жёлтый",
        "green"=>"Зеленый",
        "blue"=>"Синий",
        "maroon"=>"Каштановый"
    ];

    // foreach($array as $key=>$elem){
    //     echo "$key => $elem <BR>";
    // }

    $a = array(1,2);

    $b = array(1,24);

    // var_dump($b != $a);

 $Arr = array('a'=> 'alfa','b'=> 'beta','c'=> 'gamma');

  $a1 = array_shift($Arr);

  print_r ($Arr); //print_r - функция для отладочной печати

  print "\$a1=$a1<BR>";



  $arr5 = [
    [1,2,3],
    [4,5,6,7],
    [6,7,8,9],
  ];

  foreach($arr5 as $key=>$arr){
    echo "$key => ";
    foreach($arr as $elem){
        echo "$elem, ";
    }
    echo '<BR>';
  }


  echo $arr5[0][2].'<BR>';

  usort($arr5, 'compare1');

  foreach($arr5 as $row)
 
  {  foreach ($row as $el)
 
     { print "$el ";
 
     }
 
     print '<BR>';
 
  }
 
  function compare1($x,$y) 
  {                        
 
     if($x[1] == $y[1]) return 0;
 
     elseif($x[1] > $y[1]) return 0; 
 
     else return 1;
 
   }

   $x = 10;
   $a = 5;
   function f($x){
    global $a;
    $a = 19;
    $result = pow($x, 2);
    return $result;
   }
   $res = f(4);
echo "$a<BR>";
echo "$res<BR>";



$N1 = _fact(5);

$k = 5;

$N2 = factRec($k);

  //Вычисление факториала с помощью цикла

function _fact($n)

{   
    $k=1;

    for($i = 2;$i <= $n; $i++) $k *= $i;

    return $k;

}

//Вычисление факториала с помощью рекурсивной функции

function factRec($n)
{  
    if($n < 2)return 1;
    else return $n*factRec($n-1);
}

function spisok()

{   
    $v = 4;

    return array ('Петрова', 'Маша',  $v );

}

list ($Fam, $Imja, $vozrast) = spisok();

// Продолжение - Вызов функции с переменным числом параметров 


    


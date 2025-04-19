<?php
    $a = 6;
    $b = '6';

    var_dump($a == $b);
    // echo ($a+$b);
    echo '<BR>';
    echo "$a+$b=".($a+$b).'<BR>';
    // echo '$a+$b='.($a+$b).'<BR>';

    $v = 5;
    echo $v--.'<BR>';
    echo --$v.'<BR>';

    // echo $a+=4; // $a = $a +4;

    $a = 5;
    $b = 4;

    // echo ($a > $b) ? 'true' : 'false';
    // if(true)  echo 'lol';

    // if(true){
    //     echo 'lol';
    //     echo 'lol';
    //     echo 'lol';
    //     echo 'lol';
    // }elseif
    // else;

    for ($i = 0; $i < 7; $i++){
        if ($i == 3) continue;
        echo 'baracadabra';
        if($i == 4) break;
    }




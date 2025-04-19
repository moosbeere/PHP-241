<?php
    // $user = new User('Ivan');
    // $article = new Article('title', 'text', $user);
    // echo $article->getAuthor()->getName();

$solve = 'X + 3 = 7';
$elem = explode(' ', $solve);
if ($elem[0] == 'X') echo calc1($elem); else echo calc2($elem);

function calc1($elem){
    switch($elem[1]){
        case('-'): $x = ($elem[2]+$elem[4]);break;
        case('+'): $x = ($elem[4]+$elem[2]);break;
        case('*'): $x = ($elem[4]/$elem[2]);break;
        case('/'): $x = ($elem[4]*$elem[2]);break;
        default: $x = 'No valid exprassion';
    }
    return $x;
}
function calc2($elem){
    switch($elem[1]){
        case('-'): $x = ($elem[0]-$elem[4]);break;
        case('+'): $x = ($elem[4]+$elem[0]);break;
        case('*'): $x = ($elem[4]/$elem[0]);break;
        case('/'): $x = ($elem[0]/$elem[4]);break;
        default: $x = 'No valid exprassion';
    }
    return $x;
}


<?php
// $str = 'Ivanova Elena Ivanovna';
// $a = 'Ivanova E.I.';
// $str_ru = 'Иванова Елена Ивановна';

// $pattern = '/([A-Z][a-z]+)\s([A-Z])[a-z]+\s([A-Z])[a-z]+/';
// $pattern_ru = '/([А-ЯЁ][а-яё]+)\s([А-ЯЁ])[а-яё]+\s([А-ЯЁ])[а-яё]+/u';
// echo preg_replace($pattern_ru, '!', $str_ru);
// preg_match($pattern, $str, $matches);
// // print_r($matches);
// echo "<BR>$matches[1] $matches[2].$matches[3].";
// echo 'aAb<BR>';
// echo preg_replace('#A#', '!', 'aAb'); //выведет 'a!b'
// echo '<BR>';
// // echo preg_replace('#A#i', '!', 'aAb'); //выведет '!!b'
// echo 'xax xsx x&x x-x xaax<BR>';
// echo '#x.x#<BR>';
// echo preg_replace('#x.x#', '!', 'xax xsx x&x x x xaax');

// $str = 'xx xax xaax xaaax xbx';
// echo "<BR>$str<BR>";
// echo preg_replace('#xa?x#', '!', $str);

$str = '\\ \\ \\\\';
$pattern = '/\\\\/';
echo $str."<BR>";
echo $pattern.'<BR>';
echo preg_replace($pattern, '!', $str);
echo '<BR>';
// echo preg_replace('#[а-яА-ЯЁё]яя#u', '!', 'аяя ёяя 2яя');


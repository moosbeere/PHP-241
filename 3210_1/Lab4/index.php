
<?php

    // $a = 'Здравствуйте, Петрова Мария Ивановна! Как ваши дела?';
    // $reg = '/\b[А-ЯЕЁ][а-яеё]+\s([А-ЯЕЁ][а-яеё]+)\s[А-ЯЕЁ][а-яеё]+\b/u';
    // preg_match($reg, $a, $matches);
    // // var_dump($matches);
    // $name = $matches[1];
    // // echo '<BR>'.$name;



    // // echo preg_replace('~x(a-b)+x~', '!', 'xa-bx xababx xaabbx');
    // echo '\\ \\ \\\\<BR>';
    // // echo '[abc]xx<BR>';
    // echo preg_replace('#\\\\#', '!', '\\ \\ \\\\'); 
    // echo '<BR>';
    // echo preg_replace('#[abc^]xx#', '!', 'axx bxx cxx ^xx');
    // echo '<BR>';
    // // echo preg_replace('#xa{1,2}x#', '!', 'xx xax xaax xaaax');
    // echo preg_replace('#a|b+|c#', '!', 'bbbb');

    // echo preg_match('#^[a-zA-Z-.]+@[a-z]+(\.[a-z]{2,3})+$#', 'my-mail@mail.ru.ru', $matches);
    // var_dump($matches);
    // echo 'ababx abe<BR>';
    // echo preg_replace('#(?:ab)+([a-z])#', '!$1!', 'ababx abe');

    echo preg_replace('#(?<=x)aaa#', '!', 'xaaa baaa'); 
    echo '<BR>';
    echo preg_replace('#(?<!x)aaa#', '!', 'xaaa baaa');


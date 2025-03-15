<?php
    // echo file_get_contents('../text.txt');
    // echo file_get_contents('D:/XAMPP/htdocs/www/File/folder/text.txt');
    // var_dump($_SERVER);
    // echo __FILE__.'<BR>';
    // echo __DIR__.'<BR>';

    // file_put_contents('text.txt', "1 2 3 4\r\n5");
    // echo file_get_contents('text.txt');
    // rename('text.txt','try.txt');

    // copy('try.txt', '../text.txt');
    // unlink('../text.txt');
    // var_dump(file_exists('../text.txt'));
    // echo '<BR>';
    // echo filesize('try.txt');

    $arr = [1,2,3,4,5];

        // file_put_contents('copy2.txt', implode(PHP_EOL, $arr));

        // echo filesize('copy2.txt');

        $arr = file('copy2.txt', FILE_IGNORE_NEW_LINES);

        // var_dump($arr);

$a = 2; $b = 5;
print "$a<sup>$b</sup> = $c <BR>";
include('a_b_req.txt');
print "$a<sup>$b</sup> = $c <BR>";



<?php
    // echo file_get_contents('/1/text.txt');
    // var_dump($_SERVER);
    // require('/1/text.txt');

    // echo __FILE__.'<BR>';
    // echo __DIR__.'<BR>';

    // file_put_contents('1/text2.txt', '1 2 3 4');

    // $text = file_get_contents('1/text.txt');
    // echo $text;
    // file_put_contents('1/text.txt', $text.'!');


    // rename('form.php', 'form1.php');
    // copy('eval.php', 'copy.php');
    // unlink('eval.php');

    // var_dump(file_exists('1/text3.txt'));
    // echo filesize('1/text2.txt');

    if (file_exists('1/text.txt')){
        $text = file_get_contents('1/text.txt');
        $arr = explode("\n", $text);// explode(PHP_EOL, $text)
        print_r($arr);
        echo '<BR>';
    }

    if (file_exists('1/text.txt')){
        $text = file('1/text.txt', FILE_IGNORE_NEW_LINES);//array(6) { [0]=> string(1) "1" [1]=> string(1) "2" [2]=> string(1) "2" [3]=> string(1) "3" [4]=> string(1) "4" [5]=> string(1) "5" }
        // $text = file('1/text.txt');// array(6) { [0]=> string(3) "1 " [1]=> string(3) "2 " [2]=> string(3) "2 " [3]=> string(3) "3 " [4]=> string(3) "4 " [5]=> string(1) "5" }
        var_dump($text);
    }

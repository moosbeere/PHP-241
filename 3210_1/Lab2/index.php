<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a class="" href=""><?= "Hello";?></a>
    <input type="date" name="" id="">
    <?php $time = date("Y");?>
    <p>time = <?$time?></p>
</body>
</html>

<?php
function factRec($n)

{   if($n < 2)return 1;

    else return $n*factRec($n-1);

}
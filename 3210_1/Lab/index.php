<?php

    $mysqli = mysqli_connect('localhost', 'root', '','try');
    // var_dump($mysqli);
    $sql = "SELECT * FROM `new`";
    $res = mysqli_query($mysqli, $sql);
    var_dump(mysqli_fetch_row($res));

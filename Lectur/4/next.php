<?php
    $headers = get_headers('https://en.wikipedia.org/wiki/HTTP');
    echo "<textarea>";
        print_r($headers); 
    echo "</textarea>";

    

    
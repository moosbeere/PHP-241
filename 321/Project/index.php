<?php
    $user = new User('Ivan');
    $article = new Article('title', 'text', $user);
    echo $article->getAuthor()->getName();




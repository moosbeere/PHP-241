<?php

    return [
        "~article/(\d+)~" => [src\Controllers\ArticleController::class, 'show'],
        "~^$~" => [src\Controllers\ArticleController::class, 'index'],
        "~^hello/(.*)$~" =>[src\Controllers\MainController::class, 'sayHello'],
    ];
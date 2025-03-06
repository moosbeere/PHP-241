<?php

    return [
        "~article/(\d+)~" => [src\Controllers\ArticleController::class, 'show'],
        "~^$~" => [src\Controllers\MainController::class, 'main'],
        "~^hello/(.*)$~" =>[src\Controllers\MainController::class, 'sayHello'],
    ];
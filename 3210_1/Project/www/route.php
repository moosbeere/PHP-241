<?php

    return [

        "~article$~" => [src\Controllers\ArticleController::class, 'store'],
        "~article/(\d+)$~" => [src\Controllers\ArticleController::class, 'show'],
        "~article/create$~" => [src\Controllers\ArticleController::class, 'create'],
        "~article/(\d+)/edit~" => [src\Controllers\ArticleController::class, 'edit'],
        "~article/(\d+)/update~" => [src\Controllers\ArticleController::class, 'update'],
        "~article/(\d+)/delete~" => [src\Controllers\ArticleController::class, 'delete'],
        "~^$~" => [src\Controllers\ArticleController::class, 'index'],
        "~^hello/(.*)$~" =>[src\Controllers\MainController::class, 'sayHello'],
    ];
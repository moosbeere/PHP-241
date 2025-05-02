<?php

return [
    // '~^$~'=>[src\Controllers\MainController::class, 'main'],
    '~^$~'=>[src\Controllers\ArticleController::class, 'index'],
    '~article/(\d+)~'=>[src\Controllers\ArticleController::class, 'show'],
    '~^hello/(.+)$~'=>[src\Controllers\MainController::class,'sayHello'],
];
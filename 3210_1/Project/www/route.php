<?php

    return [
        "~^$~" => [src\Controllers\MainController::class, 'main'],
        "~^hello/(.*)$~" =>[src\Controllers\MainController::class, 'sayHello'],
    ];
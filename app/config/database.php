<?php

return [
    'local' => [
        'engine'   => 'mysql',
        'host'     => $_ENV['DB_HOST'],
        'name'     =>
        $_ENV['DB_NAME'],
        'user'     =>
        $_ENV['DB_USER'],
        'password' =>
        $_ENV['DB_PASS'],
        'charset'  => 'utf8mb4',
        'options'  => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
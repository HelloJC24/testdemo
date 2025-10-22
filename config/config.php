<?php

return [
    'database' => [
        'host' => 'localhost',
        'port' => 3306,
        'database' => 'demo',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8mb4'
    ],
    'jwt' => [
        'secret' => '7666dbba29fc7d526410df5cb60434263eec84d9c669c98c66faf74937a86556',
        'algorithm' => 'HS256',
        'expiration' => 3600
    ],
    'encryption' => [
        'key' => 'e148a0655dc9251942da4f846a19f76884679953c5fcedc64a14cc585b6b6a6f'
    ],
    'api' => [
        'secret_key' => 'b1578243268aecbf67add64576e98832',
        'base_url' => 'http://localhost:8000/api',
        'version' => 'v1'
    ],
    'rate_limit' => [
        'enabled' => true,
        'requests_per_minute' => 60,
        'storage' => 'file'
    ],
    'cors' => [
        'origins' => ['*'],
        'methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],
        'headers' => ['Content-Type', 'Authorization', 'X-API-Key']
    ]
];
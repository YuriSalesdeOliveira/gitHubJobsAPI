<?php

return [
    'site' => [
        'base' => 'http://localhost/gitHubJobsAPI'
    ],
    'database' => [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'dbname' => 'git_hub_jobs',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ]
    ]
];
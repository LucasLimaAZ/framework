<?php

$producao = false;

if(!$producao){

    return [
        'database' => [
            'name' => 'sistemajf',
            'username' => 'root',
            'password' => 'root',
            'connection' => 'mysql:host=127.0.0.1',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ];

}else{

    return [
        'database' => [
            'name' => 'sistemajf',
            'username' => 'sistemajf',
            'password' => 'pass',
            'connection' => 'mysql:host=127.0.0.1',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ];

}
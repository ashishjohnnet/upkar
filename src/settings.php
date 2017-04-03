<?php

$_SERVER['SERVER_ADDR'] === '127.0.0.1' ? $env = 'dev' : $env = 'prod';

return [
    'settings' => [
        'addContentLengthHeader' => false,
        'displayErrorDetails' => $env === 'dev',
        'pathToCache' => $env === 'dev' ? false : '../var/cache',
    ]
];

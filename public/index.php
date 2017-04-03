<?php

require '../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'addContentLengthHeader' => false,
        'displayErrorDetails' => true,
        'pathToCache' => false,
        //'pathToCache' => '../var/cache',
    ]
]);

require '../src/dependencies.php';
require '../src/routes.php';

$app->run();

<?php

$container = $app->getContainer();
$settings = $container->get('settings');

$container['view'] = function ($container) use ($settings) {
    $view = new \Slim\Views\Twig('../resources/views', [
        'cache' => $settings['pathToCache']
    ]);

    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

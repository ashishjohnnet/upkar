<?php

$app->get('/[{page}]', function($request, $response, $args) {
    if (!isset($args['page'])) $page = 'home';
    else $page = $args['page'];

    return $this->view->render($response, $page.'.html.twig');
});

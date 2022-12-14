<?php

use Slim\App;
use Slim\Http\Response;

/**
 * @var App $app
 */

$app->get('/', function(Response $response) {
    $body = [
        'message' => 'hello world'
    ];

    return $response->withJson($body);
});

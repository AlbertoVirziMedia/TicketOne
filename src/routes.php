<?php

/*use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {

    return $response->withJson($args['name']);
});*/

    $app->group('/api', function(\Slim\App $app) {
      $app->get('/events', \EventsController::class . ':index');
    });

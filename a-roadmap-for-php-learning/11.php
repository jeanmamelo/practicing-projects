<?php

// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;
// use Slim\Factory\AppFactory;

// require __DIR__ . '/../vendor/autoload.php';

// $app = AppFactory::create();

// // Add Routing Middleware
// $app->addRoutingMiddleware();

$app = new Slim\Application();
$app->get('cupcake_prices', function ()
{
    $cupcake = new Cupcake($database);
    $data    = ['cupcakes' => $cupcake->all()];
    return $app['twig']->render('cupcake_prices.html', $data);
});
$app->get('cupcake/{id}', function ($id)
{
    $data = new Cupcake($database, $id);
    return $app['twig']->render('cupcake_single.html', $data);
});
$app->run();
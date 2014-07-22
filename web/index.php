<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = Main\Application::create(['debug' => true]);

$app->get('/home', function (Silex\Application $app) {
    return $app['twig']->render('index.twig');
});

$app->run();

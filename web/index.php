<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Parser;

$app = Main\Application::create(['debug' => true]);

$parser = new Parser();
$routeCollection = $parser->parse(file_get_contents($app['paths.root'] . '/routes.yml'));

foreach ($routeCollection as $name => $routes) {
    foreach ($routes as $route) {
        $controller = $app->match($route['uri'], $route['class'])
            ->method($route['requestMethod']);
    }
}

$app->run();

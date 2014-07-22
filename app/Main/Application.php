<?php

namespace Main;

use Silex\Application as Silex;
use Silex\Provider\TwigServiceProvider;

class Application extends Silex
{
    public function __construct(array $params = [])
    {
        $params['paths.root'] = realpath(__DIR__ . '/..');
        $params['paths.web'] = $params['paths.root'] . '/../web';

        parent::__construct($params);
        $this->bootstrap();
    }

    public static function create(array $params = [])
    {
        return new static($params);
    }

    protected function bootstrap()
    {
        $app = $this;

        $app->register(
            new TwigServiceProvider(),
            ['twig.path' => $app['paths.root'] . '/views']
        );
    }
}

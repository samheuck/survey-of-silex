<?php

namespace Main\Controllers;

use Main\Application;
use Symfony\Component\HttpFoundation\Request;

class HomeController
{
    public function indexAction(Request $request, Application $app)
    {
        return $app['twig']->render('index.twig');
    }

    public function helloAction(Request $request, Application $app)
    {
        return $app['twig']->render('hello.twig', ['name' => $request->get('name')]);
    }
}

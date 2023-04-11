<?php
    session_start();
    $debug = true;

    require_once __DIR__.'/../../vendor/autoload.php';


    use Phpcourse\Myproject\Classes\Controllers\HomeController;
    use Phpcourse\Myproject\Classes\Router\Router;
    use Phpcourse\Myproject\Classes\StartApplication;

    $router = new Router();

    $router->addRoute('/', HomeController::class, 'index');
    $router->addRoute('/home', HomeController::class, 'index');


    $app = new StartApplication($router, $_SERVER['REQUEST_URI'] ?? '/');

    $app->run();


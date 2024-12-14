<?php

use App\Controllers\MainController;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Controllers/MainController.php';

$router = require_once __DIR__ . '/../src/router/routes.php';

// Débogage : voir les routes et la correspondance
// dump($router->getRoutes());

$match = $router->match();

if ($match) {
    // dump($match); // Voir ce qu'AltoRouter détecte pour la requête
    [$controller, $method] = explode('#', $match['target']);

    echo 'controller='.$controller;
    echo 'method='.$method;
    echo 'class_exists='.class_exists($controller);
    echo 'method_exists='.method_exists($controller, $method);
    if (class_exists($controller) && method_exists($controller, $method)) {
        echo 'cas ok';
        (new $controller())->$method();
    } else {
        echo 'cas1';
        (new MainController())->notFound();
    }
} else {
            echo 'cas2';
    (new MainController())->notFound();
}

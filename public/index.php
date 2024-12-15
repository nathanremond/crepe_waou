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

    if (class_exists($controller) && method_exists($controller, $method)) {
        call_user_func_array([new $controller, $method], $match['params']);
    } else {
        (new MainController())->notFound();
    }
} else {
    (new MainController())->notFound();
}

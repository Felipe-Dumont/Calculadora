<?php

require "../Calculadora/vendor/autoload.php";
require "../Calculadora/src/routers/router.php";

try {
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $request = $_SERVER['REQUEST_METHOD'];

    if (!isset($router[$request])) {
        throw new Exception('A rota não existe');
    }

    if (!array_key_exists($uri, $router[$request])) {
        throw new Exception('A rota não existe');
    }

    $routeHandler = $router[$request][$uri];
    $routeHandler();
} catch (Exception $e) {
    echo $e->getMessage();
}

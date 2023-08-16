<?php

function load(string $controller, string $action)
{
    try {
        $controllerNamespace = "Dumont\\Calculadora\\controllers\\{$controller}";

        if (!class_exists($controllerNamespace)) {
            throw new Exception("O Controller {$controller} não existe!");
        }

        $controllerInstance = new $controllerNamespace();

        if (!method_exists($controllerInstance, $action)) {
                throw new Exception("O Método {$action} não existe!");
        }

        $controllerInstance->$action((object) $_REQUEST);
    } catch (Exception $e) {
            echo $e->getMessage();
    }
}

$router = [
        'GET' => [
        '/' => function () {
            load('Calculadora', 'index');
        },
        ],
        'POST' => [
        ]
];

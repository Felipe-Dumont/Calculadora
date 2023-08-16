<?php

namespace Dumont\Calculadora\controllers;

use Exception;
use League\Plates\Engine;

abstract class Controller
{
    public static function view(string $view, array $data = []): void
    {
        try {
            $viewsPath = dirname(__FILE__, 2) . '/views';

            if (!file_exists($viewsPath . DIRECTORY_SEPARATOR . $view . '.php')) {
                throw new Exception("A view {$view} não existe");
            }

            $templates = new Engine($viewsPath);
            echo $templates->render($view, $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

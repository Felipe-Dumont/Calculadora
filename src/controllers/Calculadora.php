<?php

namespace Dumont\Calculadora\controllers;

class Calculadora
{
    public function index()
    {
        $a = 10;
        $b = 0;
        $c = $a + $b;

        echo $c;

        return Controller::view('calculadora');
    }
}

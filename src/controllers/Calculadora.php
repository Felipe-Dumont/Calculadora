<?php

namespace Dumont\Calculadora\controllers;

class Calculadora
{
    private const BASE_VIEW = 'calculadora';

    public function index()
    {
        return Controller::view(Calculadora::BASE_VIEW);
    }

    public function compute()
    {
        $resultComput = 0;

        $resultComput = $this->calcularOperacao($_REQUEST['screenData']);

        return Controller::view(Calculadora::BASE_VIEW, ['resultComput' => $resultComput]);
    }

    private function calcularOperacao($expressao)
    {
        $expressao = str_replace(' ', '', $expressao);

        $resultado = "";

        eval("\$resultado = $expressao;");

        return $resultado;
    }
}

<?php

use ID\Correios\CalculadoraFrete;
use ID\Correios\Servicos;

require_once './vendor/autoload.php';

try {

    $frete = new CalculadoraFrete(Servicos::SERV_PAC);
    $calculo = $frete->calcular('06870320', 0.580);

    print_r($calculo);

} catch (Exception $e) {
    echo $e->getMessage();
}
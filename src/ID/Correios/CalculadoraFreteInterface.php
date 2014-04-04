<?php

/*
 * (c) Italo Domingues <italo.domingues1@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ID\Correios;

/**
 * Interface para criação de Calculadoras de Fretes
 *
 * @codeCoverageIgnore
 *
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */
interface CalculadoraFreteInterface
{
    /**
     * @param string $cepDestino
     * @param float $peso
     *
     * @return CalculoPrecoPrazo
     */
    public function calcular($cepDestino, $peso);
}
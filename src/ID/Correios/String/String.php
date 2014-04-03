<?php

/*
 * (c) Italo Domingues <italo.domingues1@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ID\Correios\String;

use InvalidArgumentException;

/**
 * Classe de manipulação de Strings
 *
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */
class String
{
    public static function stringToDouble($valor)
    {
        $valor = str_replace(',', '.', $valor);

        return (double) $valor;
    }

    public static function validarCep($cep)
    {
        if (strlen($cep) != 8 || preg_match('/[\d]{8}/', $cep) === false) {
            throw new InvalidArgumentException('O CEP deve possuir exatamente 8 números e não possuir traço!');
        }

        return true;
    }
}
<?php

/*
 * (c) Italo Domingues <italo.domingues1@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ID\Correios;

/**
 * Serviços disponívels dos correios
 *
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */
final class Servicos
{
    /**
     * Sedex Varejo
     */
    const SERV_SEDEX = '40010';

    /**
     * Sedex a Cobrar Varejo
     */
    const SERV_SEDEX_COBRAR = '40045';

    /**
     * Sedex 10 Verejo
     */
    const SERV_SEDEX_10 = '40215';

    /**
     * Sedex Hoje Varejo
     */
    const SERV_SEDEX_HOJE = '40290';

    /**
     * PAC Varejo
     */
    const SERV_PAC = '41106';

    /**
     * Retorna nome do serviço
     *
     * @param string $codServico
     * @return string
     */
    public static function getNomeServico($codServico)
    {
        $servicos = self::getServicos();
        if (key_exists($codServico, $servicos)) {
            return $servicos[$codServico];
        }

        return '';
    }

    /**
     * Retorna códigos e nomes dos serviços
     *
     * @return array
     */
    private static function getServicos()
    {
        return array(
            '40010' => 'Sedex Varejo',
            '40045' => 'Sedex a Cobrar Varejo',
            '40215' => 'Sedex 10 Verejo',
            '40290' => 'Sedex Hoje Varejo',
            '41106' => 'PAC Varejo'
        );
    }
}
<?php

/*
 * (c) Italo Domingues <italo.domingues1@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ID\Correios\Calculos;

use ID\Correios\Servicos;
use ID\Correios\String\String;

/**
 * Retorno da consulta do WS do Correios
 *
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */
class CalculoPrecoPrazo
{
    /**
     * @var string
     */
    private $codServico;

    /**
     * @var bool
     */
    private $entregaDomiciliar;

    /**
     * @var bool
     */
    private $entregaSabado;

    /**
     * @var int
     */
    private $prazoEntrega;

    /**
     * @var float
     */
    private $valor;

    /**
     * @var float
     */
    private $valorAvisoRecebimento;

    /**
     * @var float
     */
    private $valorDeclarado;

    /**
     * @var float
     */
    private $valorMaoPropria;

    public function getCodServico()
    {
        return $this->codServico;
    }

    public function getEntregaDomiciliar()
    {
        return $this->entregaDomiciliar;
    }

    public function getEntregaSabado()
    {
        $this->entregaSabado;
    }

    public function getPrazoEntrega()
    {
        return $this->prazoEntrega;
    }

    public function getNomeServico()
    {
        return Servicos::getNomeServico($this->codServico);
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getValorAvisoRecebimento()
    {
        return $this->valorAvisoRecebimento;
    }

    public function getValorDeclarado()
    {
        return $this->valorDeclarado;
    }

    public function getValorMaoPropria()
    {
        return $this->valorMaoPropria;
    }

    public function setCodServico($codServico)
    {
        $this->codServico = $codServico;

        return $this;
    }

    public function setEntregaDomiciliar($entregaDomiciliar)
    {
        $this->entregaDomiciliar = $entregaDomiciliar;

        return $this;
    }

    public function setEntregaSabado($entregaSabado)
    {
        $this->entregaSabado = $entregaSabado;

        return $this;
    }

    public function setPrazoEntrega($prazoEntrega)
    {
        $this->prazoEntrega = $prazoEntrega;

        return $this;
    }

    public function setValor($valor)
    {
        $this->valor = String::stringToDouble($valor);

        return $this;
    }

    public function setValorAvisoRecebimento($valorAvisoRecebimento)
    {
        $this->valorAvisoRecebimento = String::stringToDouble($valorAvisoRecebimento);

        return $this;
    }

    public function setValorDeclarado($valorDeclarado)
    {
        $this->valorDeclarado = String::stringToDouble($valorDeclarado);

        return $this;
    }

    public function setValorMaoPropria($valorMaoPropria)
    {
        $this->valorMaoPropria = String::stringToDouble($valorMaoPropria);

        return $this;
    }
}
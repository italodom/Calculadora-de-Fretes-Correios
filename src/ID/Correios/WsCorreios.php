<?php

/*
 * (c) Italo Domingues <italo.domingues1@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ID\Correios;

use ID\Correios\String\String;
use InvalidArgumentException;

/**
 * Classe para configuração dos parâmetros de envio ao WS dos correios
 *
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */
class WsCorreios
{
    const URL_WS_CORREIOS = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';

    /**
     * @var string
     */
    private $cdEmpresa = '';

    /**
     * @var string
     */
    private $dsSenha = '';

    /**
     * @var string
     */
    private $cdServico;

    /**
     * @var string
     */
    private $cepOrigem;

    /**
     * @var string
     */
    private $cepDestino;

    /**
     * @var string
     */
    private $vlPeso;

    /**
     * @var int
     */
    private $cdFormato;

    /**
     * @var float
     */
    private $vlComprimento;

    /**
     * @var float
     */
    private $vlAltura;

    /**
     * @var float
     */
    private $vlLargura;

    /**
     * @var float
     */
    private $vlDiametro;

    /**
     * @var string [S|N]
     */
    private $cdMaoPropria = 'N';

    /**
     * @var float
     */
    private $vlValorDeclarado = 0;

    /**
     * @var string [S|N]
     */
    private $cdAvisoRecebimento = 'N';

    /**
     * @return array
     */
    public function getData()
    {
        return array(
            'nCdEmpresa'          => $this->getCdEmpresa(),
            'sDsSenha'            => $this->getDsSenha(),
            'nCdServico'          => $this->getCdServico(),
            'sCepOrigem'          => $this->getCepOrigem(),
            'sCepDestino'         => $this->getCepDestino(),
            'nVlPeso'             => $this->getVlPeso(),
            'nCdFormato'          => $this->getCdFormato(),
            'nVlComprimento'      => $this->getVlComprimento(),
            'nVlAltura'           => $this->getVlAltura(),
            'nVlLargura'          => $this->getVlLargura(),
            'nVlDiametro'         => $this->getVlDiametro(),
            'sCdMaoPropria'       => $this->getCdMaoPropria(),
            'nVlValorDeclarado'   => $this->getVlValorDeclarado(),
            'sCdAvisoRecebimento' => $this->getCdAvisoRecebimento(),
            'StrRetorno'          => 'xml'
        );
    }

    public function getCdEmpresa()
    {
        return $this->cdEmpresa;
    }

    public function getDsSenha()
    {
        return $this->dsSenha;
    }

    public function getCdServico()
    {
        return $this->cdServico;
    }

    public function getCepOrigem()
    {
        return $this->cepOrigem;
    }

    public function getCepDestino()
    {
        return $this->cepDestino;
    }

    public function getVlPeso()
    {
        return $this->vlPeso;
    }

    public function getCdFormato()
    {
        return $this->cdFormato;
    }

    public function getVlComprimento()
    {
        return $this->vlComprimento;
    }

    public function getVlAltura()
    {
        return $this->vlAltura;
    }

    public function getVlLargura()
    {
        return $this->vlLargura;
    }

    public function getVlDiametro()
    {
        return $this->vlDiametro;
    }

    public function getCdMaoPropria()
    {
        return $this->cdMaoPropria;
    }

    public function getVlValorDeclarado()
    {
        return $this->vlValorDeclarado;
    }

    public function getCdAvisoRecebimento()
    {
        return $this->cdAvisoRecebimento;
    }

    public function setCdEmpresa($cdEmpresa)
    {
        $this->cdEmpresa = $cdEmpresa;

        return $this;
    }

    public function setDsSenha($dsSenha)
    {
        $this->dsSenha = $dsSenha;

        return $this;
    }

    public function setCdServico($cdServico)
    {
        $this->cdServico = $cdServico;

        return $this;
    }

    public function setCepOrigem($cepOrigem)
    {
        if (String::validarCep($cepOrigem)) {
            $this->cepOrigem = $cepOrigem;
        }

        return $this;
    }

    public function setCepDestino($cepDestino)
    {
        if (String::validarCep($cepDestino)) {
            $this->cepDestino = $cepDestino;
        }

        return $this;
    }

    public function setVlPeso($vlPeso)
    {
        $this->vlPeso = $vlPeso;

        return $this;
    }

    public function setCdFormato($cdFormato)
    {
        $this->cdFormato = $cdFormato;

        return $this;
    }

    public function setVlComprimento($vlComprimento)
    {
        $this->vlComprimento = $vlComprimento;

        return $this;
    }

    public function setVlAltura($vlAltura)
    {
        $this->vlAltura = $vlAltura;

        return $this;
    }

    public function setVlLargura($vlLargura)
    {
        $this->vlLargura = $vlLargura;

        return $this;
    }

    public function setVlDiametro($vlDiametro)
    {
        $this->vlDiametro = $vlDiametro;

        return $this;
    }

    public function setCdMaoPropria($cdMaoPropria)
    {
        $this->cdMaoPropria = $cdMaoPropria;

        return $this;
    }

    public function setVlValorDeclarado($vlValorDeclarado)
    {
        $this->vlValorDeclarado = $vlValorDeclarado;

        return $this;
    }

    public function setCdAvisoRecebimento($cdAvisoRecebimento)
    {
        $this->cdAvisoRecebimento = $cdAvisoRecebimento;

        return $this;
    }
}
<?php

/*
 * (c) Italo Domingues <italo.domingues1@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ID\Correios;

use Exception;
use Guzzle\Http\Message\Response;
use Guzzle\Service\Client;
use ID\Correios\Calculos\CalculoPrecoPrazo;
use ID\Correios\Errors;
use ID\Correios\WsCorreios;

/**
 * Classe de calculo de frete
 *
 * @author Italo Domingues <italo.domingues1@gmail.com>
 */
class CalculadoraFrete
{
    /**
     * @var string
     */
    private $codServico;

    /**
     * @var int
     */
    private $formato;

    /**
     * @var float
     */
    private $valorDeclarado;

    /**
     * @param string $codServico
     * @param int $formato
     */
    public function __construct($codServico, $formato = Formatos::ENVELOPE)
    {
        $this->codServico = $codServico;
        $this->formato = $formato;
    }

    /**
     * @param string $cepDestino
     * @param float $peso
     *
     * @return CalculoPrecoPrazo
     */
    public function calcular($cepDestino, $peso)
    {
        $wsCorreios = $this->getWsCorreios($cepDestino, $peso);

        $uri = sprintf(
            '%s?%s',
            WsCorreios::URL_WS_CORREIOS,
            http_build_query($wsCorreios->getData())
        );

        $client = new Client();
        $response = $client->get($uri)->send();

        return $this->getCalculo($response);
    }

    /**
     * @param float $valorDeclarado
     *
     * @return \ID\Correios\CalculadoraFrete
     */
    public function setValorDeclarado($valorDeclarado)
    {
        $this->valorDeclarado = $valorDeclarado;

        return $this;
    }

    /**
     *
     * @param Response $response
     *
     * @return Errors|CalculoPrecoPrazo
     */
    private function getCalculo(Response $response)
    {
        $xml = simplexml_load_string($response->getBody(true));
        $retorno = json_decode(json_encode($xml->cServico));

        if ($retorno->Erro != '0') {
            throw new Exception($retorno->MsgErro, $retorno->Erro);
        }

        $calculoPrecoPrazo = new CalculoPrecoPrazo();
        $calculoPrecoPrazo
            ->setCodServico($retorno->Codigo)
            ->setValor($retorno->Valor)
            ->setPrazoEntrega($retorno->PrazoEntrega)
            ->setValorMaoPropria($retorno->ValorMaoPropria)
            ->setValorAvisoRecebimento($retorno->ValorAvisoRecebimento)
            ->setValorDeclarado($retorno->ValorValorDeclarado)
            ->setEntregaDomiciliar(($retorno->EntregaDomiciliar == 'S') ? true : false)
            ->setEntregaSabado(($retorno->EntregaSabado == 'S') ? true : false);

        return $calculoPrecoPrazo;
    }

    /**
     * @return \ID\Correios\WsCorreios
     */
    private function getWsCorreios($cepDestino, $peso)
    {
        $wsCorreios = new WsCorreios();
        $wsCorreios
            ->setCdServico($this->codServico)
            ->setCepOrigem('05425902')
            ->setCepDestino($cepDestino)
            ->setVlPeso($peso)
            ->setCdFormato($this->formato)
            ->setVlComprimento(16)
            ->setVlAltura(0)
            ->setVlLargura(11)
            ->setVlDiametro(0)
            ->setVlValorDeclarado($this->valorDesclarado);

        return $wsCorreios;
    }

}

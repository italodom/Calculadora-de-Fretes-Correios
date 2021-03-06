<?php

namespace ID\Correios;

use Exception;
use Guzzle\Http\Message\Response;
use PHPUnit_Framework_TestCase;
use ReflectionMethod;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-04-04 at 15:29:49.
 */
class CalculadoraFreteTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var CalculadoraFrete
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new CalculadoraFrete(Servicos::SERV_PAC, Formatos::ENVELOPE);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers ID\Correios\CalculadoraFrete::__construct
     */
    public function testConstrutorCalculadoraFrete()
    {
        $this->assertAttributeEquals('41106', 'codServico', $this->object);
        $this->assertAttributeEquals(3, 'formato', $this->object);
    }

    /**
     * @covers ID\Correios\CalculadoraFrete::calcular
     *
     * @expectedException Exception
     */
    public function testCalcularException()
    {
        $this->object->calcular('06870320', 1.500);
    }

    /**
     * @covers ID\Correios\CalculadoraFrete::calcular
     */
    public function testCalcular()
    {
        $mock = $this->getMockBuilder('\ID\Correios\CalculadoraFrete')
            ->disableOriginalConstructor()
            ->getMock();

        $mock->expects($this->once())
            ->method('calcular')
            ->with('06870320', 0.500)
            ->will($this->returnValue($this->getMock('\ID\Correios\Calculos\CalculoPrecoPrazo')));
        $calculo = $mock->calcular('06870320', 0.500);

        $this->assertInstanceOf('\ID\Correios\Calculos\CalculoPrecoPrazo', $calculo);
    }

    /**
     * @covers ID\Correios\CalculadoraFrete::setValorDeclarado
     */
    public function testSetValorDeclarado()
    {
        $this->object
            ->setValorDeclarado(15.0)
            ->calcular('06870320', 0.500);

        $this->assertAttributeEquals(15.0, 'valorDeclarado', $this->object);
    }

    /**
     * @covers ID\Correios\CalculadoraFrete::convertXmlToArray
     */
    public function testConvertXmlToArray()
    {
        $method = new ReflectionMethod('\ID\Correios\CalculadoraFrete', 'convertXmlToArray');
        $method->setAccessible(true);

        $response = $this->getSimulacaoResponseXML();

        $this->assertInstanceOf('\stdClass', $method->invoke($this->object, $response));
    }

    /**
     * @covers ID\Correios\CalculadoraFrete::getWsCorreios
     */
    public function testGetWsCorreios()
    {
        $method = new ReflectionMethod('\ID\Correios\CalculadoraFrete', 'getWsCorreios');
        $method->setAccessible(true);

        $this->assertInstanceOf('\ID\Correios\WsCorreios', $method->invoke($this->object, '06870000', 0.581));
    }

    /**
     * @covers ID\Correios\CalculadoraFrete::getCalculo
     */
    public function testGetCalculo()
    {
        $method = new ReflectionMethod('\ID\Correios\CalculadoraFrete', 'getCalculo');
        $method->setAccessible(true);

        $response = $this->getSimulacaoResponseXML();

        $this->assertInstanceOf('\ID\Correios\Calculos\CalculoPrecoPrazo', $method->invoke($this->object, $response));
    }

    /**
     * @covers ID\Correios\CalculadoraFrete::getCalculo
     *
     * @expectedException Exception
     */
    public function testGetCalculoException()
    {
        $method = new ReflectionMethod('\ID\Correios\CalculadoraFrete', 'getCalculo');
        $method->setAccessible(true);

        $response = $this->getSimulacaoResponseXML(1);

        $this->assertInstanceOf('\ID\Correios\Calculos\CalculoPrecoPrazo', $method->invoke($this->object, $response));
    }

    private function getSimulacaoResponseXML($erro = 0)
    {
$xml = <<<EOF
<Servicos>
    <cServico>
        <Codigo>40010</Codigo>
        <Valor>14,10</Valor>
        <PrazoEntrega>1</PrazoEntrega>
        <ValorMaoPropria>0,00</ValorMaoPropria>
        <ValorAvisoRecebimento>0,00</ValorAvisoRecebimento>
        <ValorValorDeclarado>0,00</ValorValorDeclarado>
        <EntregaDomiciliar>S</EntregaDomiciliar>
        <EntregaSabado>S</EntregaSabado>
        <Erro>$erro</Erro>
        <MsgErro>Erro da API</MsgErro>
    </cServico>
</Servicos>
EOF;

        $response = new Response(201);
        $response->setBody($xml);

        return $response;
    }

}

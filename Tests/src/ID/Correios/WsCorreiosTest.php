<?php

namespace ID\Correios;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-04-04 at 21:08:22.
 */
class WsCorreiosTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var WsCorreios
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new WsCorreios;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers ID\Correios\WsCorreios::getData
     */
    public function testGetData()
    {
        $this->assertTrue(is_array($this->object->getData()));
    }

    /**
     * @covers ID\Correios\WsCorreios::getCdEmpresa
     * @covers ID\Correios\WsCorreios::setCdEmpresa
     */
    public function testSetAndGetCdEmpresa()
    {
        $this->object->setCdEmpresa('1234');
        $this->assertEquals('1234', $this->object->getCdEmpresa());
    }

    /**
     * @covers ID\Correios\WsCorreios::getDsSenha
     * @covers ID\Correios\WsCorreios::setDsSenha
     */
    public function testSetAndGetDsSenha()
    {
        $this->object->setDsSenha('1234');
        $this->assertEquals('1234', $this->object->getDsSenha());
    }

    /**
     * @covers ID\Correios\WsCorreios::getCdServico
     * @covers ID\Correios\WsCorreios::setCdServico
     */
    public function testSetAndGetCdServico()
    {
        $this->object->setCdServico('1234');
        $this->assertEquals('1234', $this->object->getCdServico());
    }

    /**
     * @covers ID\Correios\WsCorreios::getCepOrigem
     */
    public function testGetCepOrigem()
    {
        $this->object->setCepOrigem('06870320');
        $this->assertEquals('06870320', $this->object->getCepOrigem());
    }

    /**
     * @covers ID\Correios\WsCorreios::getCepDestino
     */
    public function testGetCepDestino()
    {
        $this->object->setCepDestino('06870320');
        $this->assertEquals('06870320', $this->object->getCepDestino());
    }

    /**
     * @covers ID\Correios\WsCorreios::getVlPeso
     * @covers ID\Correios\WsCorreios::setVlPeso
     */
    public function testSetAndGetVlPeso()
    {
        $this->object->setVlPeso(0.800);
        $this->assertEquals(0.800, $this->object->getVlPeso());
    }

    /**
     * @covers ID\Correios\WsCorreios::getCdFormato
     * @covers ID\Correios\WsCorreios::setCdFormato
     */
    public function testSetAndGetCdFormato()
    {
        $this->object->setCdFormato(1);
        $this->assertEquals(1, $this->object->getCdFormato());
    }

    /**
     * @covers ID\Correios\WsCorreios::getVlComprimento
     * @covers ID\Correios\WsCorreios::setVlComprimento
     */
    public function testSetAndGetVlComprimento()
    {
        $this->object->setVlComprimento(15);
        $this->assertEquals(15, $this->object->getVlComprimento());
    }

    /**
     * @covers ID\Correios\WsCorreios::getVlAltura
     * @covers ID\Correios\WsCorreios::setVlAltura
     */
    public function testSetAndGetVlAltura()
    {
        $this->object->setVlAltura(15);
        $this->assertEquals(15, $this->object->getVlAltura());
    }

    /**
     * @covers ID\Correios\WsCorreios::getVlLargura
     * @covers ID\Correios\WsCorreios::setVlLargura
     */
    public function testSetAndGetVlLargura()
    {
        $this->object->setVlLargura(15);
        $this->assertEquals(15, $this->object->getVlLargura());
    }

    /**
     * @covers ID\Correios\WsCorreios::getVlDiametro
     * @covers ID\Correios\WsCorreios::setVlDiametro
     */
    public function testSetAndGetVlDiametro()
    {
        $this->object->setVlDiametro(15);
        $this->assertEquals(15, $this->object->getVlDiametro());
    }

    /**
     * @covers ID\Correios\WsCorreios::getCdMaoPropria
     * @covers ID\Correios\WsCorreios::setCdMaoPropria
     */
    public function testSetAndGetCdMaoPropria()
    {
        $this->object->setCdMaoPropria('S');
        $this->assertEquals('S', $this->object->getCdMaoPropria());
    }

    /**
     * @covers ID\Correios\WsCorreios::getVlValorDeclarado
     * @covers ID\Correios\WsCorreios::setVlValorDeclarado
     */
    public function testSetAndGetVlValorDeclarado()
    {
        $this->object->setVlValorDeclarado(12.58);
        $this->assertEquals(12.58, $this->object->getVlValorDeclarado());
    }

    /**
     * @covers ID\Correios\WsCorreios::getCdAvisoRecebimento
     * @covers ID\Correios\WsCorreios::setCdAvisoRecebimento
     */
    public function testSetAndGetCdAvisoRecebimento()
    {
        $this->object->setCdAvisoRecebimento('S');
        $this->assertEquals('S', $this->object->getCdAvisoRecebimento());
    }

    /**
     * @covers ID\Correios\WsCorreios::setCepOrigem
     * @todo   Implement testSetCepOrigem().
     */
    public function testSetCepOrigem()
    {
        $this->object->setCepOrigem('06870320');
        $this->assertEquals('06870320', $this->object->getCepOrigem());
    }

    /**
     * @covers ID\Correios\WsCorreios::setCepDestino
     * @todo   Implement testSetCepDestino().
     */
    public function testSetCepDestino()
    {
        $this->object->setCepDestino('06870320');
        $this->assertEquals('06870320', $this->object->getCepDestino());
    }

    /**
     * @covers ID\Correios\WsCorreios::setVlComprimento
     * @todo   Implement testSetVlComprimento().
     */
    public function testSetVlComprimento()
    {
        $this->object->setVlComprimento(12.58);
        $this->assertEquals(12.58, $this->object->getVlComprimento());
    }

    /**
     * @covers ID\Correios\WsCorreios::setVlLargura
     * @todo   Implement testSetVlLargura().
     */
    public function testSetVlLargura()
    {
        $this->object->setVlLargura(12.58);
        $this->assertEquals(12.58, $this->object->getVlLargura());
    }
}
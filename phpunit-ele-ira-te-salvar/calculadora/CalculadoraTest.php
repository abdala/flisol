<?php
require 'Calculadora.php';

class CalculadoraTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->calculadora = new Calculadora;
    }

    public function testSomar()
    {
        $resultado = $this->calculadora->somar(1,2);

        $this->assertSame(3, $resultado);
    }

    public function testSubtrair()
    {
        $resultado = $this->calculadora->subtrair(5,2);

        $this->assertSame(3, $resultado);
    }    
}

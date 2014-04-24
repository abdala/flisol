<?php
namespace FLISOL\Filtro;

class InteiroTest extends \PHPUnit_Framework_TestCase
{
    protected $inteiro;
    
    public function setUp()
    {
        $this->inteiro = new Inteiro();
    }
    
    /**
     * @dataProvider dados
     */
    public function testFiltrar($entrada, $esperado)
    {
        $resultado = $this->inteiro->filtrar($entrada);
        $this->assertSame($esperado, $resultado);
    }
    
    public function dados()
    {
        return array(
            array(2, 2),
            array(2.2, 2),
            array(2.6, 2),
            array(-2, -2),
            array("2", 2),
            array('-2', -2),
            array("0200", 200),
            array("casa", 0),
            array("casa2", 0),
            array("2casa", 2),
            array(FALSE, 0),
            array(TRUE, 1)
        );
    }
}
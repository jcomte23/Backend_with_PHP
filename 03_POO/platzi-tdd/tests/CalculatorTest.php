<?php
namespace App;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddWillReturnTheSumOfItsParameters()
    {
        $sut = new Calculator();
        $this->assertEquals(8, $sut->add(5,3));
        $this->assertEquals(5, $sut->add(5,0));
    }

    public function testAddWillReturnTheSubtractOfItsParameters()
    {
        $sut = new Calculator();
     
        $this->assertEquals(5, $sut->rest(8,3));
        $this->assertEquals(8, $sut->rest(10,2));
        $this->assertEquals(2, $sut->rest(4,2));
    }
    
    public function testAddWillReturnTheMultiplyOfItsParameters()
    {
        $sut = new Calculator();
     
        $this->assertEquals(24, $sut->mult(8,3));
        $this->assertEquals(20, $sut->mult(10,2));
        $this->assertEquals(8, $sut->mult(4,2));
    }

    public function testAddWillReturnTheDivideOfItsParameters()
    {
        $sut = new Calculator();
     
        $this->assertEquals(5, $sut->div(10,2));
        $this->assertEquals(20, $sut->div(40,2));
        $this->assertEquals(4, $sut->div(8,2));
    }
}

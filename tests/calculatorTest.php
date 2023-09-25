<?php
require 'vendor/autoload.php';

use Calculator\BasicCalculator;

class calculatorTest extends PHPUnit\Framework\TestCase
{
    /**
     * @covers Calculator\BasicCalculator
    */
    public function testAdd()
    {
        $this->assertEquals(3.0, BasicCalculator::add(1, 2));
        $this->assertEquals(3.0, BasicCalculator::add(1.0, 2.0));
        $this->assertEquals(2.0, BasicCalculator::add(0, 2.0));
        $this->assertEquals(2.0, BasicCalculator::add(2.0, 0));
        $this->assertEquals(-2.0, BasicCalculator::add(-4, 2.0));
    }

    /**
     * @covers Calculator\BasicCalculator
    */
    public function testSubtract()
    {
        $this->assertEquals(-1.0, BasicCalculator::subtract(1, 2));
        $this->assertEquals(1.0, BasicCalculator::subtract(2, 1));
        $this->assertEquals(-1.0, BasicCalculator::subtract(1.0, 2.0));
        $this->assertEquals(-2.0, BasicCalculator::subtract(0, 2.0));
        $this->assertEquals(2.0, BasicCalculator::subtract(2.0, 0));
        $this->assertEquals(-6.0, BasicCalculator::subtract(-4, 2.0));
    }

    /**
     * @covers Calculator\BasicCalculator
    */
    public function testMultiply()
    {
        $this->assertEquals(2.0, BasicCalculator::multiply(1, 2));
        $this->assertEquals(2.0, BasicCalculator::multiply(1.0, 2.0));
        $this->assertEquals(0.0, BasicCalculator::multiply(0, 2.0));
        $this->assertEquals(0.0, BasicCalculator::multiply(2.0, 0));
        $this->assertEquals(-8.0, BasicCalculator::multiply(-4, 2.0));
    }

    /**
     * @covers Calculator\BasicCalculator
    */
    public function testDivide()
    {
        $this->assertEquals(0.5, BasicCalculator::divide(1, 2));
        $this->assertEquals(0.5, BasicCalculator::divide(1.0, 2.0));
        $this->assertEquals(0.0, BasicCalculator::divide(0, 2.0));
        $this->assertEquals(-2.0, BasicCalculator::divide(-4, 2.0));
        // $this->assertEquals('Cannot divide by 0', BasicCalculator::divide(2.0, 0));
    }
}

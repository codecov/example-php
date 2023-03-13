<?php
require 'vendor/autoload.php';

use Calculator\BasicCalculator;

class calculatorTest extends PHPUnit\Framework\TestCase
{
    /**
     * @covers calculator\Calculator\add
    */
    public function testAdd()
    {
        $this->assertEquals(BasicCalculator::add(1, 2), 3.0);
        $this->assertEquals(BasicCalculator::add(1.0, 2.0), 3.0);
        $this->assertEquals(BasicCalculator::add(0, 2.0), 2.0);
        $this->assertEquals(BasicCalculator::add(2.0, 0), 2.0);
        $this->assertEquals(BasicCalculator::add(-4, 2.0), -2.0);
    }

    /**
     * @covers calculator\Calculator\subtract
    */
    public function testSubtract()
    {
        $this->assertEquals(BasicCalculator::subtract(1, 2), -1.0);
        $this->assertEquals(BasicCalculator::subtract(2, 1), 1.0);
        $this->assertEquals(BasicCalculator::subtract(1.0, 2.0), -1.0);
        $this->assertEquals(BasicCalculator::subtract(0, 2.0), -2.0);
        $this->assertEquals(BasicCalculator::subtract(2.0, 0), 2.0);
        $this->assertEquals(BasicCalculator::subtract(-4, 2.0), -6.0);
    }

    /**
     * @covers calculator\Calculator\multiply
    */
    public function testMultiply()
    {
        $this->assertEquals(BasicCalculator::multiply(1, 2), 2.0);
        $this->assertEquals(BasicCalculator::multiply(1.0, 2.0), 2.0);
        $this->assertEquals(BasicCalculator::multiply(0, 2.0), 0.0);
        $this->assertEquals(BasicCalculator::multiply(2.0, 0), 0.0);
        $this->assertEquals(BasicCalculator::multiply(-4, 2.0), -8.0);
    }

    /**
     * @covers calculator\Calculator\divide
    */
    public function testDivide()
    {
        $this->assertEquals(BasicCalculator::divide(1, 2), 0.5);
        $this->assertEquals(BasicCalculator::divide(1.0, 2.0), 0.5);
        $this->assertEquals(BasicCalculator::divide(0, 2.0), 0.0);
        $this->assertEquals(BasicCalculator::divide(-4, 2.0), -2.0);
        // $this->assertEquals(BasicCalculator::divide(2.0, 0), 'Cannot divide by 0');
    }
}

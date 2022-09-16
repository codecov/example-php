<?php
    require __DIR__ .'/../vendor/autoload.php';
    require_once '../src/Calculator/calculator.php';

    class calculatorTest extends PHPUnit\Framework\TestCase
    {
        /**
         * @covers Calculator\Calculator\add
        */
        public function testAdd()
        {
            $this->assertEquals(Calculator\Calculator::add(0, 1), 1);
        }
    }
?>

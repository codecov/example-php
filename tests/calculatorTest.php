<?php
    require_once __DIR__ .'/../vendor/autoload.php';

    class calculatorTest extends PHPUnit\Framework\TestCase
    {
        /**
         * @covers Calculator\Calculator
        */
        public function testCalculator()
        {
            $this->assertTrue(!Calculator\Calculator::go());
        }
    }
?>

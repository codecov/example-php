<?php
    require __DIR__ .'/../vendor/autoload.php';

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

<?php
    require __DIR__ .'/../vendor/autoload.php';

    class calculatorTest extends PHPUnit\Framework\TestCase
    {
        /**
         * @covers calculator\Calculator\add
        */
        public function testAdd()
        {
            $this->assertEquals(calculator\Calculator::add(0, 1), 1);
        }
    }
?>

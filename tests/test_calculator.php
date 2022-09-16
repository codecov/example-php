<?php
    require __DIR__ .'/../vendor/autoload.php';

    class Test extends PHPUnit\Framework\TestCase
    {
        public function testCalculator()
        {
            $result = Calculator::go();
        }
    }
?>

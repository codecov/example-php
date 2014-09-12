<?php
    require __DIR__ .'/../vendor/autoload.php';

    use Codecov\Coverage;

    class Test extends PHPUnit_Framework_TestCase
    {
        public function testExample()
        {
            $result = Codecov\Coverage::send();
        }
    }
?>  

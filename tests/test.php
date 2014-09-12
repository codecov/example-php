<?php
    require __DIR__ .'/../vendor/autoload.php';

    use Example\Example;

    class Test extends PHPUnit_Framework_TestCase
    {
        public function testExample()
        {
            $result = Example\Example::go();
        }
    }
?>  

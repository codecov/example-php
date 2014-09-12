<?php
    require __DIR__ .'/../vendor/autoload.php';

    xdebug_start_code_coverage();
    
    use Codecov\Coverage;

    function a($a) {
        return $a +1;
    }

    function b($count) {
        if (1) {
            return a(2);
        } else {
            return false;
        }
    }

    b(6);

    class CodecovTest extends PHPUnit_Framework_TestCase
    {
        public function testSend()
        {
            $result = Codecov\Coverage::send();
        }
        public function testCoverageArray()
        {
            $coverage = xdebug_get_code_coverage();
            $this->assertTrue();

        }
    }
?>  

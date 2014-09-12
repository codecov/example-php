<?php

    function a($a) {
        return $a +1;
    }

    function b() {
        return false;
    }

    class Test extends PHPUnit_Framework_TestCase
    {
        public function testExample()
        {
            $this->assertTrue(a(6) == 7);
        }
    }
?>  

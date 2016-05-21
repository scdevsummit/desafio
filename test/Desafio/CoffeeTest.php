<?php

namespace Test\Desafio;

use Challenge\Coffee;

class CoffeeTest extends \PHPUnit_Framework_TestCase {
    
    public function testMugShouldBeEmpty()
    {
        $coffee = new Coffee();
        $this->assertTrue($coffee->isEmpty());
    }
}


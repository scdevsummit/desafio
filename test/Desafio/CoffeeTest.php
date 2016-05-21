<?php

namespace Test\Desafio;

use Challenge\Coffee;

class CoffeeTest extends \PHPUnit_Framework_TestCase {
    
    public function testMugShouldBeEmpty()
    {
        $coffee = new Coffee();
        $this->assertTrue($coffee->isEmpty());
    }
    
    public function testShouldRefillWhenThereIsNoCoffee()
    {
        $coffe = new Coffee();
        
        if ($coffe->isEmpty()) {
            $coffe->refill();
        }
        
        $this->assertFalse($coffe->isEmpty());
    }
    
    public function testShouldDrinkCoffeWhenThereIsCoffee()
    {
        $coffe = new Coffee();
        
        $this->assertTrue($coffe->isEmpty());
        
        $coffe->refill();

        $this->assertFalse($coffe->isEmpty());
        
        $coffe->drink();
        
        $this->assertTrue($coffe->isEmpty());
    }
}


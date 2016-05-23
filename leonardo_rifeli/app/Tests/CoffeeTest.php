<?php

namespace App\Tests;

require 'vendor/autoload.php';

use App\Coffee;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class CoffeeTest extends WebTestCase {

    private $coffee;

    public function setUp() 
    {
        $this->coffee = new Coffee();
    }

    public function testIsEmpty()
    {
        $this->assertEquals(true, $this->coffee->isEmpty());
    }

    public function testRefill()
    {
        $this->assertEquals(true, $this->coffee->refill());
    }

    public function testDrink()
    {
        $this->coffee->refill();
        $this->assertEquals(true, $this->coffee->drink());
    }

}

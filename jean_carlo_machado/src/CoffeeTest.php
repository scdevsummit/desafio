<?php

namespace Desafio;

use Desafio\Coffee;

/**
 * @author Jean Carlo Machado <contato@jeancarlomachado.com.br>
 */
class CoffeeTest extends \PHPUnit_Framework_TestCase
{
    public function testDrinkCoffeeMakesItEmpty()
    {
        $coffee = new Coffee;
        $coffee->drink();

        static::assertFalse($coffee->hasCoffee());
    }
}


<?php

declare(strict_types=1);

namespace Challenge;

use Challenge\Coffee;

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

    public function testAfterRefillCoffeeIsNotEmpty()
    {
        $coffee = new Coffee;

        $coffee->refill();

        static::assertTrue($coffee->hasCoffee());
    }

    public function testCoffeeIsRefilledWhenItsEmpty()
    {
        $coffee = $this->getMockBuilder(Coffee::class)
            ->setMethods(['refill'])
            ->setConstructorArgs([false])
            ->getMock();

        $coffee->expects($this->once())->method('refill');

        $coffee->programmersLife();
    }

    public function testCoffeeIsNotRefilledWhenItsNotEmpty()
    {
        $coffee = $this->getMockBuilder(Coffee::class)
            ->setMethods(['refill'])
            ->getMock();

        $coffee->expects($this->never())->method('refill');

        $coffee->programmersLife();
    }

    public function testCoffeeIsDrinkedWhenItsNotEmpty()
    {
        $coffee = $this->getMockBuilder(Coffee::class)
            ->setMethods(['drink'])
            ->getMock();

        $coffee->expects($this->once())->method('drink');

        $coffee->programmersLife();
    }

    public function testCoffeeIsNotDrinkedWhenItsEmpty()
    {
        $coffee = $this->getMockBuilder(Coffee::class)
            ->setMethods(['drink'])
            ->setConstructorArgs([false])
            ->getMock();

        $coffee->expects($this->never())->method('drink');

        $coffee->programmersLife();
    }
}


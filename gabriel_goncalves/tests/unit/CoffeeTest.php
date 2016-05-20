<?php

namespace App\Test;

use \PHPUnit_Framework_TestCase;
use App\Coffee;

class CoffeeTest extends PHPUnit_Framework_TestCase
{
    public function testVerificaSeTemCafeEDeveRetornarFalsoPoisEstaVazio()
    {
        $coffee = new Coffee();
        $coffee->refill();
        $this->assertTrue($coffee->isEmpty());
    }

    public function testDeveRetornarACanecaCheiaPoisFoiPreenchida()
    {
        $coffee = new Coffee();
        $this->assertFalse($coffee->isEmpty());
    }


    public function testDeveRetornarVaziaPorqueOCafeFoiTomado()
    {
        $coffee = new Coffee();
        $coffee->refill();
        $this->assertTrue($coffee->isEmpty());
    }
}

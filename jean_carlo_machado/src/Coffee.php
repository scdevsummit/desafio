<?php

namespace Desafio;

/**
 * @author Jean Carlo Machado <contato@jeancarlomachado.com.br>
 */
class Coffee
{
    private $hasCoffee;

    public function __construct($hasCoffee = true)
    {
        $this->hasCoffee = $hasCoffee;
    }

    public function drink()
    {
        $this->hasCoffee = false;
    }

    public function refill()
    {
        $this->hasCoffee = true;
    }

    public function hasCoffee()
    {
        return $this->hasCoffee;
    }

    public function programmersLife()
    {
        if (!$this->hasCoffee()) {
            return $this->refill();
        }

        $this->drink();
    }
}

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

    public function hasCoffee()
    {
        return $this->hasCoffee;
    }
}

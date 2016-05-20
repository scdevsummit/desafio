<?php

declare(strict_types=1);

namespace Desafio;

/**
 * @author Jean Carlo Machado <contato@jeancarlomachado.com.br>
 */
class Coffee
{
    private $hasCoffee;

    public function __construct(bool $hasCoffee = true)
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

    public function hasCoffee() : bool
    {
        return $this->hasCoffee;
    }

    public function programmersLife()
    {
        if (!$this->hasCoffee()) {
            $this->refill();
            return;
        }

        $this->drink();
    }
}

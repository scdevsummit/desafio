<?php

namespace App;

class Coffee
{

    private $isEmpty = true;

    public function refill()
    {
        return $this->isEmpty = false ;
    }

    public function drink()
    {
        return $this->isEmpty = true;
    }

    public function isEmpty()
    {
        if ($this->isEmpty) {
            $this->refill();
            return $this->isEmpty;
        }

        $this->drink();
        return $this->isEmpty;

    }
}

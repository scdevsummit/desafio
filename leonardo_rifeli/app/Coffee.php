<?php

namespace App;

class Coffee {

    private $isFull = false;
    
    public function isEmpty()
    {
        return !$this->isFull;
    }
    
    public function refill()
    {
        if(!$this->isFull) {
            $this->isFull = true;
        }

        return true;
    }
    
    public function drink()
    {
        if(!$this->isFull) {
            return false;
        }

        $this->isFull = false;

        return true;
    }
    
}

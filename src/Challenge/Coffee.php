<?php

namespace Challenge;

class Coffee {
    
    private $empty = true;
    
    public function isEmpty()
    {
        return $this->empty;
    }
    
    public function refill()
    {
        $this->empty = false;
    }
}

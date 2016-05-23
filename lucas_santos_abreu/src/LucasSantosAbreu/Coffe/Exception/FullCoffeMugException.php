<?php

namespace LucasSantosAbreu\Coffe\Exception;

use \Exception;

class FullCoffeMugException extends Exception {
	
	public function __construct () {
		parent::__construct("Coffe mug is full, can't overflow it !");
	}

}
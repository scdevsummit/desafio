<?php

namespace LucasSantosAbreu\Coffe\Exception;

use \Exception;

class EmptyCoffeMugException extends Exception {
	
	public function __construct () {
		parent::__construct("Coffe mug is empty, can't drink air !");
	}

}
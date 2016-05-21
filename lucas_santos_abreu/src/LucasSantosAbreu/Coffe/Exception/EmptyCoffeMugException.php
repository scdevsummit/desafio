<?php

namespace LucasSantosAbreu\Coffe\Exception;

class EmptyCoffeMugException extends Exception {
	
	public function __construct () {
		super::__construct("Coffe mug is empty, can't drink air !");
	}

}
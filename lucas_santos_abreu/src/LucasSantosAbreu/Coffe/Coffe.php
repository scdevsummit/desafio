<?php

namespace LucasSantosAbreu\Coffe;

use LucasSantosAbreu\Coffe\Exception\EmptyCoffeMugException;
use LucasSantosAbreu\Coffe\Exception\FullCoffeMugException;

class Coffe {
	private $isEmpty;

	public function __construct () {
		$this->isEmpty = true;
	}

	public function isEmpty() {
		return $this->isEmpty;
	}

	public function drink() {
		if ($this->isEmpty()) {
			throw new EmptyCoffeMugException();
		} else {
			$this->isEmpty = true;
		}
	}

	public function refill() {
		if (!$this->isEmpty()) {
			throw new FullCoffeMugException();
		} else {
			$this->isEmpty = false;
		} 
	}
}
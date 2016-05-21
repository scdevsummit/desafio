<?php

namespace LucasSantosAbreu\Coffe;

use LucasSantosAbreu\Coffe\Exception\EmptyCoffeMugException;

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
		$this->isEmpty = false;
	}
}
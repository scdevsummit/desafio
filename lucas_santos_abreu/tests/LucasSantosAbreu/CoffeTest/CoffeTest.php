<?php

namespace LucasSantosAbreu\CoffeTest;

use LucasSantosAbreu\Coffe\Coffe;
use LucasSantosAbreu\Coffe\Exception\EmptyCoffeMugException;

class CoffeTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @convers \LucasSantosAbreu\Coffe\Coffe::__construct
	 * @convers \LucasSantosAbreu\Coffe\Coffe::isEmpty
	 */
	public function testIsCoffeMugEmptyWhenCreated() {
		$mug = new Coffe();
		$isEmpty = $mug->isEmpty();
		$this->assertEquals($isEmpty, false); 
		return $mug;
	}

	/**
	 * @convers \LucasSantosAbreu\Coffe\Coffe::__construct
	 * @convers \LucasSantosAbreu\Coffe\Coffe::drink
	 * @depends testIsCoffeMugEmptyWhenCreated
	 * @expects EmptyCoffeMugException
	 */
	public function testCantDrinkEmptyCoffeMug ($mug) {
		$mug->drink();
	}

}

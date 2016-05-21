<?php

namespace LucasSantosAbreu\CoffeTest;

use LucasSantosAbreu\Coffe\Coffe;

class CoffeTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @convers \LucasSantosAbreu\Coffe\Coffe::__construct
	 * @convers \LucasSantosAbreu\Coffe\Coffe::isEmpty
	 */
	public function testIsCoffeMugEmptyWhenCreated() {
		$mug = new Coffe();
		$isEmpty = $mug->isEmpty();
		$this->assertEquals($isEmpty, true); 
	}

}

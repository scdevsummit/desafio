<?php

namespace LucasSantosAbreu\CoffeTest;

use LucasSantosAbreu\Coffe\Coffe;

class CoffeTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @convers \LucasSantosAbreu\Coffe\Coffe::__construct
	 * 
	 */
	public function testCanCreateACoffeMug () {
		$mug = new Coffe();
	}

}

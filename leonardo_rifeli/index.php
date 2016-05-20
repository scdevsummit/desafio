<?php

require 'app/Coffee.php';

$coffee = new Coffee();

if($coffee->isFull()) {
	$coffe->refill();
} else {
	$cofee->drink();
}
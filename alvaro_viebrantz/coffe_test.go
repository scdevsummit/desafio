package main

import "testing"

func TestIfCoffeIsEmpty(t *testing.T) {
	coffe := NewCoffee()

	if !coffe.IsEmpty() {
		t.Error("Coffe should start empty")
	}
}

func TestIfCanRefillCoffe(t *testing.T) {
	coffee := NewCoffee()

	coffee.Refill()

	if coffee.IsEmpty() {
		t.Error("Coffee should be full after refill")
	}
}

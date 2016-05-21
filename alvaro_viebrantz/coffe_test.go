package main

import "testing"

func TestIfCoffeIsEmpty(t *testing.T) {
	coffe := NewCoffee()

	if !coffe.IsEmpty() {
		t.Error("Coffe should start empty")
	}
}

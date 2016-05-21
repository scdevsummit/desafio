package main

import "testing"

func TestIfCoffeeIsEmpty(t *testing.T) {
	coffee := NewCoffee()

	if !coffee.IsEmpty() {
		t.Error("Coffee should start empty")
	}
}

func TestIfCanRefillCoffee(t *testing.T) {
	coffee := NewCoffee()

	coffee.Refill()

	if coffee.IsEmpty() {
		t.Error("Coffee should be full after refill")
	}
}

func TestIfCanDrinkCoffee(t *testing.T) {
	coffee := NewCoffee()

	coffee.Refill()
	coffee.Drink()

	if !coffee.IsEmpty() {
		t.Error("Coffee should be empty after drinking it")
	}
}

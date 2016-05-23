package main

func main() {
	coffee := NewCoffee()

	if coffee.IsEmpty() {
		coffee.Refill()
	} else {
		coffee.Drink()
	}
}

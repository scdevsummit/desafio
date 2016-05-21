package main

// Coffee a simply coffee struct
type Coffee struct {
	empty bool
}

// NewCoffee Creates a new coffee
func NewCoffee() *Coffee {
	return &Coffee{true}
}

// IsEmpty check if the coffee is empty
func (c Coffee) IsEmpty() bool {
	return c.empty
}

// Refill refill all the coffee
func (c *Coffee) Refill() {
	c.empty = false
}

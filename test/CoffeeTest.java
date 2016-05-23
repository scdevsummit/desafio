import static org.junit.Assert.*;

import org.junit.Test;

public class CoffeeTest {

	@Test
	public void mugShouldBeEmpty() {
		Coffee coffee = new Coffee();
		
		assertTrue("Mug with coffee should be empty", coffee.isEmpty());
	}

	@Test
	public void shouldRefillTheMugWithCoffee() throws Exception{
		Coffee coffee = new Coffee();
		coffee.refill();
		
		assertFalse(coffee.isEmpty());
	}
	
	@Test
	public void shouldDrinkCoffeeWhenItIsAvailable() throws Exception {
			Coffee coffee = new Coffee();
			coffee.refill();
			coffee.drink();
	}
}


public class Coffee {

	private boolean empty = true;
	
	public boolean isEmpty() {
		return empty;
	}
	
	public boolean refill() throws Exception{
		if (!empty) {
			throw new Exception("You already have coffee to drink");
		}
		
		empty = false;
		
		return true;
	}
	
	public boolean drink() throws Exception {
		if (empty) {
			throw new Exception("There is no coffee to drink");
		}
		
		return empty = true;
	}
}

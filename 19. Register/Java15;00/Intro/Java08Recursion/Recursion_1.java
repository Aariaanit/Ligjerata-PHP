package Java08Recursion;

public class Recursion_1 {
	static int x = 1;
	public static void rekursion() {
		
		System.out.println("Prizren "+ x);
		x++;
		rekursion();
	}
	
	public static void main(String[] args) {

		rekursion();
	}

}

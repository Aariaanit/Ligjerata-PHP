package Java08Recursion;

public class Recursion_2 {
	
	static int x = 0;
	public static void rec1() {
		x++;
		if(x <= 10) {
			System.out.println("Prizren "+ x);
			rec1();
		}
		
	}
	public static void main(String[] args) {
		
		rec1();

	}

}

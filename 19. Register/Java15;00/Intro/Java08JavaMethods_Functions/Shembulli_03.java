package Java08JavaMethods_Functions;

public class Shembulli_03 {

	public static void main(String[] args) {
		
		
		System.out.print("Nota eshte: ");
		provimi(90.5);
		
		System.out.print("Nota eshte: ");
		provimi(69.5);

	}
	
	public static void provimi(double piket) {
		if (piket >= 90.0) {
			System.out.println(10);
		}
		else if (piket >= 80.0) {
			System.out.println(9);
		}
		else if (piket >= 70.0) {
			System.out.println(8);
		}
		else if (piket >= 60.0) {
			System.out.println(7);
		}
		else if (piket >= 50.0) {
			System.out.println(6);
		}
		else {
			System.out.println(5);
		}
	}	
}

public class Shembulli_04 {

	public static void main(String[] args) {
		
		// Invoke the average method with int parameters
		System.out.println("The average of 3 and 4 is "
		+ average(3, 4));	
		// Invoke the average method with the double parameters
		System.out.println("The average of 3.4 and 5.6 is "
		+ average(3.4, 5.6));	
		// Invoke the average method with three double parameters
		System.out.println("The average of 3.0, 5.4, and 9.14 is "
		+ average(3.0, 5.4, 9.14));
		
		}
			
		/** Return the average of two int values */
		public static int average(int number1, int number2) {
			return (number1 + number2)/2;
		}
		/** Return the average of two double values */
		public static double average(double number1, double number2) {
			return (number1 + number2)/2;
		}
		/** Return the average of three double values */
		public static double average(double number1, double number2, double number3) {
			return(number1 + number2 + number3)/3;
		}
}


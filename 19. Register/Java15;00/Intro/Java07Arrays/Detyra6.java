package Java07Arrays;

public class Detyra6 {

	public static void main(String []args){

		String str="Përshëndetje! Ky është programi im i parë në Java";	

		int arr[] = new int[7];
		for (int i = 0; i < str.length(); i++) {
			if (str.charAt(i) == 'a' || str.charAt(i) == 'A') {
				arr[0]++;
			}
			if (str.charAt(i) == 'e' || str.charAt(i) == 'E') {
				arr[1]++;
			}
			if (str.charAt(i) == 'ë' || str.charAt(i) == 'Ë') {
				arr[2]++;
			}
			if (str.charAt(i) == 'i' || str.charAt(i) == 'I') {
				arr[3]++;
			}
			if (str.charAt(i) == 'o' || str.charAt(i) == 'O') {
				arr[4]++;
			}
			if (str.charAt(i) == 'u' || str.charAt(i) == 'U') {
				arr[5]++;
			}
			if (str.charAt(i) == 'y' || str.charAt(i) == 'Y') {
				arr[6]++;
			}
			
		}

		System.out.println("'a' u paraqit " + arr[0]);
		System.out.println("'e' u paraqit " + arr[1]);
		System.out.println("'ë' u paraqit " + arr[2]);
		System.out.println("'i' u paraqit " + arr[3]);
		System.out.println("'o' u paraqit " + arr[4]);
		System.out.println("'u' u paraqit " + arr[5]);
		System.out.println("'y' u paraqit " + arr[6]);


	}

}

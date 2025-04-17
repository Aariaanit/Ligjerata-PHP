package Java06Loops;

public class Detyra5 {

	public static void main(String[] args) {
		int x;
		int y;
		int space = 5;
		for(x=1;x<=5;x++) { //Rreshti
			for(y=1;y<=space-x;y++) { //Kolona
				System.out.print("  ");
				
			}
			for(y=1;y<=x;y++) { //Kolona
				System.out.print("* ");
				
			}
			System.out.println();
			
		}


	}

}

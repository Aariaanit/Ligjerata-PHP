package Java06Loops;

public class toFor {
	public static void main(String[] args) {
		int x;
		int y;
		int z=1;
		for(x=1;x<=3;x++) { //Rreshti
			for(y=1;y<=3;y++) { //Kolona
				System.out.print(z);
				z++;
			}
			System.out.println();
			z=x+1;
		}
	}
}
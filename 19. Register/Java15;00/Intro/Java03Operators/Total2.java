package Java03Operators;

import java.util.Scanner;

/** Total - e llogarit sasine e parave te imeta qe i kam */
public class Total2 {
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		
		int gjysma;
		int njezeta;
		int dhjeta;
		int pesa;
		int cent;
		System.out.print("Jep 50 centshe: ");
		gjysma = input.nextInt();
		System.out.print("Jep 20 centshe: ");
		njezeta = input.nextInt();
		System.out.print("Jep 10 centshe: ");
		dhjeta = input.nextInt();
		System.out.print("Jep 5 centshe: ");
		pesa = input.nextInt();
		System.out.print("Jep 1 centshe: ");
		cent = input.nextInt();
		
		System.out.println("Per keto sasi monedhash: ");
		System.out.print("50 cetshe = ");
		System.out.print(gjysma);
		System.out.println(", qe bejne "+(gjysma*50)+ "cent");
		
		System.out.print("20 cetshe = ");
		System.out.print(njezeta);
		System.out.println("qe bejne "+(njezeta*20)+ "cent");
		
		System.out.print("10 cetshe = ");
		System.out.print(dhjeta);
		System.out.println(", qe bejne "+(dhjeta*10)+ "cent");
		
		System.out.print("5 cetshe = ");
		System.out.print(pesa);
		System.out.println(", qe bejne "+(pesa*5)+ "cent");
		
		System.out.print("1 cetshe = ");
		System.out.print(cent);
		System.out.println(", qe bejne "+(cent*1)+ "cent");
		
		System.out.println( (gjysma * 50) + (njezeta * 20) + (dhjeta * 10) + (pesa * 5) + (cent * 1) );
	}
}
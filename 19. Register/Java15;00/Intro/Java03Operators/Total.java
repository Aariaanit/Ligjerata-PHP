package Java03Operators;

/** Total - e llogarit sasine e parave te imeta qe i kam */
public class Total {
	public static void main(String[] args) {
	
		int gjysma = 4;
		int njezeta = 2;
		int dhjeta = 0;
		int pesa = 1;
		int cent = 6;
		
		System.out.println("Per keto sasi monedhash: ");
		System.out.print("Gjysma = ");
		System.out.println(gjysma);
		System.out.print("Njezeta = ");
		System.out.println(njezeta);
		System.out.print("Dhjeta = ");
		System.out.println(dhjeta);
		System.out.print("Pesa = ");
		System.out.println(pesa);
		System.out.print("Centa = ");
		System.out.println(cent);
		System.out.println( (gjysma * 50) + (njezeta * 20) +
		(dhjeta * 10) + (pesa * 5) + (cent * 1) );
	}
}
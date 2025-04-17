
public class Shembulli_02 {

	public static void main(String[] args) {
//		System.out.println("Sum from 1 to 10 is " + sum(0, 10));
//		System.out.println("Sum from 10 to 20 is " + sum(10, 20));
//		System.out.println("Sum from 20 to 30 is " + sum(20, 30));
//		
//		System.out.println(faktoriel(7));
		













		int n=7,k=3;
		int x = (int) Math.pow(n, k);
		int z =1/x;
		int shuma = sum(12,24);
		int prodhimi = faktoriel(5);
		
		int y = z*prodhimi+shuma;
		System.out.println(y);
		
	}
	
	public static int sum(int start, int end) {
		int result = 0;
		for (int i = start; i <= end; i++) {
		 result += i;
		}
		
		return result;
		}
	
	public static int faktoriel(int vlera) {
		int fac = 1;
		for(int i=1;i<=vlera;i++) {
			fac *=i;
		}
		return fac;
	}
	

}


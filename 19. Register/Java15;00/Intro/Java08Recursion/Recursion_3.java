package Java08Recursion;

public class Recursion_3 {
	
	static int faktoriel(int n) {
		// 2 rastet baze: F(0) dhe F(1) = 1		
		if((n == 0) || (n == 1)) {
			 return n;
		}
		else {
			//Rastet rekursiv
			return(n * faktoriel(n-1));

		}
	}
	public static void main(String[] args) {
		
		System.out.println("Faktorieli i numrit 6 eshte: "+faktoriel(6));
	}
}

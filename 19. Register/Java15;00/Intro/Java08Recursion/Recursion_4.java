package Java08Recursion;

public class Recursion_4 {
	static int n1 = 0, n2 = 1;
	static void fibonacci(int count) {
		if(count > 0) {
			
			int n3 = n1 + n2;
			n1 = n2;
			n2 = n3;
			System.out.print(" "+n3);
			fibonacci(count-1);
		}
	}
	public static void main(String[] args) {
		int count = 12;
		
		//Vlerat fillestare 0 dhe 1
		System.out.print(n1+" "+n2);
		
		//count-2 sepse dy numrat e pare po i nxjerrim me larte
		fibonacci(count-2);

	}

}

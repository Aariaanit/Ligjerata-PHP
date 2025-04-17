package Java08JavaMethods_Functions;

public class detyre {
	
public static void main(String[] args) {
		int a=3,b=10;
		int thysa = (int) (a/Math.pow(a, b));
		int shuma = sum(10);
		int prodhimi = pro(7);
		
		int y = thysa * shuma + prodhimi;
		
		System.out.println(y);
	}


	static int sum(int n) {
		int shuma=0;
		for(int i=1;i<=n;i++) {
			shuma += i;  //shuma=shuma+i;
		}
		return shuma;
	}
	static int pro(int b) {
		
		int prodhimi=1;
		for(int a=1;a<=b;a++) {
			prodhimi *= a;
		}
		return prodhimi;
	}
}

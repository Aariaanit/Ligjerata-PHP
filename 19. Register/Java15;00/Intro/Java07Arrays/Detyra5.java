package Java07Arrays;

public class Detyra5 {

	public static void main(String[] args) {
		
			int n = 5;
		
			for (int x = 1; x<= n; x++)
			{
				for (int y = 1; y <= n; y++)
				{
					if(x==y||x+y==6||x==1||x==5||y==1||y==3) {
						System.out.print("X"+" ");	
					}
					else {
					System.out.print(0+" ");
					}
					
				}
				
				System.out.println();
				
			}
		

	}

}

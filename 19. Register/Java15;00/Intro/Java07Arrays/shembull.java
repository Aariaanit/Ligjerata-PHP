package Java07Arrays;

public class shembull {

	public static void main(String[] args) {


		for(int i=1;i<=5;i++) {
			for(int j=1;j<=5;j++) {
				if(i==j||i+j==6||j==3||i==1||i==5||j==1||j==2) {
					System.out.print("X ");
				}
				else {
					System.out.print("  ");
				}
				
			}
			System.out.println();
		}

	}

}

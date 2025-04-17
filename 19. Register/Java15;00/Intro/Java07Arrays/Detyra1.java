package Java07Arrays;

public class Detyra1 {
	public static void main(String[] args) {
		int[][] number = {{1,2,3},{4,5,6},{7,8,9}};
		for(int a=0;a<number.length;a++) {
			for(int b=0;b<number[a].length;b++){
				System.out.print(number[a][b]);
			}
			System.out.println();
		}
	}
}

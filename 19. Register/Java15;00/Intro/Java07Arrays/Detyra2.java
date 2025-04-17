package Java07Arrays;

public class Detyra2 {
	public static void main(String[] args) {
		int n = 5;
		int space = 1;
		space = n - 1;
		for (int x = 1; x<= n; x++)
		{
			for (int y = 1; y<= space; y++)
			{
				System.out.print(" ");
			}
			space--;
			for (int i = 1; i <= 2 * x - 1; i++)
			{
				System.out.print("*");
			}
			System.out.println(" ");
		}
	}
}

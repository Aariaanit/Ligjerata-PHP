package Day3;

public class ArrayApp1 {

	public static void main(String[] args) {

		int[] arr;
		arr = new int[10];
		int nItems;
		
		arr[0] = 7;
		arr[1] = 3;
		arr[2] = 13;
		arr[3] = 32;
		arr[4] = 43;
		arr[5] = 56;
		arr[6] = 21;
		arr[7] = 12;
		arr[8] = 9;
		arr[9] = 93;
		
		nItems = 10;
		
		for(int i=0;i<nItems;i++) {
			System.out.print(arr[i]+ " ");
			//System.out.println();
		}
	}

}

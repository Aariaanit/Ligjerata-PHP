package Day3;

public class ArrayApp {
	static int[] arr;
	static int nItems = 10;
	
	public static void main(String[] args) {

		arr = new int[nItems];
		
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
		
		int vlera = delete(12);
		
		System.out.println("Vlera qe e fshijme eshte:" + vlera);
		
		for(int i=0;i<nItems;i++) {
			System.out.print(arr[i]+ " ");
		}
	}
	public static int delete(int value) {
		for(int j=0;j<nItems;j++) { 
			if(arr[j] == value) {
				for( int k=j; k<nItems-1; k++) {
					arr[k] = arr[k+1];
				}
					nItems--;
					return value;
			}
		}
		return value;
	}

}

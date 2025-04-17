package Day2;

import java.util.Arrays;

public class AlgoritmiBinar {
	
	public static int kerkimiBinar(int [] vargu, int vlera) {
		//best case: O(1)- konstant
		//worst case: O(log2n) - logaritmik
		
		int indeksi = -1;
		
		int low = 0;
		int up = vargu.length - 1;
		
		while(low <= up) {
			int mid = (low + up) / 2;
			if(vargu[mid] == vlera) {
				indeksi = mid;
				break;
			}
			else if(vlera < vargu[mid]) {//shko majtas
				up = mid - 1;
			}
			else { //if(vlera > vargu[mid]) { //shkodjathtas
				low = mid + 1;
			}
		}
		return indeksi;
	}
	public static void main(String[] args) {
		int [] vargu = {5, 2, 7, 3, -1, 0, 8, 9};
		
		//sortohet vargu
		Arrays.sort(vargu);
		//System.out.println("Vargu: " + vargu);
		for(int i = 0; i < vargu.length; i++) {
			System.out.print(vargu[i] + " ");
		}
		System.out.println();
		int vlera = 7;
		int i = kerkimiBinar(vargu, vlera);
		System.out.println("Vlera " +vlera+ " eshte ne indeksin " + i);
	}

}


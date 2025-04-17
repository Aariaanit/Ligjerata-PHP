package Day2;

import java.util.Arrays;

public class AlgoritmiLinear {
	
	public static int kerkimiLinear(int [] vargu, int vlera) {
		//best case: O(1) - konstant
		//worst case: O(n) - linear
		int indeksi = -1;
		
		for(int i = 0; i < vargu.length; i++) {
			if(vargu[i] == vlera) {
				indeksi = i;
				break;
			}
		}
		return indeksi;
	}
	public static void main(String[] args) {
		int [] vargu = {5, 2, 7, -1, 0, 3, 8, 9};
		int vlera = 3;
		int indeksi = kerkimiLinear(vargu, vlera);
		if(indeksi == -1)
			System.out.println("Vlera " + vlera + " nuk u gjet!");
		else
			System.out.println("Vlera " + vlera + " u gjet ne poziten " + indeksi);
			
		
	}

}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Java06Loops;

/**
 *
 * @author Arianit
 */
public class Detyra3 {
    public static void main(String[] args){
    	int numri = 6, i=0; // i= pjestuesii numrit te dhene
    	boolean i_thjeshte = false;
    	if(numri==0||numri==1) {
    		System.out.println("Numri natyror " +numri +" nuk eshte numer i thjeshte.");
    	}
    	else {
    		for(i = 2; i <= numri/2; i++) {
        		if(numri%i==0){ 
        			System.out.println("Numri natyror " +numri +" nuk eshte numer i thjeshte.");
        			i_thjeshte = true;
        			break;
        		}	
        	}
    		if(i_thjeshte == false){
    			System.out.println("Numri natyror " +numri +" eshte numer i thjeshte.");
    		}
    	} 	
    }   
}

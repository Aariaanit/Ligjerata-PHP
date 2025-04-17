package Java07Arrays;

import java.util.Arrays;

public class Array {
	public static void main(String[] args){
		
        //Deklarimi dhe inicializimi i nje Array.
        int[] x ={5,7,8,4,10,20,8};
        System.out.println(x[0]);
        
        String[] laptop = {"Dell", "HP", "Lenovo", "Acer"};
        System.out.println(laptop[1]);
        System.out.println(laptop);
        
        //Menyra qe na mundeson thirrjen e krejt array-s. 
        System.out.println(Arrays.toString(laptop));
        
        System.out.println("Metoda Length");
        
        //int y =(laptop.length);
        System.out.println(laptop.length);
        
        System.out.println();
        
        //Ndryshimi i nje elementi te Array
        System.out.println("Ndyshimi i nje elementi te array");
        
        //System.out.println(laptop[2]);
        laptop[2]="IBM";
        System.out.println(laptop[2]);
        System.out.println();
        
        /*Duke e perdorur For loop si mundemi te i 
          nxjerrim elementet e array-s?
        */
        for(int a=0; a<laptop.length; a++){
            System.out.println(laptop[a]);
            
        }
        
        System.out.println();
        
        //For-Each Loop
        System.out.println("For-Each Loop");
        
        for (String laptop1 : laptop) {
            System.out.println(laptop1);
        }
        
        //Multidimensional Arrays (Matric)
        System.out.println();
        System.out.println("Multidimensional Arrays");
        
        
        int[][] numrat = {{1,2,3,4}, {5,6,7,8}};
        //it[][] nt z =numrat{6,6,6,6[1][2];
        for(int b=0; b<numrat.length; b++){
            for(int c=0; c<numrat[b].length; c++){
               System.out.print(numrat[b][c]); 
            
            }
            System.out.println();
            
        }
        
        
        
        //Me For-each
        for (int[] numrat1 : numrat) {
            System.out.println(Arrays.toString(numrat1));
        }
    }
}

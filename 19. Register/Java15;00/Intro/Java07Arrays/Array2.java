package Java07Arrays;

public class Array2 {
	 public static void main(String args[]){  
		    //Shembulli me Array SingleDimensional
		   System.out.println("Shembull 1");
		        int a[]=new int[5]; //Deklarimi i Array 
		        a[0]=10; //Inicializimi 
		        a[1]=20;  
		        a[2]=30;  
		        a[3]=40;  
		        a[4]=50;  

		        for(int i=0;i<a.length;i++){     
		            System.out.println(a[i]);
		        }
		        
		     //Shembull me Array MultiDimensional
		     System.out.println("Shembull 2");
		     //Deklarimi i Array qe do te kete 3 rreshta dhe 3 kolona
		     int[][] arr = new int[3][3]; //Forma Matric
		     arr[0][0]=1;
		     arr[0][1]=2;
		     arr[0][2]=3;
		     arr[1][0]=4;
		     arr[1][1]=5;
		     arr[1][2]=6;
		     arr[2][0]=7;
		     arr[2][1]=8;
		     arr[2][2]=9;
		     
		     for(int y=0;y<arr.length;y++){  
		        for(int x=0;x<arr.length;x++){
		            System.out.print(arr[y][x]+" ");
		        }
		        System.out.println();
		    }
		     
		    //Shembull tjeter me Array Multidimensionale
		    System.out.println("Shembull 3");
		     
		    int ar[][] = new int[3][];  
		        ar[0] = new int[3];  
		        ar[1] = new int[4];  
		        ar[2] = new int[2];  
		        
		        int count=0;  
		        for (int i=0; i<ar.length; i++){
		            for(int j=0; j<ar[i].length; j++){
		                ar[i][j] = count++;  
		            }
		        }
		          
		        for (int i=0; i<ar.length; i++){  
		            for (int j=0; j<ar[i].length; j++){  
		                System.out.print(ar[i][j]+" ");  
		            }  
		            System.out.println(); 
		        }  
		    }	
}

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
public class Ushtrimi1 {
    public static void main(String[] args){
       
        int x, y, pro;
        for(x=1; x<=3; x++){   //for loop jashtme // bllok 1
            for(y=1; y<=3; y++){//for loop brendshme   // bllok 2
            	pro = x * y;
            	if(y==3)
            		break;
            		System.out.println(x+" * "+y+"= "+pro);
            }
        }
        System.out.println("Perfundoi For Loop\n");

     
        int i, j, prodhimi;
        for(i=1; i<=3; i++){        // bllok 1
            for(j=1; j<=3; j++){    // bllok 2
            	prodhimi = i * j;
            	if(j==2)
            		continue;
            		System.out.println(i+" * "+j+" = "+prodhimi);
            }
        }
        System.out.println("Perfundoi For Loop\n");
        
        int a, b;
        for(a=1; a<=3; a++){   //for loop jashtme // bllok 1
            for(b=1; b<=3; b++){//for loop brendshme   // bllok 2
            	
            		System.out.print(x);
            }
            System.out.println();
        }
        System.out.println("Perfundoi For Loop\n");
    }
}

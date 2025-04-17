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
/*Break/Continue -jane komanda per kontrollimin,
 se kur duhet te perfundoj loop-a*/

public class BreakContinue {
    /*Break -*/
    public static void main(String[] args){
        int x;
        for(x=0;x<=7;x++){
            if(x == 3) 
                break;
            
            System.out.println("x = "+x);
        }
        System.out.println("Perfundoi For loop "+x);
        
        /*Continue*/
        int y;
        for(y=0;y<=7;y++){
            if(y == 3) 
                continue;
            
            if(y == 5) 
                break;
                //System.out.println("x= " + y);
                
            System.out.println("y = "+y);
        }
        System.out.println("Perfundoi For loop "+y);
    
        int a = 1;
        while(a<=7){
            System.out.println("a = "+a);
            a++;
            if(a == 4)
                break;
        }
        System.out.println("Perfundoi While Loop");
    
        
        int b = 1;
        while(b<=7){
            System.out.println("b = "+b);
            b++;
            if(b == 4)
                continue;
        }
        System.out.println("Perfundoi While Loop");
        
        
        int c = 1;
        do{
            System.out.println("c = "+c);
            c++;
            if(c == 4)
                break;
        }while(c<=7);
        System.out.println("Perfundoi Do/While Loop");
    
        
        int d = 1;
        do{
            System.out.println("d = "+d);
            d++;
            if(d == 4)
                continue;
        }while(d<=7);
        System.out.println("Perfundoi DO/While Loop");
    }
}

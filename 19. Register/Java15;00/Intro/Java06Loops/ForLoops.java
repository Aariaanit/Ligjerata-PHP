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
/*Llojet e Unazave(Loops) qe perdoren me se shumti ne Java 
jane: For Loop, While Loop dhe Do/While Loop.
*/
/*For Loop –përsërit një bllok të komandave apo një komandë të vetme 
 për një numër të caktuar të iteracioneve; 
 numri i përsëritjeve (iteracioneve) është i njohur 
 para se të filloj ekzekutimi i unazës. 
*/
public class ForLoops {
    public static void main(String[] args){
        int x;//Deklarimi i variables behet jashte loopes
        for(x=1;x<=5;x++){
            System.out.println("x= "+x);
        }
        System.out.println("Vlera e x pas loop: "+x);
        
        
        
        int y=1; //Inicializimi i variables jashte loopes
        for(;y<=5;y++){
            System.out.println("y= "+y);
        }
        System.out.println("Vlera e y pas loop: "+y);
        
        
        
        
        for(int z=1;z<=5;z++){//Deklarimi i variables brenda loopes
            System.out.println("z= "+z);
            
        }
       //System.out.println("Vlera e z pas loop: "+z);
    }
}

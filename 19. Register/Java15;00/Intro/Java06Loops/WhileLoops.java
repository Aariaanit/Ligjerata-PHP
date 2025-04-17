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
/*WHILE –përsërit një bllok të komandave apo një komandë të vetme përderisa 
  plotësohet ndonjë kusht logjik (deri sa kushti logjik të jetë i saktë)
*/
public class WhileLoops {
     public static void main(String[] args){
        int x = 1;//Deklarimi i variables behet jashte loopes
        while(x<=5){
            System.out.println("x= "+x);
            x++;
        }
        System.out.println("Vlera e x pas loop: "+x);
    
        /*DO/WHILE –përsërit një bllok të komandave apo një komandë të vetme 
         përderisa plotësohet ndonjë kushtë logjik (deri sa kushti logjik të 
         jetë i saktë); 
        blloku i komandave (apo komanda e vetme) ekzekutohen së paku një herë
*/
        int y = 1;//Deklarimi i variables behet jashte loopes
        do {
            System.out.println("y= "+y);
            y++;
        }
        while(y<=5);
        System.out.println("Vlera e y pas loop: "+y);
     
    }
}
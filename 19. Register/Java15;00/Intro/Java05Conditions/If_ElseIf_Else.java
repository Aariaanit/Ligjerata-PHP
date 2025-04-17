package Java05Conditions;
import java.util.Scanner;
public class If_ElseIf_Else {
	public static void main(String[] args){
		Scanner input = new Scanner(System.in);
        int piket;
        System.out.print("Jepi piket:");
        piket = input.nextInt();
        
        
        if(piket < 50)
        {
            System.out.println("Nota 5");
        }
        else if(piket >= 50 && piket <= 59)
        {
            System.out.println("Nota 6");
        }
        //Vazhdon...
        else
        {
            System.out.println("Abstenim");
        }

    }
}

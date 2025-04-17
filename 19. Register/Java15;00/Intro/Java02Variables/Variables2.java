package Java02Variables;

import java.util.Scanner; 
public class Variables2
{  
      public static void main( String args[] )
       {
       //Scanner -Na mundeson qe te japim vlera ne console
	Scanner input = new Scanner( System.in );
	int number1;
	int number2;
	int sum;
	System.out.print( "jep numrin e pare: " );
	number1 = input.nextInt();//Na mundeson vendosjen e vlerave ne variabel permes consoles
	System.out.print( "jep numrin e dyte: " );
	number2 = input.nextInt();
	sum = number1 + number2;
	System.out.println( "shuma eshte : "+ sum );
      }
}

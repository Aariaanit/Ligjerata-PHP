package Java04String;



public class StringFormat {
	public static void main(String[] args){
		
		/*
		%s - string
		%c - nje karakter
		%d - numer te plote decimal
		%f - numer jo i plote
		%x - numer hexadesimal
		%o - numer oktal
		%n - rresht i ri
		*/
	    //System.out.printf(s9, args)
	    System.out.printf("Looks like %s and %s for brekfast","spam","eggs");
	    System.out.println();
	    System.out.printf("There is %d %s %d %s %n",1,"spam",4,"you");
	    System.out.printf("Hello %s %s, you have won $%d %n","Mr.","Smith",10000);
	    System.out.printf("%c is my %s letter and my %dst number is %.2f %n",'X', "favorite", 1, .16);
	    System.out.printf("%.2f %.2f %n",2.3,2.3468);
	    System.out.printf("This int, %d, was placed in field of width 5 %n" ,7 );
	    System.out.printf("This int, %5d, was placed in field of width 10 %n" ,77);
	    System.out.printf("This int, %d, was placed in field with no width %n" ,7);
	    System.out.printf("This float, %10.5f, has width 10 and precision 5 %n" ,3.1415926);
	    System.out.printf("This float, %-10.5f, has width 10 and precision 5 %n" ,3.1415926);
	    System.out.printf("This float, %.5f, has width 0 and precision 5 %n" ,.1415926);
	    System.out.printf("%2d %n",14);
	    
	    int total = 207;
	    System.out.printf("You have $%d.%02d %n",total/100,total%100 );
	    System.out.printf("Time left %02d:%05.2f ",1,37.374);
	    
	}
}

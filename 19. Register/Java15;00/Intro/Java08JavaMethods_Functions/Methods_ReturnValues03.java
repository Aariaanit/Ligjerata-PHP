
public class Methods_ReturnValues03 {
    
	//Metoda pare
    static int num(int x){
        return 15 + x;
    }
    //document.write(num(20))
    //Metoda dyte
    static int pro(int a, int b){
        int x = a*b;
    	
        return x;
        
    }
    static String Name(String firstName, String lastName){
        return firstName + lastName;
    }
    
    public static void main(String[] args){
        System.out.println(num(105));
        int b =num(20);
        int c =num(30);
        
        //System.out.println(a); //metoda pare
        System.out.println(b);
        System.out.println(c);
        System.out.println(pro(5,5)); //metoda dyte
        System.out.println(Name("Arianit ","Tershnjaku")); //Metoda tret
        
        int d = num(5) + pro(5,5);
        int e = c * b;
        System.out.println(d);
        System.out.println(e);
    }
}

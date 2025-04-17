package Java05Conditions;

public class ScopeVariables {
	public static void main(String[] args)  {
	    
        int x; // Kjo variabel eshte e dukshme per tere programin
	x = 1;
	if(x == 1) 
	{ // Fillimi i nj� blloku te ri te programit
            int y = 2; // Deklarimi i variables se re, e cila do te jete e dukshme vet�m ne kete bllok
            
            System.out.println("x: " + x+ " y: " + y);
		    x = y * 10;
	} // Fundi i bllokut te ri te programit
        //y = 5; // Gabim , sepse y nuk vlen ne ket� pozite!
		// Por x ende vlene, andaj mund ta shkruajm�:
	System.out.println("x: " + x);
	//System.out.println("y: " + y);
        
    }
}

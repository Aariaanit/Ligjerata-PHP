
/*
	N�se nj� klas� ka metoda t� shumta q� kan� t� nj�jtin em�r por 
	kane emra t� ndrysh�m n� parametra, ajo njihet si Method Overloading.
*/

public class Method_Overloading02 {
	
	//Dy metoda me emer te njejt, por me nr. te ndryshem te parametrave
	static int add(int a,int b){
	    //System.out.println(a+b);
		return a+b;
		
	}
	
	static int add(int a,int b,int c){
	    return a*b+c;
	}
	
	static int pro(int a,int b){
	    return a*b;
	}
	
	static float pro(float a, float b){
	    return a*b;
	}
	
	//Dy metoda me emer te njejt, por me parametra te tipave te ndryshme.
	public static void main(String[] args){
	    System.out.println(add(5,10)); //Metoda pare
	    System.out.println(add(1,2,7)); //Metoda dyte
	   
	    //Kur i kemi tipin e te dhenave te ndryshem
	    System.out.println(pro(7,7));
	    System.out.println(pro(7.7f,7.7f));
	}
}


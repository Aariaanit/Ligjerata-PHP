

/*
Nj� metod� �sht� nj� bllok i kodit i cili funksionon vet�m kur thirret.
Ju mund t'i kaloni t� dh�nat, t� njohura si parametra, n� nj� metod�.
Metodat p�rdoren p�r t� kryer veprime t� caktuara, dhe ato njihen gjithashtu si funksione.
*/
/*
Metoda duhet t� deklarohet brenda nj� klase.

*/
public class JavaMethods_Functions01 {
    
	static void Metoda1(){
        //Eshte njera nga metodat qe eshte e paracaktuar nga Java 
        System.out.println("Metoda e pare e krijuar!");
    }
    //Parametrat i shenojme brenda kllapave
    static void Metoda2(String para){ 
        //Eshte njera nga metodat qe eshte e paracaktuar nga Java 
        System.out.println(para);
    }
    
    
    static void Metoda3(String vlera, int x){
        //Eshte njera nga metodat qe eshte e paracaktuar nga Java 
        System.out.println(vlera + x);
        System.out.println(vlera +" eshte "+ x);
        
    }
    
    public static void main(String[] args){
        
        Metoda1();
        Metoda1();
        Metoda1();
        //Metoda1(); //Nje metode mund te thirret disa here
        
        Metoda2("Metoda e dyte me parameter");
        
        //Argument jane vlerat qe ia caktojme parametrave
        
        
        Metoda3("Numeri ",7);
        Metoda3("Vlera ",10);
        Metoda3("Vlera2 ",17);
    }
}
package Java05Conditions;

public class If_Else {
	public static void main(String[] args){
        int piket = 76; //Inicializimi i variables.
        System.out.println(" Numri i pikëve= " + piket);
        
        if (piket >= 50) //Caktimi i kushtit
        {
            //Ekzekutimi i kodit nese plotesohet kushti
            System.out.println("Kalon provimin!");
        }
        else
        {
            //Ekzekutimi i kodit nese nuk plotesohet kushti
            System.out.println("Nuk Kalon provimin!");
        }
    }
}

package Java04String;

public class StringMethod {
	 public static void main(String[] args) {
         
		    String emri = "Arianit";
		    System.out.println(emri);
		    
		    //Metoda length()
		    System.out.println("//Metoda length()");
		    System.out.println("Gjatesia e variables eshte: "+emri.length());
		    
		    //Metoda indexOf() dhe lastIndexOf()
		    System.out.println("//Metoda indexOf() dhe lastIndexOf()");
		    String text ="Shkolla Digjitale Prizren Prizren";
		    System.out.println(text.indexOf("Prizren"));
		    System.out.println(text.lastIndexOf("Prizren"));
		    
		    //Metoda charAt()
		    System.out.println("//Metoda charAt()");
		    String shkolla = "Shkolla Digjitale";
		    System.out.println(shkolla.charAt(1));
		    //Mundemi edhe ne kete form
		    char vlera = shkolla.charAt(1);
		    System.out.println(vlera);
		    
		    //Metoda codePointAt()
		    System.out.println("//Metoda codePointAt()");
		    int vlera1 = shkolla.codePointAt(0);
		    System.out.println(vlera1);
		    
		    
		    //Metoda concat()
		    System.out.println("//Metoda concat()");
		    String emri1 = "Arianit ";
		    String mbiemri = "Tershnjaku";
		    System.out.println(emri1.concat(mbiemri));
		    
		    
		    //Metoda contains()
		    System.out.println("//Metoda contains()");
		    String con1 = "Prizren";
		    System.out.println(con1.contains("Pri"));
		    System.out.println(con1.contains("Pz"));
		    System.out.println(con1.contains("ren"));
		    System.out.println(con1.contains("ne"));
		    
		    //Metoda replace()
		    System.out.println("//Metoda replace()");
		    String rep = "Shkolla Digjitale Prizren";
		    System.out.println(rep.replace('D', 'S'));
		    System.out.println(rep.replaceAll("Prizren","Prishtine"));
		    
		    //Metoda trim()
		    System.out.println("//Metoda trim()");
		    String space ="           Shkolla Digjitale";
		    System.out.println(space);
		    System.out.println(space.trim());
		    
		    //Metoda toLowerCase()
		    System.out.println("//Metoda toLowerCase()");
		    String pz ="Prizren";
		    System.out.println(pz.toLowerCase());
		    
		    //Metoda toUpperCase()
		    System.out.println("//Metoda toLowerCase()");
		    String pz1 ="Prizren";
		    System.out.println(pz1.toUpperCase());
		  }
}

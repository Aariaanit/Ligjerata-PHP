package Java03Operators;

public class Operators {
public static void main(String[] args){
        
        //Operatoret Aritmetik
        // + , - , * , / , % , ++ , --
        
        int i = 15;
        int j = 10;
        System.out.println(i+j); //Mbledhja
        System.out.println(i-j); //Zbritja
        System.out.println(i*j); //Shumezimi
        System.out.println(i/j); //Pjestimi
        
        //Rritje (++)dhe Zbritje (--)
        int x =20; 
        //x++;
        int y = ++x; //Prefiks
        System.out.println(x);
        System.out.println(y);
        
        int z =x++; //Sufiks
        System.out.println(z);
        System.out.println(x);
        
        //Modulo(%)
        int n = 5;
        int m = 2;
        System.out.println(n % m);
        
        //Operatoret Percaktues
        // = , += , -= , *= , /= , %= , 
        
        int c = 4;
        int d = 7;
        c += 3; //c=c+3
        System.out.println(c);
        c -= 4;
        System.out.println(c);
        c *= d; //c=c*d
        System.out.println(c);
        c /= d;
        System.out.println(c);
        c %= d;
        System.out.println(c);
        
        //Opeatoret Krahasues
        // == , != , > , < , >= , <=
        
        int e = 12;
        int f = 15;
        
        System.out.println(e == f);
        System.out.println(e != f);
        System.out.println(e > f);
        System.out.println(e < f);
        System.out.println(e >= f);
        System.out.println(e <= f);
        
        //Operatoret Logjik
        // & , | , ! , ^ ,   
        
        int g = 11;
        int h = 14;
       
        // AND
        System.out.println(g > 20 && h < 10);  
        System.out.println(g < 20 && h > 10);
        
        // OR
        System.out.println(g > 20 || h < 10);  
        System.out.println(g < 20 || h < 10);
       
        //XOR
        System.out.println(g == 11 ^ h == 14); // T ^ T = F
        System.out.println(g != 11 ^ h != 14); // T ^ F = T
                                               // F ^ T = T
        System.out.println(g == 12 ^ h == 14); // F ^ F = F
        System.out.println(g != 10 ^ h != 14);
    
        // NOT
        System.out.println(!(g > 20 && h < 10));  
        System.out.println(!(g < 20 || h > 10));
    }
}

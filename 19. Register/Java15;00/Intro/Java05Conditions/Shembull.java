package Java05Conditions;

public class Shembull {
public static void main(String[] args){
        
        int x1 = 13, x2 = 19, x3 = 3;
        int max;

        if (x1 >= x2) 
        {
            if (x1 > x3) 
            {
                max = x1;
            }
            else 
            {
                max = x3;
            } 
        }
        else 
        {
            if (x2 > x3) 
            {
                max = x2;
            }
            else 
            {
                max = x3;
            }
	}
        System.out.println(max);
        
        
        //Metoda e dyte
        int y1 = 13, y2 = 19,y3 = 3;
        int max1;

        if((y1 >= y2) && (y1 >= y3))
        {
            max1 = y1;
        }
        else if((y2 >= y1) && (y2 >= y3)) 
        {
            max1 = y2;
        }
        else
        {
            max1 = y3;
        }

        System.out.println(max1);

    }
}

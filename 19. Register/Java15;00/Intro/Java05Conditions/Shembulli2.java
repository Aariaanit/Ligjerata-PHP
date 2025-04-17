package Java05Conditions;

public class Shembulli2 {
	public static void main(String[] args)
    {
        int i=5, j=10, k=20, a=0, b=0, c=2, d=3;
        if (i == 10)
        {
            a=d;
        }
        else 
        {
            if (j < 20)
            {
                a=b;
            }
            if (k > 100)
            {
                c=d;
            }
            else
            {
                a=c;
            } 
	}

System.out.println("a="+a+", b="+b+", c="+c+", d="+d);

    }
}

package Day6;

public class AStack {
	
	//Stack i implementuar duke perdorur strukturen e vargut
	//Te gjitha operacionet (funksionet) e Stack-ut kane kompleksitetin konstant O(1)
		
	Object [] array; //vargu si strukture e brendshme per ruajtjen e te dhenave
	int maxSize; //numri maksimal i elementeve
	int top; //indeksi i elementit te fundit te shtuar ne Stack-un
		
	public AStack(int max) {
		maxSize = max;
		array = new Object[maxSize];
		top = -1; // indeksi i elementit ne top eshte per 1 me pak se indeksi 0
	}
		
	public int size() {
		return (top + 1);
	}
		
	public boolean isFull() {
		return (maxSize == size());
	}
		
	public boolean isEmpty() {
		return (top == -1); //size() == 0
	}
		
	//push - shton nje element te ri ne fund te Stack-ut
	public void push(Object e) {
		//O(1) - konstant
				
		//kontrollo nese vargu eshte i mbushur
		if(isFull())
			System.out.println("stack is full!");
		//te pakten nje vend eshte i lire per shtimin e elementit te ri e
		else {
			//se pari rritet vlera indeksit top per 1 pastaj ne ate indeks te modifikuar shtohet elementi i ri
			//top++;
			//array[top] = e;
			
			//ose 2 instruksionet ne 1 te vetem
			array[++top] = e;
		}
	}
		
	//pop - largon elementin top dhe e kthen vleren e tij
	public Object pop() {
		//O(1) - konstant
			
		//kontrollo nese Stack eshte i zbrazet
		if(isEmpty())
			return null;
		//ka te pakten nje element
		//largoje elementin ne indeksin top, duke e zvogeluar top per 1
		Object r = array[top];
		top--;
		return r;
		
		//ose 3 instruksionet ne 1 te vetem
		//return array[top--];
	}
		
	//peek - lexon vleren e elementit top
	public Object peek() {
		//O(1) - konstant
			
		//kontrollo nese Stack eshte i zbrazet
		if(isEmpty())
			return null;
		//ka te pakten nje element te shtuar
		//ktheje vleren e elementit te fundit ne indeksin top
		return array[top];
	}
}

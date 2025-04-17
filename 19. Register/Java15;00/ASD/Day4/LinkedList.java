package Day4;


public class LinkedList {
	
	Node head, tail; //referencat ne nyjen e pare (head) dhe te fundit (tail)
	int size; //numri i nyjeve ne listen e lidhur
	
	public LinkedList() {
		//fillimisht lista eshte e zbrazte
			head = tail = null;
		size = 0;  
	}
	
	public boolean isEmpty() {
		return (size == 0);
	}
	
	public void addLast(Object d) {
		//O(1) - konstant
		
		//krijojme nje nyje te re
		Node n = new Node(d);
		
		//kete nyje te re e bejme pjese te listes
		
		//kontrollojme nese lista eshte e zbrazte
		if(isEmpty())
			head = tail = n;
		//perndryshe, lista ka te pakten 1 nyje
		else {
			tail.next = n;
			tail = n;
		}
		//sapo u shtua nje nyje e re, size rritet per nje
		size++;
	}
	
	public void addFirst(Object d) {
		//O(1) - konstant
		Node n = new Node(d);
		if(isEmpty())
			head = tail = n;
		else {
			n.next = head;
			head = n;
		}
		size++;
	}
	
	public Object removeFirst() {
		//O(1) - konstant
		if(isEmpty())
			return null;
		else {
			//e dhena e nyjes qe do te largohet nga lista e lidhur
			Object r = head.data;
			
			//nese lista ka nje nyje
			if(head == tail) {
				head = tail = null;
			}
			//perndryshe, lista ka te pakten dy nyje
			else {
				head = head.next;
			}
			size--;
			return r;
		}
	}
	
	public Object getFirst() {
		//O(1) - konstant
		if(isEmpty())
			return null;
		else
			return head.data;
	}
	
	public Object getLast() {
		//O(1) - konstant
		if(isEmpty())
			return null;
		else
			return tail.data;
	}
	
	public void display() {
		//O(n) - linear
		Node curr = head;
		//perderisa nuk arrijme ne fund te listes
		while(curr != null) {
			System.out.print(curr.data + " ");
			curr = curr.next;
		}
		System.out.println();
	}
}
package Day5;


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
	
	public Object removeLast() {
		if(isEmpty())
			return null;
		else {
			Object r = tail.data;
			//kontrollo nese lista ka vetem nje nyje
			if(head == tail)
				head = tail = null;
			//perndryshe, lista ka me shume nje nyje
			else {
				Node curr = head;
				while(curr.next != tail) {
					curr = curr.next;
				}
				curr.next = null;
				tail = curr;
			}
			size--;
			return r;
		}
	}
	
	public void insertAtPos(int pos, Object d) {
		//nese pozita eshte jo-valide
		if(pos < 0 || pos > size)
			System.out.println("Pozita eshte jo-valide!");
		//perndryshe, pozita eshte valide
		else {
			Node n = new Node(d);
			//kontrollo nese lista eshte e zbrazte
			if(isEmpty())
				head = tail = n;
			//perndryshe, lista ka te pakten nje nyje
			else {
				if(pos == 0) {
					n.next = head;
					head = n;
				}
				else {
					Node curr = head;
					for(int i = 0; i < pos-1; i++) {
						curr = curr.next;
					}
					n.next = curr.next;
					curr.next = n;
					//kontrollo nese nyja e re u shtua ne fund te listes
					if(n.next == null)
						tail = n;
				}
			}
			size++;
		}
	}
	
	public Object removeAtPos(int pos) {
		//kontrollo nese pozita eshte jo-valide
		if(pos < 0 || pos > size-1)
			return null;
		//perndryshe pozita eshte brenda rangut [0, size-1]
		else {
			Object r = head.data;
			//nese lista ka vetem nje nyje
			if(head == tail)
				head = tail = null;
			//nese kerkohet te largohet nyja e pare e listes (head)
			else if(pos == 0)
				head = head.next;
			//perndryshe, nyja mund te jete ne pozita te cfaredoshme ne listen
			else {
				Node curr = head;
				for(int i = 0; i < pos-1; i++) {
					curr = curr.next;
				}
				r = curr.next.data;
				curr.next = curr.next.next;
				//kontrollo nese eshte larguar nyja e fundit nga lista (tail)
				if(curr.next == null)
					tail = curr;
			}
			//sapo u largua nje nyje nga lista, size zvogelohet per nje
			size--;
			//kthehet si rezultat e dhena e nyjes se larguar nga lista e lidhur
			return r;
		}
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
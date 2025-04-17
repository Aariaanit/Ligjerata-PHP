package Day7;

public class LQueue {
	
	public class Node {
		Object data;
		Node next;
		
		public Node(Object d) {
			data = d;
			next = null;
		}
	}
	
	Node front; //nyja e pare qe eshte shtuar ne queue
	Node rear; //nyja e fundit qe eshte shtuar ne queue
	int size; //numri i nyjeve ne queue
	
	public LQueue() {
		//fillimisht queue eshte e zbrazet
		front = rear = null;
		size = 0;
	}
	
	public boolean isEmpty() {
		return (size == 0); // ose front == null && rear == null
	}
	
	//enqueue - shton nje nyje te re ne fund te queue (rear)
	//O(1) - konstant
	public void enqueue(Object e) {
		//se pari e krijojme nje nyje te re
		Node n = new Node(e);
		//tani nyjen e re e shtojme ne queue
		//se pari na duhet te kontrollojme nese queue eshte e zbrazet
		//nese eshte e zbrazet, nyja e re do te jete edhe front edhe rear
		if(isEmpty())
			front = rear = n;
		//nese queue permban nyje tjera (te pakten nje)
		else {
			rear.next = n;
			rear = n;
		}
		//sapo u shtua nje nyje e re ne queue, size rritet per nje
		size++;
	}
	
	//dequeue - largon nyjen e pare qe eshte shtuar ne queue (front)
	//O(1) - konstant
	public Object dequeue() {
		//se pari kontrollojme nese queue eshte e zbrazet
		if(isEmpty())
			return null;
		//queue ka te pakten nje nyje
		//vleren e nyjes front e ruajme ne nje variabel te perkohshme
		Object r = front.data;
		//realizojme largimin e nyjes front nga queue
		//nese queue ka vetem 1 nyje
		if(front == rear)
			front = rear = null;
		//queue ka me shume se 1 nyje
		else
			front = front.next;
		//sapo u largua nje nyje nga queue, size zvogeloje per 1
		size--;
		//kthejme si rezultat vleren e nyjes se larguar
		return r;
	}
	
	//peek - lexon vleren e nyjes se pare qe eshte shtuar ne queue (front)
	//O(1) - konstant
	public Object peek() {
		//se pari kontrollojme nese queue eshte e zbrazet
		if(isEmpty())
			return null;
		//queue ka te pakten nje nyje
		return front.data;
	}
	
	//PRIORITY QUEUE - enqueue
	//O(n) - linear
	public void enqueuePQ(Object e) {
		//se pari e krijojme nje nyje te re
		Node n = new Node(e);
		//tani nyjen e re e shtojme ne queue
		//se pari na duhet te kontrollojme nese queue eshte e zbrazet
		//nese eshte e zbrazet, nyja e re do te jete edhe front edhe rear
		if(isEmpty())
			front = rear = n;
		//nese queue permban nyje tjera (te pakten nje)
		else {
			Node curr = front;
			//nese e dhena e nyjes se re eshte me e vogel se e dhena e nyjes ne front, atehere nyjen e re shtoje ne front
			if((int)n.data <= (int)curr.data) {
				n.next = front;
				front = n;
			}
			//perndryshe duhet te levizim neper queue
			else {
				//perderisa nuk e gjejme vendin e duhur ku do te shtohet nyja e re, levizim neper queue (next)
				while(curr.next != null && (int)curr.next.data <= (int)n.data) {
					curr = curr.next;
				}
				//pasi eshte gjet vendi i duhur, shtojme nyjen e rene queue
				n.next = curr.next;
				curr.next = n;
				//kontrollojme nese nyja e re ne queue eshte shtuar ne fund te queue
				//nese po atehere nyjen e re te shtuar ne queue e bejme rear
				if(n.next == null)
					rear = n;
			}
		}
		//sapo u shtua nje nyje e re ne queue, size rritet per nje
		size++;
	}
}
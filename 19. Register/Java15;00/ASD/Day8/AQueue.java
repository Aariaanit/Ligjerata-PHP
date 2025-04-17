package Day8;

public class AQueue {
	
	//te gjitha operacionet e Queue kane kompleksitet konstant O(1)
	Object [] array; //vargu si strukture e brendshme per ruajtjen e te dhenave
	int maxSize; //numri maksimal i elementeve qe do te shtohen ne vargun
	int front; //elementi i pare i shtuar ne queue (jo domosdoshmerisht ne indeksin 0)
	int rear; //elementi i fundit i shtuar ne queue (jo domosdoshmerisht ne indeksin size - 1)
	int size; //numri i elementeve ne queue
	
	public AQueue(int max) {
		maxSize = max;
		array = new Object[maxSize];
		//ne fillim queue nuk ka asnje element
		size = 0;
		front = 0;
		rear = -1;
	}
	
	public boolean isFull() {
		return (maxSize == size);
	}
	
	public boolean isEmpty() {
		return (size == 0);
	}
	
	//enqueue - operacioni per shtim te nje elementi te ri ne fund te queue-se (ne indeksin rear + 1)
	public void enqueue(Object e) {
		//kontrollo nese queue eshte e mbushur
		if(isFull())
			System.out.println("Queue is full!");
		//ka te pakten nje vend te lire per shtimin e elementit te ri e ne queue
		else {
			//rear++;
			rear = (rear + 1) % maxSize; //circular queue
			array[rear] = e;
			//sapo u shtua nje element i ri ne queue
			size++;
		}
	}
	
	//circular queue
	public Object dequeue() {
		//kontrollo nese queue eshte e zbrazet
		if(isEmpty()){
			return null;
		}
		Object r = array[front];
		//front++;
		front = (front + 1) % maxSize; //circular queue
		//sapo u largua elementi nga indeksi front, ne queue
		size--;
		return r;
	}
	
	//peek - operacioni per leximin e vleres se elementit ne indeksin front
	public Object peek() {
		if(isEmpty())
			return null;
		return array[front];
	}
}
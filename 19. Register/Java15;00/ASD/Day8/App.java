package Day8;

public class App {

	public static void main(String[] args) {
		AQueue a = new AQueue(5);
		a.enqueue(5);
		a.enqueue(8);
		a.enqueue(9);
		System.out.println("peek: " + a.peek()); //5
		System.out.println("dequeue: " + a.dequeue()); //5
		System.out.println("peek: " + a.peek()); //8
		a.enqueue(11);
		a.enqueue(21);
		a.enqueue(3);
		System.out.println("peek: " + a.peek()); //8
		a.enqueue(20); //queue is full
		System.out.println("dequeue: " + a.dequeue()); //8
		System.out.println("dequeue: " + a.dequeue()); //9
		System.out.println("dequeue: " + a.dequeue()); //11
		System.out.println("peek: " + a.peek()); //21
		a.enqueue(10);
		a.enqueue(13);
		
		//leximi i elementeve ne queue
		while(!a.isEmpty())
			System.out.print(a.dequeue() + " ");
	}
}
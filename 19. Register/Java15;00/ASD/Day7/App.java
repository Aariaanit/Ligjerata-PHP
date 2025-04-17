package Day7;

public class App {

	public static void main(String[] args) {		
		LQueue l = new LQueue();
		l.enqueuePQ(6);
		l.enqueuePQ(2);
		l.enqueuePQ(9);
		l.enqueuePQ(10);
		l.enqueuePQ(1);
		l.enqueuePQ(11);
		
		System.out.println("peek: " + l.peek()); //1
		System.out.println("dequeue: " + l.dequeue()); //1
		System.out.println("peek: " + l.peek()); //2
		
		while(!l.isEmpty())
			System.out.print(l.dequeue() + " ");
		
	}
}
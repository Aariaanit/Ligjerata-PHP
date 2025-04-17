package Day4;

public class App {

	public static void main(String[] args) {
		LinkedList l1 = new LinkedList();
		System.out.println("remove: " + l1.removeFirst());
		l1.addLast(12);
		l1.addLast(7);
		l1.display();
		l1.addFirst(8);
		l1.addFirst(10);
		l1.addFirst(9);
		l1.addLast(5);
		l1.display();
		System.out.println("head = " + l1.getFirst()); //9
		System.out.println("tail = " + l1.getLast()); //5
		System.out.println("remove: " + l1.removeFirst());
		System.out.println("remove: " + l1.removeFirst());
		l1.display();
	}
}

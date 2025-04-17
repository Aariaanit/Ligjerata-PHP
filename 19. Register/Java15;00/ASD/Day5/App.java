package Day5;


public class App {

	public static void main(String[] args) {
		LinkedList l1 = new LinkedList();
		l1.addLast(8);
		l1.addLast(7);
		l1.addLast(9);
		l1.addFirst(12);
		l1.addFirst(15);
		l1.addFirst(6);
		l1.display();
		l1.addFirst(18);
		l1.addFirst(61);
		l1.addFirst(17);
		l1.display();
		System.out.println("head = " + l1.getFirst());
		System.out.println("tail = " + l1.getLast());
		System.out.println("remove last: " + l1.removeLast()); //9
		System.out.println("remove last: " + l1.removeLast()); //7
		l1.display();
		l1.insertAtPos(4, 100);
		l1.display();
		System.out.println("remove last: " + l1.removeAtPos(l1.size-1)); //8
		l1.display();
	}
}
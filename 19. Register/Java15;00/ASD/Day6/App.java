package Day6;

public class App {

	public static void main(String[] args) {
		AStack s = new AStack(10);
		s.push(10);
		s.push(17);
		s.push(7);
		s.push(18);
		s.push(15);
		s.push(13);
		//top = 13
		System.out.println("peek: " + s.peek()); //13
		System.out.println("peek: " + s.peek()); //13
		System.out.println("pop: " + s.pop()); //13, top = 15
		System.out.println("pop: " + s.pop()); //15
		//leximi (printimi) i elementeve te Stack-ut
		
		while(!s.isEmpty()) {
			System.out.print(s.pop() + " "); //18 7 17 10
			System.out.println();
			System.out.println("stack is emmpty?: " + s.isEmpty());
		}
	}
}

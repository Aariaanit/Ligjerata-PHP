package Day11;

import java.util.LinkedList;
import java.util.Stack;

public class Graph {
	
	//struktura e nyjes ne graf (vertex)
	public class Vertex {
		char value; //vleren (karakter - shkronje alfabeti)
		boolean wasVisted; //flag per vizitimin e nyjes
		
		public Vertex(char v) {
			value = v;
			wasVisted = false;
		}
	}
	
	Vertex [] vertices; //nyjet ne graf
	int [][] adjacencyMatrix; //matrica e afersise qe specifikon lidhjet mes nyjeve ne graf
	int max, size; //max = numri maksimal i nyjeve, nVerts = numri aktual i nyjeve
	
	//strukturat ndihmese per algoritmet e kerkimit ne graf
	Stack<Integer> stack; //stack per dfs, ku do te ruhen indekset e nyjeve
	LinkedList<Integer> queue; //queue per bfs, ku do te ruhen indekset e nyjeve
	
	public Graph(int m) {
		max = m;
		size = 0;
		vertices = new Vertex[max];
		adjacencyMatrix = new int[max][max];
		
		stack = new Stack<>();
		queue = new LinkedList<>();
	}
	
	public void addVertex(char v) {
		//shto nese ka vend te lire ne vargun vertices
		if(size < max) {
			//krijojme nyjen e re
			Vertex v1 = new Vertex(v);
			//shtojme nyjen ne fund te vargut vertices
			vertices[size] = v1;
			//rrisim size per nje
			size++;
		}
		//nese ska vend te lire, njoftoje perdoruesin
		else {
			System.out.println("Nuk ka vend te lire per nyje te re!");
		}
	}
	
	public void addEdge(int i, int j) {
		//nyjet perfaqesohen nga indekset ne vargun vertices, edhe ne baze te indekseve krijojme lidhjet mes nyjeve ne grafin
		//se pari kontrollo nese indeksi eshte i mundshem
		if(i >= 0 && i < size && j >= 0 && j < size) {
			adjacencyMatrix[i][j] = 1;
			adjacencyMatrix[j][i] = 1;
		}
		//perndryshe shfaq nje gabim
		else {
			System.out.println("Indeksi nuk eshte valid!");
		}
	}
	
	public void displayVertex(int v) {
		//se pari kontrollo indeksin v nese eshte i mundshem
		if(v >= 0 && v < size)
			System.out.print(vertices[v].value);
		else
			System.out.println("Indeksi nuk eshte valid!");
	}
	
	//kthen fqiun e pavizituar te nyjes
	public int getAdjUnvisitedVertex(int i) {
		for(int j = 0; j < size; j++) {
			//gjej fqinjet e nyjes ne indeksin i e te cilat jane te pavizituara
			if(adjacencyMatrix[i][j] == 1 && vertices[j].wasVisted == false)
				return j;
		}
		return -1; //nuk ka gjet fqinje te pavizituar te nyjes
	}
	
	//Algoritmet e Kerkimit ne graf
	//DFS & BFS
	
	//dfs - depth first search (perdor Stack si strukture ndihmese)
	public void dfs() {
		//se pari selektojme nyjen startuese dhe kryejme procesin 3-hapesh
		//1. vizito nyjen
		//2. sheno ate si te vizituar
		//3. shtoje ate ne stack
		System.out.print("DFS: ");
		displayVertex(0);
		vertices[0].wasVisted = true;
		stack.push(0);
		while(!stack.isEmpty()) {
			int a = getAdjUnvisitedVertex(stack.peek());
			if(a == -1)
				stack.pop();
			else {
				displayVertex(a);
				vertices[a].wasVisted = true;
				stack.push(a);
			}
		}
		
		//vendos wasVisted ne false
		for(int i = 0; i < size; i++)
			vertices[i].wasVisted = false;
		System.out.println();
	}
	
	//bfs - breadth first search (perdor Queue si strukture ndihmese)
	public void bfs() {
		//se pari selektojme nyjen startuese dhe kryejme procesin 3-hapesh
		//1. vizito nyjen
		//2. sheno ate si te vizituar
		//3. shtoje ate ne queue
		System.out.print("BFS: ");
		displayVertex(0);
		vertices[0].wasVisted = true;
		queue.addLast(0);
		while(!queue.isEmpty()) {
			int a = queue.removeFirst(); //nyja aktuale
			//vizitojme te gjithe fqinjet e pavizituar te nyjes aktuale
			int v; //fqiu i afert i pavizituar i nyjes ne indeksin a
			while((v = getAdjUnvisitedVertex(a)) != -1) {
				displayVertex(v);
				vertices[v].wasVisted = true;
				queue.addLast(v);
			}
		}
		
		//vendos wasVisted ne false
		for(int i = 0; i < size; i++)
			vertices[i].wasVisted = false;
		System.out.println();
	}
}

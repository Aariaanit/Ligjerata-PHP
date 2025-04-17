package Day9 ;

public class BST {
	
	public class BSTNode {
		
		int key; //vlera e celesit te nyjes
		BSTNode left, right; //referencat - pointeret ne te dy femijet e nyjes
		
		public BSTNode(int k) {
			key = k;
			left = right = null; //nyja e re qe krijohet ne fillim nuk do te kete femije
		}
	}
	
	BSTNode root; //referenca ne rrenjen e pemes binare
	
	public BST() {
		root = null; //pema binare ne fillim eshte e zbrazet
	}
	
	//insert - O(log2n)
	public void insert(int e) {
		//fillimisht krijojme nyjen e re
		BSTNode newNode = new BSTNode(e);
		//shtimi ne pemen binare
		//se pari kontrollojme nese pema eshte e zbrazet
		if(root == null)
			root = newNode; //nyja e re behet rrenja e pemes
		//pema ka te pakten nje nyje
		else {
			BSTNode current = root;
			//duhet te kontrollojme per vleren e nyjes se re
			//< (left), >= (right)
			while(true) { //infinite loop
				if(e < current.key) {
					//kontrollo nese left-i eshte i lire
					if(current.left == null) {
						//shtoje nyjen e re si femije te majte te current
						current.left = newNode;
						return;
					}
					else
						current = current.left;
				}
				else { //e >= current.key
					//kontrollo nese right-i eshte i lire
					if(current.right == null) {
						//shtoje nyjen e re si femije te djathte te current
						current.right = newNode;
						return;
					}
					else {
						current = current.right;
					}
				}
			}
		}
	}
	
	//find - O(log2n)
	public BSTNode find(int k) {
		//kontrollojme nese pema eshte e zbrazet
		if(root == null)
			return null;
		//te pakten nje nyje ka pema
		BSTNode current = root;
		while(current.key != k) {
			if(k < current.key) //left
				current = current.left;
			else //k > current.key; right
				current = current.right;
			
			//kontrollo nese current eshte null
			if(current == null)
				return null; //elementi i kerkuar nuk u gjet ne pemen
		}
		return current;
	}
	
	//delete
	public boolean delete(int k) {
		//kontrollojme nese pema eshte e zbrazet
		if(root == null)
			return false;
		//te pakten nje nyje ka pema
		BSTNode curr = root;
		BSTNode parent = root;
		boolean isLeftChild = true;
		//find
		while(curr.key != k) {
			parent = curr;
			if(k < curr.key) {
				isLeftChild = true;
				curr = curr.left;
			}
			else {
				isLeftChild = false;
				curr = curr.right;
			}
			if(curr == null)
				return false;
		}
		
		//delete
		
		//curr is leaf node
		if(curr.left == null && curr.right == null) {
			if(curr == root)
				root = null;
			else if(isLeftChild)
				parent.left = null;
			else
				parent.right = null;
		}
		
		//curr has only left child
		else if(curr.left != null && curr.right == null) {
			if(curr == root) {
				root = curr.left;
			}
			else if(isLeftChild) {
				parent.left = curr.left;
			}
			else {
				parent.right = curr.left;
			}
		}
		
		//curr has only right child
		else if(curr.left == null && curr.right != null) {
			if(curr == root) {
				root = curr.right;
			}
			else if(isLeftChild) {
				parent.left = curr.right;
			}
			else {
				parent.right = curr.right;
			}
		}
		//curr has two children
		else {
			BSTNode successor = getSuccessor(curr);
			if(curr == root) {
				root = successor;
			}
			else if(isLeftChild) {
				parent.left = successor;
			}
			else {
				parent.right = successor;
			}
			successor.left = curr.left;
		}
		return true;
	}
		
	//gjetja e nyjes qe e zevendeson nyjen qe largohet nga pema, dhe e cila ka dy femije
	private BSTNode getSuccessor(BSTNode delNode) {
		BSTNode successorParent = delNode;
		BSTNode successor = delNode;
		BSTNode curr = delNode.right;
		while(curr != null) {
			successorParent = successor;
			successor = curr;
			curr = curr.left;
		}
		if(successor != delNode.right) {
			successorParent.left = successor.right;
			successor.right = delNode.right;
		}
		return successor;
	}
	
	//traverse
	
	//preorder
	public void preorder(BSTNode r) {
		System.out.print(r.key + " ");
		if(r.left != null)
			preorder(r.left);
		if(r.right != null)
			preorder(r.right);
	}
	
	//inorder
	public void inorder(BSTNode r) {
		if(r.left != null)
			inorder(r.left);
		System.out.print(r.key + " ");
		if(r.right != null)
			inorder(r.right);
	}
		
	//postorder
	public void postorder(BSTNode r) {
		if(r.left != null)
			postorder(r.left);
		if(r.right != null)
			postorder(r.right);
		System.out.print(r.key + " ");
	}
}
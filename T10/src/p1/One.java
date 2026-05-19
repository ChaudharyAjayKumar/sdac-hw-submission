package p1;

public class One {
public static void main(String[] args) {
	String n1="ajay";
	String n2="kumar";
	String n3="ajay";
	
	String n4="      ajay  ";
	int a =10;
	
	System.out.println(n1.length());
	System.out.println(n1.compareTo(n3));
	System.out.println(n1.compareTo(n2));
	System.out.println(n1.concat(n2));
	System.out.println(n4.trim());
	System.out.println(n1.replace('a', 'z'));
	System.out.println(String.valueOf(a)+17);
}
}

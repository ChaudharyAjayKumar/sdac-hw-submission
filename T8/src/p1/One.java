package p1;




public class One {
public static void main(String[] args) {
	try {
		int a[]=new int[5];
		a[5]=10/0;
	} catch (ArithmeticException e) {
		System.out.println(e);
	}catch (IndexOutOfBoundsException e) {
		System.out.println(e);
	}catch (Exception e) {
		System.out.println(e);
	}
	finally {
		System.out.println("always exceuted for closing statement");
	}
}
}

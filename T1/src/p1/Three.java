package p1;

public class Three {
	public String name;
	private int id;
	protected double sal;
	String address;
	
	public static void main(String[] args) {
		 Three three=new Three();
		 System.out.println(three.address);
		 System.out.println(three.id);
		 System.out.println(three.sal);
		 System.out.println(three.name);
	}
	

}

class Company {
	public static void main(String[] args) {
		 Three three=new Three();
		 System.out.println(three.address);
	//	 System.out.println(three.id);
		 System.out.println(three.sal);
		 System.out.println(three.name);
	
	}
}


class Emp1 extends Three{
	public static void main(String[] args) {
		Emp1 emp=new Emp1();
		System.out.println(emp.address);
		System.out.println(emp.name);
		System.out.println(emp.sal);
	}
}
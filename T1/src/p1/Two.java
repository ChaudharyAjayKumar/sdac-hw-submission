package p1;

public class Two {
	String name;
	static int id=100;
	double sal;
	static String address="malad";
	public Two(String name, double sal) {
		super();
		this.name = name;
		this.sal = sal;
	}
	@Override
	public String toString() {
		return "Two [name=" + name + ", sal=" + sal + "]";
	}
	
	static void disCompInfo() {
		System.out.println(address);
		System.out.println(id);

	}
	 
	void empInfo() {
		System.out.println(name);
		System.out.println(sal);
	}
	 
	public static void main(String[] args) {
		Two two=new Two("borivali", 200);
		two.empInfo();
		Two.disCompInfo();
	}
	
	
	
}

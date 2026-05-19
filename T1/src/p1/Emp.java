package p1;

public class Emp {
	String name;
	int id;
	double sal;
	String address;

	public Emp(String name, int id, double sal, String address) {
		super();
		this.name = name;
		this.id = id;
		this.sal = sal;
		this.address = address;
	}

	@Override
	public String toString() {
		return "Emp [name=" + name + ", id=" + id + ", sal=" + sal + ", address=" + address + "]";
	}
	
	void disInfo() {
		System.out.println(name);
		System.out.println(id);
		System.out.println(sal);
		System.out.println(address);
	}
	
	public static void main(String[] args) {
		Emp emp=new Emp("aajy", 10, 1000, "malad");
		System.out.println(emp);
		emp.disInfo();
	}
}

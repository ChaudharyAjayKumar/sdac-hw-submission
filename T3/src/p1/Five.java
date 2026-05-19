package p1;

public class Five {
	private String name;
	private int id;
	private double sal;
	private String address;

	@Override
	public String toString() {
		return "Five [name=" + name + ", id=" + id + ", sal=" + sal + ", address=" + address + "]";
	}

	public Five(String name, int id, double sal, String address) {
		super();
		this.name = name;
		this.id = id;
		this.sal = sal;
		this.address = address;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public double getSal() {
		return sal;
	}

	public void setSal(double sal) {
		this.sal = sal;
	}

	public String getAddress() {
		return address;
	}

	public void setAddress(String address) {
		this.address = address;
	}
	
	
	public static void main(String[] args) {
		Five five=new Five("ajay", 10, 1000, "malad");
		five.setAddress("borivali");
		System.out.println(five.getAddress());
	}
}

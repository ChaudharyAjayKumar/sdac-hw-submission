package p1;

class Emp5{
	static String cname="tcs";
	int id;
	@Override
	public String toString() {
		return "Emp5 [id=" + id + "]";
	}
	public Emp5(int id) {
		super();
		this.id = id;
	}
	
	void workHour(int id) {
		int whour=4;
		System.out.println("the worrking time of id :"+id +"is"+whour);
	}
	
	
}

public class Six {
public static void main(String[] args) {
	Emp5 emp5=new Emp5(10);
	System.out.println(Emp5.cname);
	emp5.workHour(10);
}
}

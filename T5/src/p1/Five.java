package p1;


class Company{
	String cname="tcs";
	
	public Company() {
		System.out.println("inherit using super");
	}
	
	void makeProject() {
		System.out.println("get the client andn do the workdone");
	}
}


class Emp4 extends Company{
   public Emp4() {
	   super();
	
}
   
   void work() {
	   System.out.println(super.cname);
	   super.makeProject();
	   
   }
}


public class Five {
public static void main(String[] args) {
	Emp4 emp4 =new Emp4();
	emp4.work();
}
}

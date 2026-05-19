package p1;

 abstract class Company{
	void disComPublInfo(){
		System.out.println("Com  namae");
		System.out.println("c total emp");
	}
	
	static void poily() {
		System.out.println("do the waork on time ");
	}
   
	 abstract void doWork();
	
	}
 
 interface Hr{
	 void calSal();
	 void assignWork();
 }

 class Emp extends Company implements Hr{

	@Override
	public void calSal() {
		System.out.println(5000);
		
	}

	@Override
	public void assignWork() {
		System.out.println("service");
		
	}

	@Override
	void doWork() {
		System.out.println("do cleaning ");
		
	}
	 
 }
 
public class One {
public static void main(String[] args) {
	Emp emp =new Emp();
	emp.calSal();
}
}

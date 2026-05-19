package p1;

class Company{
	private int sal=2000;
	private static String cproject="tcs";
	class Emp{
		void getSal() {
			System.out.println(sal);
		}
	}
	
static 	class CompPUblDat{
		static void getProject(){
			System.out.println(cproject);
		}
	}


void workHr() {
	final int whr=10;
	class Overtime{
		void bonus() {
			System.out.println("based on working hr cali bonus"+whr);
		}
	}
	Overtime overtime=new Overtime();
	overtime.bonus();
}

}



public class Three {
public static void main(String[] args) {
	Company company=new Company();
	Company.Emp emp=company.new Emp();
	emp.getSal();
	
	Company.CompPUblDat.getProject();
	
	company.workHr();
}
}

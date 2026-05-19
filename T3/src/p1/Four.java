package p1;


class Hr{
	 void calSal(int amt,double tax) {
			System.out.println(amt-tax);
		}
		 
		  void calsal(int amt,double tax,int ppf) {
			System.out.println(amt-tax+ppf);

		}
}



class Emp3 extends Hr {
	@Override
	void calSal(int amt, double tax) {
		System.out.println(amt-tax+10000);
	}
}


public class Four {

  public static void main(String[] args) {
	Emp3 emp3=new Emp3();
	emp3.calsal(1000, 100, 200);
	emp3.calSal(1000, 100);
}
  
  
}

package p1;


class Hr1{
	void assignWork() {
		
	}
}

class Emp1{
	void doWork(Hr1 w) {
		w.assignWork();
	}
}


public class Two {
public static void main(String[] args) {
	Emp1 emp1=new Emp1();
	emp1.doWork(new Hr1() {
		@Override
		void assignWork() {
			System.out.println("assign work to emp");
		}
	});
}
}

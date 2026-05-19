package p1;

class Rbi{
	int roi;
	
	void interest() {
		System.out.println("baesd on tern andpilcy");
	}
	
	
}

class Sbi extends Rbi{
	@Override
	void interest() {
		System.out.println(10);
	}
}

class Axix extends Rbi{
	 @Override
	void interest() {
		System.out.println(20);
	}
}

class Tapri extends Sbi{
	void openAccount() {
		System.out.println("provide neccesary document");
	}
}
public class Three {
public static void main(String[] args) {
	Rbi r;
	 r=new Sbi();
	 r.interest();
	 
	 r=new Axix();
	 r.interest();
	 
}
}

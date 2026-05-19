package p1;

class Emp{
	Emp sal() {
		return  this;
	}
}

class Hr extends Emp{
	@Override
	Hr sal() {
		// TODO Auto-generated method stub
		return this;
	}
	
	void dis() {
		System.out.println("can be assccessed throgh main class");
	}
}

public class Two {
public static void main(String[] args) {
	Hr hr=new Hr();
	hr.sal().dis();
}
}

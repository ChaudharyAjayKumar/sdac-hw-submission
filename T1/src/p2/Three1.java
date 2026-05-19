package p2;

import p1.Three;

public class Three1  extends Three{
public static void main(String[] args) {
	Three1 three1=new Three1();
	System.out.println(three1.name);
	System.out.println(three1.sal);
}
}

class Three2 extends p1.Three{
	public static void main(String[] args) {
		Three2 three2=new Three2();
		System.out.println(three2.name);
		System.out.println(three2.sal);
	}
	}


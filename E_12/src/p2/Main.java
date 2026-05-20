package p2;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;



public class Main {
	public static void main(String[] args) {
		
		
		EmpPojo e1=new EmpPojo("ajay", 1, 2000);
		EmpPojo e2=new EmpPojo("jaya", 2, 4000);
		EmpPojo e3=new EmpPojo("jay", 3, 6000);
		EmpPojo e4=new EmpPojo("ajau", 4, 8000);
		
		
	

		OperationImpl op = new OperationImpl();
		op.add(e1);
		op.add(e2);
		op.add(e3);
		op.add(e4);
		
		op.show();

		System.out.println("_______________________________________");
		op.update("raju", 3);
		op.show();

		System.out.println("_______________________________________");
		op.delete(3);
		op.show();

		System.out.println("_______________________________________");
		op.search(4);

	}
}

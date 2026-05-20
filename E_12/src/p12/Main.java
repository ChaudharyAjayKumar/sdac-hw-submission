package p12;


import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;
import java.util.Vector;

public class Main {
	public static void main(String[] args) {
		Vector<EmpPojo> l = new Vector<EmpPojo>();
		l.add(new EmpPojo("ajay", 1, 2000));
		l.add(new EmpPojo("jay", 2, 4000));
		l.add(new EmpPojo("jaya", 3, 1000));
		l.add(new EmpPojo("ajau", 4, 5000));

		OperationImpl op = new OperationImpl();
		op.add(l);
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
package p1.copy2;

import java.util.ArrayList;
import java.util.List;

public class Main {
public static void main(String[] args) {
	EmpPojo empPojo1=new EmpPojo("aajy", 10, 100);
	EmpPojo empPojo2=new EmpPojo("aajy", 11, 100);
	EmpPojo empPojo3=new EmpPojo("aajy", 12, 100);
	EmpPojo empPojo4=new EmpPojo("aajy", 13, 100);
	
	List<EmpPojo> list=new ArrayList<EmpPojo>();
	list.add(empPojo4);
	list.add(empPojo3);
	list.add(empPojo2);
	list.add(empPojo1);
	
	Operationimpl operationimpl=new Operationimpl();
	operationimpl.add(list);
	
	operationimpl.show();
	
	System.out.println("''''''''''''''''''''''''''''''");
	
	operationimpl.update(10, "ramu");
	operationimpl.show();
	
	System.out.println("''''''''''''''''''''''''''''");
	operationimpl.delete(10);
	operationimpl.show();
	
	System.out.println("'''''''''''''''''''''''''''");
	operationimpl.search(12);
}
}

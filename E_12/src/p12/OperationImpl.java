package p12;


import java.util.Enumeration;
import java.util.Iterator;
import java.util.LinkedList;
import java.util.List;
import java.util.ListIterator;
import java.util.Vector;

public class OperationImpl implements Operation {
   Vector<EmpPojo> db= new Vector<EmpPojo>();
	
	@Override
	public void add(List<EmpPojo> l) {
		db.addAll(l);
		System.out.println("inserted....");
		
	}

	@Override
	public void update(String name, int id) {
		Iterator<EmpPojo> iterator=db.iterator();
	 while (iterator.hasNext()) {
		EmpPojo empPojo = (EmpPojo) iterator.next();
		if (empPojo.getId() == id) {
			empPojo.setName(name);
		}
		
		System.out.println("updated...");
	}
		
		
		
	}

	@Override
	public void delete(int id) {
		Iterator<EmpPojo> iterator=db.iterator();
		 while (iterator.hasNext()) {
			EmpPojo empPojo = (EmpPojo) iterator.next();
			if (empPojo.getId() == id) {
				iterator.remove();
			}
			
			System.out.println("deleted...");
		}
		
	}

	@Override
	public void search(int id) {
		Iterator<EmpPojo> iterator=db.iterator();
		 while (iterator.hasNext()) {
			EmpPojo empPojo = (EmpPojo) iterator.next();
			if (empPojo.getId() == id) {
				System.out.println(empPojo);
				break;
			}
			
			
		}
		
	}

	@Override
	public void show() {

		Enumeration<EmpPojo> en=db.elements();
		while (en.hasMoreElements()) {
			EmpPojo empPojo = (EmpPojo) en.nextElement();
			System.out.println(empPojo);
		}
		
	}

}

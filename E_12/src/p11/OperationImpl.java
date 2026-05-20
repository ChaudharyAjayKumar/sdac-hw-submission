package p11;

import java.util.Iterator;
import java.util.LinkedList;
import java.util.List;
import java.util.ListIterator;

public class OperationImpl implements Operation {
   List<EmpPojo> db= new LinkedList<EmpPojo>();
	
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
				db.remove(id);
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
			}
			
			
		}
		
	}

	@Override
	public void show() {
		ListIterator<EmpPojo> listIterator=db.listIterator();
		while (listIterator.hasNext()) {
			EmpPojo empPojo = (EmpPojo) listIterator.next();
			System.out.println(empPojo);
			
		}
		
		System.out.println("prevoius......");
		ListIterator<EmpPojo> listIterator1=db.listIterator(db.size());
		while (listIterator1.hasPrevious()) {
			EmpPojo empPojo = (EmpPojo) listIterator1.previous();
			System.out.println(empPojo);
			
		}
		
		
		
		
	}

}

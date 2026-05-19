package p1.copy;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.LinkedList;
import java.util.List;
import java.util.ListIterator;

public class Operationimpl implements Operation {
    List<EmpPojo > db=new LinkedList<EmpPojo>();
	
	
	@Override
	public void add(List<EmpPojo> l) {
		db.addAll(l);
		System.out.println("insterted...");
		
	}

	@Override
	public void update(int id, String name) {
		Iterator<EmpPojo> iterator=db.iterator();
		while (iterator.hasNext()) {
			EmpPojo empPojo = (EmpPojo) iterator.next();
			if (empPojo.getId()== id) {
				empPojo.setName(name);
				System.out.println("updated");
			}
		}
		
	}

	@Override
	public void delete(int id) {
		Iterator<EmpPojo> iterator=db.iterator();
		while (iterator.hasNext()) {
			EmpPojo empPojo = (EmpPojo) iterator.next();
			if (empPojo.getId()== id) {
				iterator.remove();
				System.out.println("deleted");
			}
		}
		
		
	}

	@Override
	public void search(int id) {
		ListIterator<EmpPojo> iterator=db.listIterator(db.size());
		while (iterator.hasNext()) {
			EmpPojo empPojo = (EmpPojo) iterator.next();
			if (empPojo.getId()== id) {
				
				System.out.println(empPojo);
				System.out.println("found");
			}
		}
		
		ListIterator<EmpPojo> ll=db.listIterator(db.size());
		while (ll.hasPrevious()) {
			EmpPojo empPojo = (EmpPojo) ll.previous();
			if (empPojo.getId()== id) {
				
				System.out.println(empPojo);
				System.out.println("found");
			}
		}
		
	}

	@Override
	public void show() {
		Iterator<EmpPojo> iterator=db.iterator();
		while (iterator.hasNext()) {
			EmpPojo empPojo = (EmpPojo) iterator.next();
			System.out.println(empPojo);
		}
		
		
	}

}

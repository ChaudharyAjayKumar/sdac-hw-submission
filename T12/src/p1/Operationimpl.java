package p1;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;

public class Operationimpl implements Operation {
    List<EmpPojo > db=new ArrayList<EmpPojo>();
	
	
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
		Iterator<EmpPojo> iterator=db.iterator();
		while (iterator.hasNext()) {
			EmpPojo empPojo = (EmpPojo) iterator.next();
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

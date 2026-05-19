package p1.copy.copy;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.Iterator;
import java.util.LinkedList;
import java.util.List;
import java.util.ListIterator;
import java.util.Map;
import java.util.Map.Entry;

public class Operationimpl implements Operation {
    Map<Integer, EmpPojo> db=new HashMap<Integer, EmpPojo>();
	
	
	@Override
	public void add(EmpPojo emp) {
		db.put(emp.getId(), emp);
		System.out.println("insterted...");
		
	}

	@Override
	public void update(int id, String name) {
		Iterator<Entry<Integer, EmpPojo>> iterator=db.entrySet().iterator();
		while (iterator.hasNext()) {
			Entry<Integer, EmpPojo> entry=iterator.next();
			if (entry.getKey()== id) {
				EmpPojo empPojo=entry.getValue();
				empPojo.setName(name);
				System.out.println("updated");
			}
		}
		
	}

	@Override
	public void delete(int id) {
		Iterator<Entry<Integer, EmpPojo>> iterator=db.entrySet().iterator();
		while (iterator.hasNext()) {
			Entry<Integer, EmpPojo> entry=iterator.next();
			if (entry.getKey()== id) {
				iterator.remove();
				System.out.println("deleted");
			}
		}
		
		
	}

	@Override
	public void search(int id) {
		Iterator<Entry<Integer, EmpPojo>> iterator=db.entrySet().iterator();
		while (iterator.hasNext()) {
			Entry<Integer, EmpPojo> entry=iterator.next();
			if (entry.getKey()== id) {
				
				System.out.println(entry.getKey()+" "+ entry.getValue());
				System.out.println("found");
			}
		}
		
		
		
	}

	@Override
	public void show() {
		Iterator<Entry<Integer, EmpPojo>> iterator=db.entrySet().iterator();
		while (iterator.hasNext()) {
			Entry<Integer, EmpPojo> entry=iterator.next();
			System.out.println(entry.getKey()+" "+ entry.getValue());
		}
		
		
	}

}

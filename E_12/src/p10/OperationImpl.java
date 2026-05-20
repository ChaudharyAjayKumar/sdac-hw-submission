package p10;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;

public class OperationImpl implements Operation {

	List<EmpPojo> db = new ArrayList<EmpPojo>();

	@Override
	public void add(List<EmpPojo> l) {
		db.addAll(l);
		System.out.println("inserted...");

	}

	@Override
	public void update(String name, int id) {
		Iterator<EmpPojo> iterator = db.iterator();
		while (iterator.hasNext()) {
			EmpPojo empPojo = (EmpPojo) iterator.next();
			if (empPojo.getId() == id) {
				empPojo.setName(name);
			}
		}

		System.out.println("updated....");

	}

	@Override
	public void delete(int id) {
		Iterator<EmpPojo> iterator = db.iterator();
		while (iterator.hasNext()) {
			EmpPojo empPojo = (EmpPojo) iterator.next();
			if (empPojo.getId() == id) {
				db.remove(id);
			}
		}

		System.out.println("deleted....");

	}

	@Override
	public void search(int id) {
		Iterator<EmpPojo> iterator = db.iterator();
		while (iterator.hasNext()) {
			EmpPojo empPojo = (EmpPojo) iterator.next();
			if (empPojo.getId() == id) {
				System.out.println(empPojo);
			}
		}

	}

	@Override
	public void show() {

		for (EmpPojo empPojo : db) {
			System.out.println(empPojo);
		}

	}

}

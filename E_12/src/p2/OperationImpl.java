package p2;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.Iterator;
import java.util.List;
import java.util.Map;
import java.util.Map.Entry;

public class OperationImpl implements Operation {
	Map<Integer, EmpPojo> map = new HashMap<Integer, EmpPojo>();

	@Override
	public void add(p12.EmpPojo e1) {
		map.put(e1.getId(), e1);
		System.out.println("inserted......");

	}

	@Override
	public void update(String name, int id) {
		Iterator<Entry<Integer, EmpPojo>> iterator = map.entrySet().iterator();
		while (iterator.hasNext()) {
			Entry<Integer, EmpPojo> entry = iterator.next();
			EmpPojo empPojo = entry.getValue();
			if (empPojo.getId() == id) {
				empPojo.setName(name);
				System.out.println("updated....");
				break;
			}

		}

	}

	@Override
	public void delete(int id) {
		Iterator<Entry<Integer, EmpPojo>> iterator = map.entrySet().iterator();
		while (iterator.hasNext()) {
			Entry<Integer, EmpPojo> entry = iterator.next();
			EmpPojo empPojo = entry.getValue();
			if (empPojo.getId() == id) {
				iterator.remove();
				System.out.println("delterd....");
				break;
			}

		}

	}

	@Override
	public void search(int id) {
		Iterator<Entry<Integer, EmpPojo>> iterator = map.entrySet().iterator();
		while (iterator.hasNext()) {
			Entry<Integer, EmpPojo> entry = iterator.next();
			EmpPojo empPojo = entry.getValue();
			if (empPojo.getId() == id) {
				System.out.println(empPojo);

			}

		}

	}

	@Override
	public void show() {
		Iterator<Entry<Integer, EmpPojo>> iterator=map.entrySet().iterator();
		while (iterator.hasNext()) {
		Entry<Integer, EmpPojo> entry =  iterator.next();
		EmpPojo empPojo=entry.getValue();
		System.out.println(entry.getKey()+":"+empPojo);
			
		}
		
	

	}

}

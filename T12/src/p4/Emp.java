package p4;

import java.util.ArrayList;
import java.util.Collection;
import java.util.Collections;
import java.util.Iterator;
import java.util.List;



public class Emp implements   Comparable<Emp> {

	int id;
	int age;
	
	public Emp(int id, int age) {
		super();
		this.id = id;
		this.age = age;
	}

	@Override
	public String toString() {
		return "Emp [id=" + id + ", age=" + age + "]";
	}

	@Override
	public int compareTo(Emp o) {
		if(o.id < this.id) {
			return -1;
		}else if (o.id > this.id) {
			return 1;
		}
		return 0;
	}

	public static void main(String[] args) {
		Emp emp1=new Emp(10, 10);
		Emp emp2=new Emp(11, 15);
		Emp emp3=new Emp(12, 5);
		
		List<Emp> list=new ArrayList<Emp>();
		list.add(emp1);
		list.add(emp2);
		list.add(emp3);
		
//		Iterator<Emp> iterator=list.iterator();
//		while (iterator.hasNext()) {
//			Emp emp = (Emp) iterator.next();
//			System.out.println(emp);
//		}
		
		Collections.sort(list);
		Iterator<Emp> iterable=list.iterator();
		while (iterable.hasNext()) {
			Emp emp = (Emp) iterable.next();
			System.out.println(emp);
			
		}
		
		
	}
}

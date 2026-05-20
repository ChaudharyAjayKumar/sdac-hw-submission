package p5;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.List;

public class Comprator {
private int id;
private String name;
public Comprator(int id, String name) {
	super();
	this.id = id;
	this.name = name;
}
@Override
public String toString() {
	return "Comprator [id=" + id + ", name=" + name + "]";
}
public int getId() {
	return id;
}
public void setId(int id) {
	this.id = id;
}
public String getName() {
	return name;
}
public void setName(String name) {

	this.name = name;
}

public static void main(String[] args) {
	List<Comprator> l=new ArrayList<Comprator>();
	l.add(new Comprator(1, "ram"));
	l.add(new Comprator(6, "jay"));
	l.add(new Comprator(4, "jaya"));
	
	System.out.println("before:");
	for (Comprator c : l) {
		System.out.println(c);
	}
	Collections.sort(l,new SortName());
	System.out.println("after");
	for (Comprator c : l) {
		System.out.println(c);
	}
	
	
}
}

class SortName implements Comparator<Comprator>{

	@Override
	public int compare(Comprator o1, Comprator o2) {
		
		return o1.getName().compareTo(o2.getName());
	}
	
}



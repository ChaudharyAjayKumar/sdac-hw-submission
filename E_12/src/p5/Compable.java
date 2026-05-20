package p5;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

public class Compable implements Comparable<Compable>{
private int id;
private String name;
public Compable(int id, String name) {
	super();
	this.id = id;
	this.name = name;
}
@Override
public String toString() {
	return "Compable [id=" + id + ", name=" + name + "]";
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
@Override
public int compareTo(Compable o) {
	return this.id -o.id;
}


public static void main(String[] args) {
	List<Compable> l=new ArrayList<Compable>();
	l.add(new Compable(1, "ajay"));
	l.add(new Compable(6, "jay"));
	l.add(new Compable(4, "jaya"));
	
	System.out.println("before:");
	for (Compable c : l) {
		System.out.println(c);
	}
	Collections.sort(l);
	System.out.println("after");
	for (Compable c : l) {
		System.out.println(c);
	}
	
	
}
}

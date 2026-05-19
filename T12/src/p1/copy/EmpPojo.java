package p1.copy;

public class EmpPojo {
private String name;
@Override
public String toString() {
	return "EmpPojo [name=" + name + ", id=" + id + ", age=" + age + "]";
}
private int id;
private int age;
public EmpPojo(String name, int id, int age) {
	super();
	this.name = name;
	this.id = id;
	this.age = age;
}
public String getName() {
	return name;
}
public void setName(String name) {
	this.name = name;
}
public int getId() {
	return id;
}
public void setId(int id) {
	this.id = id;
}
public int getAge() {
	return age;
}
public void setAge(int age) {
	this.age = age;
}
}
